import json
import csv

cols = ['id', 'timestamp', 'food', 'commit', 'count', 'out', 'auth', 'url', 'message'] 


with open('output.json') as f:
    data = json.load(f)

print(data)

with open('lal.csv', 'w') as f:
  wr = csv.DictWriter(f, fieldnames = cols) 
  wr.writeheader() 
  wr.writerows(data) 