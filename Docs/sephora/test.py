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


url='https://www.sephora.com/shop/hair-products'
driver=webdriver.Chrome()
# driver.set_window_position(-10000,0)
driver.get(str(url))
content=driver.find_element(By.TAG_NAME,'body')
with open(f'Docs/sephora/test.txt', 'w',encoding='utf8') as f:
    f.write(content.get_attribute('innerHTML'))
# print(content)
# time.sleep(2000)
# btn_model=driver.find_element(By.CLASS_NAME,'css-1kna575')
# btn_model.click()
# time.sleep(10)
# link=content.find_elements(By.ID,'css-klx76')
# print(link)
# for x in link:
#     print(x.get_attribute('href'))

