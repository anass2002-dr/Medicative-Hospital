from selenium import webdriver
from selenium.webdriver.chrome.service import Service as ChromeService
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

url="https://www.aliexpress.com/item/1005006132949077.html"
driver=webdriver.Chrome()
driver.set_window_position(-10000,0)
driver.get(str(url))

page_title=driver.title
if(page_title!='Page Not Found - Aliexpress.com'):
    
    choice=driver.find_element(By.CLASS_NAME,'banner-choice--logo--Vq3YIx6')
    print(choice.get_attribute('src'))
    