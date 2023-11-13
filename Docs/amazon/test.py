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


url='https://www.amazon.com/Night-Wrist-Sleep-Support-Brace/dp/B074MKSSHK/ref=pd_bxgy_sccl_2/131-3816398-1737758?pd_rd_w=gs4Ah&content-id=amzn1.sym.7746dde5-5539-43d2-b75f-28935d70f100&pf_rd_p=7746dde5-5539-43d2-b75f-28935d70f100&pf_rd_r=BR5WFA89J4ZE1GYTTR1Y&pd_rd_wg=gx0uL&pd_rd_r=ce0a42eb-5f1f-4801-b1d7-d231fe328510&pd_rd_i=B074MKSSHK&psc=1'
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
print(desc1.get_attribute('innerHTML'))
print(desc2.get_attribute('innerHTML'))
print(title)
print(price)
img_grid=driver.find_element(By.CLASS_NAME,'regularAltImageViewLayout')
imgs=img_grid.find_elements(By.TAG_NAME,'img')
list_img=[]
for img in imgs:
    new_img=img.get_attribute('src')
    new_img=new_img.split('._')
    new_img[1]=new_img[1].split('.')
    img_result=new_img[0]+'.'+new_img[1][1]
    list_img.append(img_result) 
    # print(new_img)
for x in list_img:
    print(x)