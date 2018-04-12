<?php

/**
 * Test cases for WP Admin Settings
 */
class TestWPAdminSettings extends WP_UnitTestCase {

    private $Ae_Connect_Admin;

    public function setUp() {
        include_once 'admin/class-ae-connect-admin.php';
        $Ae_Connect_Admin = new Ae_Connect_Admin('ae_connect', '1.0.0');
        // Assert Ae_Connect_Admin was properly initiated
        $this->assertInstanceOf(Ae_Connect_Admin::class, $Ae_Connect_Admin);

        parent::setUp();
    }

    public function tearDown() {
        parent::tearDown();
    }

    function test_main_page_settings() {
        // Register main page settings in the WP backend
    }

}
