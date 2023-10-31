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
    
# url=links_list[0][0]
url="https://www.aliexpress.com/item/1005005990085273.html"
# print(url)
driver=webdriver.Chrome()
driver.get(str(url))
#title
# title=driver.find_element(By.CLASS_NAME,'title--wrap--Ms9Zv4A')
# title=title.find_element(By.TAG_NAME,'h1').text
# #price
# price=driver.find_element(By.CLASS_NAME , 'es--wrap--erdmPRe')
# sp=price.find_elements(By.TAG_NAME,"span")
# price=''
# for i in range(2,len(sp)):
#     price+=sp[i].text
# price=float(price)
content=driver.find_element(By.CLASS_NAME,'description--product-description--nxRv0lW')
# content=driver.page_source
# print(content.text)

# with open('Docs/readme.txt', 'w',encoding='utf8') as f:
#     f.write(content)
print(content.get_attribute('innerhtml'))

# wait = WebDriverWait(driver, 10)

# //Find frame or iframe and switch
# wait.until(ExpectedConditions.frameToBeAvailableAndSwitchToIt("your frame id or name"));

# //Now find the element 
# WebElement Category_Body = wait.until(ExpectedConditions.visibilityOfElementLocated(By.id("tinymce")));
#  Category_Body.sendKeys("Android Smart Phone - 16GB");

# //Once all your stuff done with this frame need to switch back to default
# driver.switchTo().defaultContent();