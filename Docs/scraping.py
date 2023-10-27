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
# for i in range(1,6):
#     url=f"https://www.aliexpress.com/w/wholesale-skin-care.html?page={i}&g=y&SearchText=skin+care"
#     print(url)
#     driver=webdriver.Chrome()
#     driver.get(str(url))
#     links=driver.find_elements(By.CLASS_NAME,"multi--container--1UZxxHY")
#     for x in links:
#         print(x.get_attribute('href'))
#         links_list.append(str(x.get_attribute('href')))
#         cp+=1
# with open('links_aliexpress.csv',mode='w',newline='',encoding='utf') as filec:
#     writer=csv.writer(filec)
#     for x in links_list:
#         writer.writerow([x])
# print(cp)


with open('Docs/links_aliexpress.csv','r',encoding='utf8') as filecsv:
    csv_reader = csv.reader(filecsv, delimiter=',')
    for ff in csv_reader:
        links_list.append(ff)
    # for i in range(1,len(links_list)):
    #     print(links_list[i][0])
    
url=links_list[0][0]
print(url)
driver=webdriver.Chrome()
driver.get(str(url))
title=driver.find_element(By.CLASS_NAME,'title--wrap--Ms9Zv4A')
title=title.find_element(By.TAG_NAME,'h1').text

price=driver.find_element(By.CLASS_NAME , 'es--wrap--erdmPRe')
price=driver.find_elements(By.TAG_NAME,'span')
price_total=''
for i in range(2,len(price)):
    price_total+=price[i].text
content=driver.find_element(By.CLASS_NAME,'extend--content--DlnAngg')

print(price_total)
print(title)
print(content.get_attribute('innerHTML'))

