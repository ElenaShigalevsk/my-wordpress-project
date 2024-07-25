from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import unittest

class WordPressTest(unittest.TestCase):
    def setUp(self):
        self.driver = webdriver.Chrome()

    def test_home_page(self):
        driver = self.driver
        driver.get("http://your-staging-site-url.com")
        self.assertIn("WordPress", driver.title)

    def test_login(self):
        driver = self.driver
        driver.get("http://your-staging-site-url.com/wp-login.php")
        elem = driver.find_element_by_name("log")
        elem.send_keys("your-username")
        elem = driver.find_element_by_name("pwd")
        elem.send_keys("your-password")
        elem.send_keys(Keys.RETURN)
        self.assertIn("Dashboard", driver.title)

    def tearDown(self):
        self.driver.close()

if __name__ == "__main__":
    unittest.main()
