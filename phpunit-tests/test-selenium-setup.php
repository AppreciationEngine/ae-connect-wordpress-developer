<?php

// Code snippits taken from http://codeception.com/11-12-2013/working-with-phpunit-and-selenium-webdriver.html
// class SeleniumTest extends WP_UnitTestCase {
//
//     // use WebDriverAssertions;
//     // use WebDriverDevelop;
//     protected $url = 'BASE_URL';
//
//     /**
//      * @var \RemoteWebDriver
//      */
//     protected $webDriver;
//
//     public function setUp() {
//         // $status = $this->initAEJS();
//         // $this->assertEquals('OK', $status);
//         // $this->assertEquals('https://staging.theappreciationengine.com/w/js/508', get_option('ae-js-framework-url'));
//
//         $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'chrome');
//         $this->webDriver = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);
//     }
//
//     public function tearDown() {
//         $this->webDriver->quit();
//     }

    // public function testWPSelenium()
    // {
    //
    //     $onpage_form_rel_link = '/test-ae-connect-onpage-form/';
    //     $this->webDriver->get($this->url . $onpage_form_rel_link);
    //
    //     $this->assertContains('TEST AE Connect Onpage Form', $this->webDriver->getTitle());
    //
    //     // $overlay = $this->webDriver->findElement(WebDriverBy::id('preloader-background'));
    //     // $this->webDriver->wait(10, 1000)->until(
    //     //     WebDriverExpectedCondition::visibilityOf($overlay)
    //     // );
    //
    //     $email_field = $this->webDriver->findElement(WebDriverBy::id('ae-email'));
    //     $email_field->click();
    //
    //     $this->webDriver->getKeyboard()->sendKeys('1234567890 abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    //     // $password_field = $this->webDriver->findElement(WebDriverBy::id('password'));
    //
    //     // $password_field->click();
    //     // // typing into field
    //     // $this->webDriver->getKeyboard()->sendKeys('randomuser');
    //
    //
    //     // $submitButton = $this->webDriver->findElement(WebDriverBy::id('ae-onpage-submit'));
    //     // $submitButton->click();
    //     // $this->waitForUserInput();
    //
    //     // $globalSignupState = $this->webDriver->executeScript("return globalSignupState;");
    //     // $this->assertEquals(1, $globalSignupState);
    // }

    /**
     * Initializes AEJS Framework
     *
     * Returns the status of the calls to AE's REST APIS
     *
     */
//     protected function initAEJS() {
//         while (!file_exists('admin')) {
//             chdir('..');
//         }
//         chdir('admin');
//         include_once('class-ae-connect-initialize.php');
//
//         $instance = 'https://staging.theappreciationengine.com';
//         $api_key = 'e8d0013ffd19de1639c30a6aa694a940';
//         update_option('ae_connect_instance', $instance);
//
//         $Init = new Initialize();
//         $Init->ae_connect_init_with_api_key($api_key);
//         $status = get_option('ae_connect_initialization');
//         return $status;
//     }
//
//     protected function waitForUserInput() {
//         if (trim(fgets(fopen("php://stdin", "r"))) != chr(13)) {
//             return;
//         }
//     }
//
// }
