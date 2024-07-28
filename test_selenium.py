from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import unittest

class WordPressTest(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Chrome()

    def test_home_page(self):
        driver = self.driver
        driver.get("https://cicd-stage.dialen.com.ua/")
        self.assertIn("Stage", driver.title)

    def test_login(self):
        driver = self.driver
        driver.get("https://cicd-stage.dialen.com.ua/wp-login.php")
        elem = driver.find_element(By.NAME, "log")
        elem.send_keys("admin")  # Замените на ваше имя пользователя
        elem = driver.find_element(By.NAME, "pwd")
        elem.send_keys("z9EkDYv792")  # Замените на ваш пароль
        elem.send_keys(Keys.RETURN)
        self.assertIn("Консоль", driver.title)

    def tearDown(self):
        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
