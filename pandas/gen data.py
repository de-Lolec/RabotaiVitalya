import random
import json
from datetime import datetime, timedelta

def generate_random_json():
    data = []
    food_list = ["borsch", "solyanka", "kharcho", "cutlet", "potatoes", "pasta", "chicken", "rice", "buckwheat", "olivier", "beetroot", "crab", "compote", "kissel", "snack"]
    commit_list = ["Fix bug", "Add new feature", "Update documentation", "Remove deprecated code", "Optimize performance"]
    count_list = [1, 2, 3]
    message_list = ["Hello", "I am busy right now", "Report sent", "I'll figure it out later"]
    url_list = ["[<https://yandeex.ru>]", "[<https://messager.corp>]", "[<https://www.youtube.com>]", "[<https://e.mail.ru>]"]
    auth_list = ["8:02", "7:58", "7:55", "7:45", "7:56:"]
    out_list = ["18:02", "18:01", "18:04", "18:05", "18:00:"]
    start_date = datetime(2022, 2, 1) 
    end_date = datetime(2022, 7, 2)
    for i in range(1, 2):
        start_date = datetime(2022, 2, 1)
        while start_date < end_date:
            if start_date.weekday() < 5:
                data.append({
                    "id": i,
                    "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(1, 5), hours=random.randint(12, 13))).strftime("%d.%m.%Y %H:%M:%S"),
                    "food": str(random.sample(food_list, random.randint(5, 6)))
                })
                for y in range(random.randint(3, 4)):
                    y+=1
                    data.append({
                        "id": i,
                        "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(1, 10), hours=random.randint(8, 12))).strftime("%d.%m.%Y %H:%M:%S"),
                        "commit": str(random.choice(commit_list))
                    })
                for a in range(random.randint(3, 4)):
                    a+=1
                    data.append({
                        "id": i,
                        "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(15, 30), hours=random.randint(13, 16))).strftime("%d.%m.%Y %H:%M:%S"),
                        "message": str(random.choice(message_list))
                    })
                for j in range(random.randint(4, 6)):
                    j=1
                    data.append({
                        "id": i,
                        "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(20, 35), hours=random.randint(9, 17))).strftime("%d.%m.%Y %H:%M:%S"),
                        "count": str(random.choice(count_list))
                    })
                data.append({
                        "id": i,
                        "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(15, 30), hours=random.randint(16, 17))).strftime("%d.%m.%Y %H:%M:%S"),
                        "count": str("4")
                    })
                for q in range(random.randint(5, 8)):
                    a+=1
                    data.append({
                        "id": i,
                        "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(35, 45), hours=random.randint(8, 17))).strftime("%d.%m.%Y %H:%M:%S"),
                        "url": random.choice(url_list)
                    })
                data.append({
                    "id": i,
                    "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(55, 60), hours=random.randint(7, 7))).strftime("%d.%m.%Y %H:%M:%S"),
                    "auth": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(55, 60), hours=random.randint(7, 7))).strftime("%H:%M:%S"),
                })
                data.append({
                    "id": i,
                    "timestamp": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(1, 10), hours=random.randint(18, 18))).strftime("%d.%m.%Y %H:%M:%S"),
                    "out": (start_date + timedelta(seconds=random.randint(1, 60), minutes=random.randint(1, 10), hours=random.randint(18, 18))).strftime("%H:%M:%S"),
                })
            start_date += timedelta(days=1)

    return json.dumps(data, indent=4)

fe = generate_random_json()

with open('data.json', 'w') as f:
    f.write(fe)

print(generate_random_json())
