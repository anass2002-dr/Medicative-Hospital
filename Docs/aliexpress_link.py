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

links_list=[]

for i in range(1,6):
    cp=0
    while(cp==0):
        url=f'https://www.aliexpress.com/w/wholesale-beauty-device.html?page={i}&g=y&SearchText=beauty+device'
        # clas='multi--container--1UZxxHY'
        print(f'page {i}')
        driver=webdriver.Chrome()
        driver.get(url)
        # time.sleep(1000)
        try:
            links=driver.find_elements(By.CLASS_NAME,'multi--container--1UZxxHY')
            print(len(links))
            
            for x in links:
                links_list.append(str(x.get_attribute('href')))
                cp+=1
            print(cp)
        except Exception as e:
            cp=0
            driver.close
   
for y in links_list:
    print(y)

with open('Docs/aliexpres_link_beauty_device.csv',mode='w',newline='',encoding='utf') as filec:
    writer=csv.writer(filec)
    for x in links_list:
        writer.writerow([x])