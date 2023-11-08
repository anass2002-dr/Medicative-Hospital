# from selenium import webdriver
# from selenium.webdriver.chrome.service import Service as ChromeService
# from webdriver_manager.chrome import ChromeDriverManager
# from selenium.webdriver.chrome.options import Options
# from selenium.webdriver.common.keys import Keys
# from selenium.webdriver.common.by import By
# from selenium.webdriver.support.wait import WebDriverWait
# from selenium.webdriver.support import expected_conditions as EC
# # define custom options for the Selenium driver
# options = Options()
# # free proxy server URL
# proxy_server_url = "141.94.174.6"
# options.add_argument(f'--proxy-server={proxy_server_url}')

# # create the ChromeDriver instance with custom options
# driver = webdriver.Chrome(
#     service=ChromeService(ChromeDriverManager().install()),
#     options=options
# )
# driver.get('http://httpbin.org/ip')
# print(driver.find_element(By.TAG_NAME, "body").text)
lis=['121','45','68','54']
for i in range(0,len(lis)):
    print(i)
