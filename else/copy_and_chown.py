import os

user_name = ["jaehun", "ryeodam", "seongho", "sumin", "jinhyun", "minji", "hyunho", "seojun", "kookhwan", "dongha", "soyun", "sunwoo", "jimin", "minjoon", "woojung", "seungwoo", "junseo"]

for name in user_name :
    os.system("cp -r /var/www/webhacking.site/daehun/homework" + " " + "/var/www/webhacking.site/" + name + "/noticeboard")
    os.system("chown -R " + name + ":" + name + "  /var/www/webhacking.site/" + name + "/noticeboard")