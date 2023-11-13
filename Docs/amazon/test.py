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


url='https://www.amazon.com/Hempz-Body-Lotion-Moisturizing-Moisturizer/dp/B0BNP8TWQ9/ref=sr_1_139?keywords=Body+Skin+Care+Products&qid=1699869068&s=beauty&sr=1-139'
driver=webdriver.Chrome()
driver.set_window_position(-10000,0)
driver.get(str(url))

title=driver.find_element(By.ID,'productTitle').text
price_section=driver.find_element(By.CLASS_NAME,'reinventPricePriceToPayMargin')
price=price_section.find_element(By.CLASS_NAME,'a-price-whole').text
price_dot=price_section.find_element(By.CLASS_NAME,'a-price-fraction').text
# price=price.replace('$','')
price=str(price)+'.'+str(price_dot)
price=float(price)
desc1=driver.find_element(By.ID,'productOverview_feature_div')
desc2=driver.find_element(By.ID,'featurebullets_feature_div')
full_desc=driver.find_element(By.ID,'aplus_feature_div')
print(desc1.get_attribute('innerHTML'))
print(desc2.get_attribute('innerHTML'))
print(full_desc.get_attribute('innerHTML'))
print(title)
print(price)
img_grid=driver.find_element(By.CLASS_NAME,'regularAltImageViewLayout')
imgs=img_grid.find_elements(By.TAG_NAME,'img')
list_img=[]
for img in imgs:
    new_img=img.get_attribute('src')
    if 'play-icon-overlay' not in new_img and 'icon' not in new_img:
        new_img=new_img.split('._')
        new_img[1]=new_img[1].split('.')
        img_result=new_img[0]+'.'+new_img[1][1]
        list_img.append(img_result) 
    # print(new_img)
for x in list_img:
    print(x)