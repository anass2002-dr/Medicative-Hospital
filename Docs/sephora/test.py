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


url='https://www.sephora.com/shop/skincare?currentPage=3'
driver=webdriver.Chrome()
driver.set_window_position(-10000,0)
driver.get(str(url))
# time.sleep(2000)
link=driver.find_element(By.ID,'css-klx76').text
price_section=driver.find_element(By.CLASS_NAME,'reinventPricePriceToPayMargin')
price=price_section.find_element(By.CLASS_NAME,'a-price-whole').text
price_dot=price_section.find_element(By.CLASS_NAME,'a-price-fraction').text
# price=price.replace('$','')
price=str(price)+'.'+str(price_dot)
price=float(price)
desc1=driver.find_element(By.ID,'productOverview_feature_div')
desc1=desc1.find_element(By.CLASS_NAME,'a-section')
desc2=driver.find_element(By.ID,'featurebullets_feature_div')

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
for x in list_img:
    print(x)


# url='https://rankactive.com/resources/generate-keywords'
# driver=webdriver.Chrome()
# driver.set_window_position(-10000,0)
# driver.get(str(url))

# input_txt=driver.find_element(By.ID,'searchQuery')
# input_txt.send_keys(url2)
# btn=driver.find_element(By.ID,'formButton').click()
# time.sleep(200)
# result=driver.find_element(By.ID,'results')
# rows=driver.find_elements(By.CLASS_NAME,'default-row')
# keywords=''
# for x in rows:
#     td=x.find_elements(By.TAG_NAME,'td')
#     for y in td:
#         print(y.get_attribute("innerHTML"))
#     # keywords+=x.text+','
    

# with open('Docs/amazon/keywords.txt','w',encoding='utf8') as file_key:
#     file_key.write(keywords)
