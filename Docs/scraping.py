import schedule
import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import csv
import json
import requests
import os
path="C:\\Program Files (x86)\\chromedriver.exe"
cp=0
links_list=[]



with open('Docs/links_aliexpress.csv','r',encoding='utf8') as filecsv:
    csv_reader = csv.reader(filecsv, delimiter=',')
    for ff in csv_reader:
        links_list.append(ff)
    # for i in range(1,len(links_list)):
    #     print(links_list[i][0])
    
# url=links_list[0][0]
url="https://www.aliexpress.com/item/1005005990085273.html"
# print(url)
driver=webdriver.Chrome()
driver.get(str(url))
title=driver.find_element(By.CLASS_NAME,'title--wrap--Ms9Zv4A')
title=title.find_element(By.TAG_NAME,'h1').text
#price
price=driver.find_element(By.CLASS_NAME , 'es--wrap--erdmPRe')
sp=price.find_elements(By.TAG_NAME,"span")
price=''
for i in range(2,len(sp)):
    price+=sp[i].text

price=float(price)

img_data=''
img_list=[]
div_slide=driver.find_elements(By.CLASS_NAME,'slider--img--D7MJNPZ')
for x in div_slide:
    img_list.append(str(x.find_element(By.TAG_NAME,'img').get_attribute('src')));
for y in img_list:
    print(y)

print(title)
print(price)
