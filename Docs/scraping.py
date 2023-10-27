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
for i in range(1,5):
    url=f"https://www.aliexpress.com/w/wholesale-beauty-products.html?page={i}&g=y&SearchText=beauty+products"
    print(url)
    driver=webdriver.Chrome()
    driver.get(str(url))
    links=driver.find_elements(By.CLASS_NAME,"multi--container--1UZxxHY")
    for x in links:
        print(x.get_attribute('href'))
        links_list.append(str(x.get_attribute('href')))
        cp+=1
with open('links_aliexpress.csv',mode='w',newline='',encoding='utf') as filec:
    writer=csv.writer(filec)
    for x in links_list:
        writer.writerow([x])
    
