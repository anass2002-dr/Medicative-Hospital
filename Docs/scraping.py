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
from datetime import date
path="C:\\Program Files (x86)\\chromedriver.exe"
cp=0
links_list=[]



with open('Docs/links_aliexpress.csv','r',encoding='utf8') as filecsv:
    csv_reader = csv.reader(filecsv, delimiter=',')
    for ff in csv_reader:
        links_list.append(ff)
    
query="INSERT INTO `product` (`TITLE`, `CATEGORY_ID`, `PHOTO`, `VIDEO`, `PRODUCT_LINK`, `CONTENT`, `PRODUCT_SHORT`, `PRODUCT_PRICE`, `SPONSOR_ID`, `CREATED_DATE`, `UPDATE_DATE`) values"
new_link_list=[]
for link in links_list:
    for x in link:
        y=x.split('?')
        new_link_list.append(y[0])
for i in range(0,4):
    err=True
    url=str(new_link_list[i])
    driver=webdriver.Chrome()
    driver.get(str(url))
    title=driver.title
    
    while(err):
        try:
            driver=webdriver.Chrome()
            driver.get(str(url))
            page_title=driver.title
            if(page_title!='Page Not Found - Aliexpress.com'):
                # query="INSERT INTO `product` (`TITLE`, `CATEGORY_ID`, `PHOTO`, `VIDEO`, `PRODUCT_LINK`, `CONTENT`, `PRODUCT_SHORT`, `PRODUCT_PRICE`, `SPONSOR_ID`, `CREATED_DATE`, `UPDATE_DATE`) values"
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
                    img_list.append(str(x.find_element(By.TAG_NAME,'img').get_attribute('src')).replace('80x80.jpg_',''))
                for y in img_list:
                    print(y)
                video_src=''
                try:
                    video=driver.find_element(By.CLASS_NAME,'video--video--Zj0EIzE')
                    video_src=video.find_element(By.TAG_NAME,'source').get_attribute('src')
                except Exception as e:
                    print('video not founded')
                print(video_src)

                print(title)
                price=float("{:.2f}".format(price/10.31))
                print(price)
                today = date.today()
                query+=f"('{title}',6,'{img_list[0]}','{video_src}','{url}','{title}','{title}',{price},2,'{today}','{today}'),"
            err=False
        except Exception as e:
            err=True
            print(e)
            driver.close()
print(query)