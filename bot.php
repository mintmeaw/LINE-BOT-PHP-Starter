import random
while True:
    text = input("> ")
    a = ['Rider','ไรด้า','ไรเดอร์']
    b = ['http://fategrandorder.wikia.com/wiki/Rider']
    if text in a:
        print(random.choice(b))
    else:
        print("?")
