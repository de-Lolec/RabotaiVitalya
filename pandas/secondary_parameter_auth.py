#!/usr/bin/env python
# coding: utf-8

# In[187]:


import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import statistics
from scipy.stats import norm
from sklearn.model_selection import train_test_split
from matplotlib.colors import Normalize
from sklearn.cluster import DBSCAN
from sklearn.datasets import load_boston
import seaborn as sns
anomal = []


# In[217]:


df = pd.read_csv("output.csv")


# In[218]:





# In[219]:


len(df)


# In[220]:



df.dtypes


# In[364]:


bbg = df.auth


# In[365]:


dm = pd.DataFrame(bbg)

dm.dropna()


# In[366]:


df[['id', 'auth']]


# In[367]:


dr=df['timestamp']


# In[368]:


dr


# In[369]:


nio = pd.concat([dm.dropna(),dr], sort=False, axis=1)


# In[389]:


nio2 = pd.DataFrame(nio)


# In[390]:


df_sum = nio2.groupby('timestamp').sum().reset_index()


# In[391]:



plt.style.use('dark_background')
df_sum.hist()


# In[539]:



plt.style.use("fivethirtyeight")

plt.figure(figsize=(12, 10))

plt.xlabel("timestamp")
plt.ylabel("auth")
plt.title("Sample Time Series Plot")

df_sum.plot()


# In[540]:


x = df_sum.auth.head(66)


# In[541]:


mean = statistics.mean(x)
sd = statistics.stdev(x)
disp = statistics.variance(x)
print('Minimum salary ' + str(x.min()))
print('Maximum salary ' + str(x.max()))
print(mean)
print(sd)
print(disp)


# In[542]:


max = str(df_sum['auth'].max())
min = str(df_sum['auth'].min())


# In[543]:


print(max)
print(min)


# In[544]:


df_sum


# In[545]:


df_sum


# In[ ]:





# In[546]:


df_sum['auth'].plot(kind='box')


color = {
    "boxes": "DarkGreen",
    "whiskers": "DarkOrange",
    "medians": "DarkBlue",
    "caps": "Gray",
}


df_sum.plot.box(color=color, sym="r+");
plt.show()


# In[ ]:





# In[547]:



df_sum['auth'].plot(kind='hist')
plt.show()


# In[548]:


max = str(df_sum['auth'].max())
min = str(df_sum['auth'].min())


# In[549]:


lower_bound = mean-1.5*sd
upper_bound = mean+1.5*sd
print(lower_bound, upper_bound)


# In[550]:


anomal = []
for i in range(x.size):
    if x.iloc[i] > upper_bound or x.iloc[i] < lower_bound:
        anomal.append(x.iloc[i])
print(anomal)
vv=len(anomal)


# In[551]:


if ((vv)/x.size)*100> 15:
    print("Подозрение на выгорание")
else:
    print("Нет подозрения на выгорание")


# In[552]:


mu, sigma = 0, 0.1


# In[553]:


abs(mu - np.mean(x))


# In[554]:


abs(sigma - np.std(x, ddof=1))


# In[555]:




count, bins, ignored = plt.hist(x, 30, density=True)
plt.plot(bins, 1/(sigma * np.sqrt(2 * np.pi)) *
               np.exp( - (bins - mu)**2 / (2 * sigma**2) ),
         linewidth=3, color='r')
plt.show()


# In[556]:


sns.histplot(x, kde=True)

plt.show()


# In[722]:



рh = 1/(vv/x.size)
data = {"auth": ph}

with open("auth.json", "w") as f:
    json.dump(data, f)


# In[ ]:





# In[ ]:





# In[ ]:





# In[ ]:





# In[ ]:




