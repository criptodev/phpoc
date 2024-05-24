from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import unittest

class TestPHPApp(unittest.TestCase):
    def setUp(self):
        options = Options()
        options.headless = True
        self.driver = webdriver.Chrome(options=options)

    def test_display_data(self):
        self.driver.get("http://localhost")
        self.assertIn("id: 1 - Name: dummy1", self.driver.page_source)

    def tearDown(self):
        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
