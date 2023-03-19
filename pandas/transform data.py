import json
from datetime import datetime

with open('data.json', 'r') as f:
    data = json.load(f)

for item in data:
    if 'food' in item:
        countFood = 0
        if "'solyanka'" in item['food'] or "'borsch'" in item['food'] or "'kharcho'" in item['food']:
            countFood = 5
        if "'cutlet'" in item['food'] or "'pasta'" in item['food'] or "'potatoes'" in item['food'] or "'chicken'" in item['food'] or "'rice'" in item['food'] or "'buckwheat'" in item['food']:
            countFood = countFood + 3
        if "'crab'" in item['food'] or "'olivier'" in item['food'] or "'beetroot'" in item['food']:
            countFood = countFood + 5
        if "'compote'" in item['food']:
            countFood = countFood + 4
        if "'kissel'" in item['food']:
            countFood = countFood + 3
       
        item['food'] = item['food'].replace(item['food'], str(countFood))

    if 'url' in item:
            item['url'] = item['url'].replace(item['url'], "1")
    if 'commit' in item:
            item['commit'] = item['commit'].replace(item['commit'], "1")
    if 'message' in item:
            item['message'] = item['message'].replace(item['message'], "1")


    
    if 'timestamp' in item:
        
        date_time_obj = datetime.strptime(item['timestamp'], '%d.%m.%Y %H:%M:%S')
       
        item['timestamp'] = date_time_obj.date().isoformat()


with open('outputed.json', 'w') as f:
    json.dump(data, f)

print(json.dumps(data, indent=4))