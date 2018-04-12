<?php

/**
 *  !!!! ONLY FOR AJAX CALL !!!!
 *
 * Tests for the Ajax calls to save and get sos stats.
 * For speed, non ajax calls of class-ajax.php are tested in test-ajax-others.php
 * Ajax tests are not marked risky when run in separate processes and wp_debug
 * disabled. But, this makes tests slow so non ajax calls are kept separate
 *
 * @group ajax
 * @runTestsInSeparateProcesses
 *
 */
class TestUserHandleAjax extends WP_Ajax_UnitTestCase {

    /**
     * An array containing AE User objects (in array form) which submembers consist of:
     * data, services, optins
     * @var
     */
    private $ae_js_users_array = array(
        "ask888" => array(
            'data' =>
            array(
                'FirstName' => 'Avessizzle',
                'Surname' => 'Kashdizzle',
                'Email' => 'guru24kb@gmail.com',
                'Username' => 'ask888',
                'Website' => 'https://open.spotify.com/user/ask888',
                'Gender' => 'M',
                'Country' => 'Canada',
                'PostCode' => 'v1l2w2',
                'HomePhone' => '1234567891',
                'AccessToken' => '6608c4050972217769eadccc4966a3dd_1507146346',
                'ID' => 2384003,
                'AvatarURL' => 'https://theappreciationengine.com/Member_Controller/getAvatar/2384003/16442',
                'City' => NULL,
                'State' => NULL,
                'CountryCode' => 'CA',
                'GeoCountry' => 'CA',
                'GeoCity' => '',
                'GeoRegion' => '',
                'GeoLat' => '43.6319',
                'GeoLong' => '-79.3716',
                'VerifiedEmail' => NULL,
            ),
            'optins' =>
            array(
            ),
            'services' =>
            array(
                0 =>
                array(
                    'Service' => 'spotify',
                    'Valid' => '1',
                    'ID' => '22241913',
                    'UserID' => 'ask888',
                    'Username' => NULL,
                    'UserURL' => 'https://open.spotify.com/user/ask888',
                    'Token' => 'BQBfXPSYPtdm-hA-UNIiZZAWZ6cgNGa7OSTebkF21umYFib6uoOGstzDr6cE4WbJDzyY70arPRZipoWC1ELFEgllzs-xs0F1gd5AOKldtc4MgBHG74Lde17lnhNA46YqYoGfb4X5gm-k9WHLRYlZlPTDmQ3dyt8VZreisymgVwjF4TyHDBpFh6mJjTH6DLs5CTTEFN4MQJzWXgZBwgIOVa19QYcuRP8xvRGc_MUdfRN37MUm2z60H9W2VUbjeVeg5N321S0v1bYenInT6ZRSrescHQSqOQ',
                    'TokenSecret' => 'AQB8hWkpNjliYXsEG6gDueXfbKLGxECm5C-Ir2dWzqt2obWj3rGgyNRM3yQaNQf-Tqjlp_wSx4FwPIyk08oujCflToxTms2gumG4tOpRSeKoOU-dPGTT_pajVd9aE2DmB6o',
                    'ServiceID' => '2429',
                    'LastUpdated' => '2017-10-04 16:22:42',
                    'LastLogin' => '2017-10-04 16:45:46',
                    'VerifiedEmail' => NULL,
                    'PaidAccount' => '0',
                    'Followers' => '0',
                    'Likes' => '0',
                    'PartnerCode' => NULL,
                    'PartnerID' => NULL,
                    'Domains' =>
                    array(
                        0 => 'wp-plugin.appreciationengine.com',
                    ),
                ),
            ),
        ),
        "ask88_collision" => array(
            'data' =>
            array(
                'FirstName' => 'bazzinga',
                'Surname' => 'Kashdizzle',
                'Email' => 'guru24kb@gmail.com',
                'Username' => 'ask88_collision',
                'Website' => 'https://open.spotify.com/user/ask888',
                'Gender' => 'M',
                'Country' => 'Canada',
                'PostCode' => 'v1l2w2',
                'HomePhone' => '1234567891',
                'AccessToken' => '6608c4050972217769eadccc4966a3dd_1507146346',
                'ID' => 1342314,
                'AvatarURL' => 'https://theappreciationengine.com/Member_Controller/getAvatar/2384003/16442',
                'City' => NULL,
                'State' => NULL,
                'CountryCode' => 'CA',
                'GeoCountry' => 'CA',
                'GeoCity' => '',
                'GeoRegion' => '',
                'GeoLat' => '43.6319',
                'GeoLong' => '-79.3716',
                'VerifiedEmail' => NULL,
            ),
            'optins' =>
            array(
            ),
            'services' =>
            array(
                0 =>
                array(
                    'Service' => 'twitter',
                    'Valid' => '1',
                    'ID' => '37564321',
                    'UserID' => 'ask888',
                    'Username' => NULL,
                    'UserURL' => 'https://open.spotify.com/user/ask888',
                    'Token' => 'BQBfXPSYPtdm-hA-UNIiZZAWZ6cgNGa7OSTebkF21umYFib6uoOGstzDr6cE4WbJDzyY70arPRZipoWC1ELFEgllzs-xs0F1gd5AOKldtc4MgBHG74Lde17lnhNA46YqYoGfb4X5gm-k9WHLRYlZlPTDmQ3dyt8VZreisymgVwjF4TyHDBpFh6mJjTH6DLs5CTTEFN4MQJzWXgZBwgIOVa19QYcuRP8xvRGc_MUdfRN37MUm2z60H9W2VUbjeVeg5N321S0v1bYenInT6ZRSrescHQSqOQ',
                    'TokenSecret' => 'AQB8hWkpNjliYXsEG6gDueXfbKLGxECm5C-Ir2dWzqt2obWj3rGgyNRM3yQaNQf-Tqjlp_wSx4FwPIyk08oujCflToxTms2gumG4tOpRSeKoOU-dPGTT_pajVd9aE2DmB6o',
                    'ServiceID' => '2429',
                    'LastUpdated' => '2017-10-04 16:22:42',
                    'LastLogin' => '2017-10-04 16:45:46',
                    'VerifiedEmail' => NULL,
                    'PaidAccount' => '0',
                    'Followers' => '0',
                    'Likes' => '0',
                    'PartnerCode' => NULL,
                    'PartnerID' => NULL,
                    'Domains' =>
                    array(
                        0 => 'wp-plugin.appreciationengine.com',
                    ),
                ),
            ),
        ),
        'email_guru' => array(
          'data' =>
          array(
            'FirstName' => 'Janny',
            'Email' => 'guru24kb@gmail.com',
            'Username' => 'guru24kb3',
            'Gender' => 'M',
            'AccessToken' => '005f33990d4f9984abbf029ea8231679_1517269487',
            'ID' => 4291239,
            'AvatarURL' => 'https://staging.theappreciationengine.com/Member_Controller/getAvatar/4291239/3442977',
            'Country' => 'Canada',
            'City' => NULL,
            'State' => NULL,
            'CountryCode' => 'CA',
            'GeoCountry' => 'CA',
            'GeoCity' => '',
            'GeoRegion' => '',
            'GeoLat' => '60.0000',
            'GeoLong' => '-95.0000',
            'Extended' => NULL,
          ),
          'optins' =>
          array (
          ),
          'services' =>
          array (
            0 =>
            array (
              'Service' => 'email',
              'Valid' => '1',
              'ID' => '945',
              'UserID' => '4daa2286532a958ca618b4355f5e2a35',
              'Username' => 'guru24kb@gmail.com',
              'UserURL' => 'https://staging.theappreciationengine.com/member/view/4291239',
              'Token' => '$2y$10$c288cae6c2a4351de0867e4A30zysj.9KRPYO8a1YNU0vlFxmZEcq',
              'TokenSecret' => '10$c288cae6c2a4351de0867f',
              'ServiceID' => '2501',
              'LastUpdated' => NULL,
              'LastLogin' => '2018-01-29 14:21:11',
              'VerifiedEmail' => NULL,
              'PaidAccount' => '0',
              'Followers' => '0',
              'Likes' => '0',
              'PartnerCode' => NULL,
              'PartnerID' => NULL,
              'Domains' =>
              array (
                0 => 'wp-plugin.appreciationengine.com',
              ),
            ),
          ),
      ),
      'spotify_guru' => array(
          'data' =>
          array(
            'FirstName' => 'Coo Coo ',
            'Surname' => 'Kah Choo',
            'Email' => 'guru24kb@gmail.com',
            'Username' => 'guru24kb2',
            'Website' => 'https://open.spotify.com/user/ask888',
            'MobilePhone' => '123456',
            'State' => 'wordtoojabby',
            'Country' => 'Canada',
            'AccessToken' => '623d455bb3215d685186f7a296ecb358_1517275487',
            'ID' => 327,
            'AvatarURL' => 'https://staging.theappreciationengine.com/Member_Controller/getAvatar/327/3442977',
            'City' => NULL,
            'CountryCode' => 'CA',
            'GeoCountry' => 'CA',
            'GeoCity' => '',
            'GeoRegion' => '',
            'GeoLat' => '60.0000',
            'GeoLong' => '-95.0000',
            'Extended' => NULL,
            'VerifiedEmail' => 'guru24kb@gmail.com',
          ),
          'optins' =>
          array (
          ),
          'services' =>
          array (
            0 =>
            array (
              'Service' => 'spotify',
              'Valid' => '1',
              'ID' => '291',
              'UserID' => 'ask888',
              'Username' => NULL,
              'UserURL' => 'https://open.spotify.com/user/ask888',
              'Token' => 'BQBWPcKqAKSTSIdfecarqqecd0EsBVGI6F6VdEbAaWb0iyTnhuLvhQTudnAm6Ncno_k6NSevn6-YCLs-0qw61-ummcbzc8rbcp5bmX7AtdgBnerTcAJ-4YTaZj7t1qeBffDbPlOo323iRp8uk4vFu5fkDGB7t9XNZvk6l4-04H1DTnrpGjzteXi6mVYRUSHKLGtJk2taRFptT-1BO-ibcOA2YFLYEDBKKtHNkNdUNR1nJesF',
              'TokenSecret' => 'AQBc3BmnsFV4cNVJXTHA13PvLdSOfMTYs82UYr_U01UDLnRZxOFj5aWOLvjC-22Rbniayysi3jZeuvWMkTFJf6rCiTKwgIiw5Ckz5SqizomJylj2M4-JKQvoU657IZLqqWY',
              'ServiceID' => '2502',
              'LastUpdated' => '2017-11-28 11:28:48',
              'LastLogin' => '2018-01-29 14:24:46',
              'VerifiedEmail' => 'guru24kb@gmail.com',
              'PaidAccount' => '0',
              'Followers' => '0',
              'Likes' => '0',
              'PartnerCode' => NULL,
              'PartnerID' => NULL,
              'Domains' =>
              array (
                0 => 'wp-plugin.appreciationengine.com',
                1 => 'drupal-plugin.appreciationengine.com',
              ),
            ),
            1 =>
            array (
              'Service' => 'email',
              'Valid' => '1',
              'ID' => '308',
              'UserID' => 'cecb89cfc637dbb02381e67fcecc29cf',
              'Username' => 'guru24kb@gmail.com',
              'UserURL' => 'https://staging.theappreciationengine.com/member/view/344',
              'Token' => '$2y$10$0170f6c29b63a1b4cc1afuZhz/louuUgYfmpdateiWBva0y5QIRA6',
              'TokenSecret' => '10$0170f6c29b63a1b4cc1af8',
              'ServiceID' => '2501',
              'LastUpdated' => NULL,
              'LastLogin' => '2017-11-29 12:45:53',
              'VerifiedEmail' => NULL,
              'PaidAccount' => '0',
              'Followers' => '0',
              'Likes' => '0',
              'PartnerCode' => NULL,
              'PartnerID' => NULL,
              'Domains' =>
              array (
                0 => 'wp-plugin.appreciationengine.com',
              ),
            ),
          ),
        ),
    );

    public function setUp() {
        parent::setUp();

        require_once 'public/user-handling/class-user-signon-handle.php';

    }

    public function tearDown() {
        parent::tearDown();
    }

    /**
     * This test verifies that a registration process triggered by an internal ajax call is
     * executed correctly:
     *
     * Asserts:
     *
     *  that there are no previous WP records of the AE User registering
     *
     *  All meta data saved to the WP Data base matches the data in the AE Object
     *  @return NULL
     */
    function test_ajax_ae_login_flow_registration_POST() {
        $this->setUp();
        // Assert that local WP AE Users are not turned off
        $this->assert_WP_Users_on();
        $ae_user = $this->ae_js_users_array['ask888'];

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('registration', $ae_user, 'ae_login_flow');

        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);

        // Assert that the user is logged in:
        $this->assertEquals($wp_user, wp_get_current_user());

        $this->tearDown();
    }

    /**
     * This test verifies that a login process with no pre-existing
     * WP account triggered by an internal ajax call is
     * executed correctly:
     *
     * Asserts:
     *
     *  that there are no previous WP records of the AE User logging in (User will get
     *  created automatically if this is the case)
     *
     *  User who just logged in is the current user signed into WP
     *
     *  All meta data saved to the WP Data base matches the data in the AE Object
     *  @return NULL
     */
    function test_ajax_ae_login_flow_login_WITHOUT_existing_account_POST() {
        $this->setUp();
        // Assert that local WP AE Users are not turned off
        $this->assert_WP_Users_on();
        $ae_user = $this->ae_js_users_array['ask888'];

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('login', $ae_user, 'ae_login_flow');

        // Assert that the user is logged in:
        $this->assertEquals($wp_user, wp_get_current_user());

        // Assert that all ae user data matches all WP user meta data
        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);
        $this->tearDown();
    }

    /**
     * This test verifies that a login process with a pre-existing
     * WP account triggered by an internal ajax call is
     * executed correctly:
     *
     * Test case pre-registers a user and performs appropriate assertions
     *
     * Asserts:
     *
     *  initially, no user is logged in
     *
     *  User who just logged in is the current user signed into WP
     *
     *  All meta data saved to the WP Data base matches the data in the AE Object
     *  @return NULL
     */
    function test_ajax_ae_login_flow_login_WITH_existing_account_POST() {
        $this->setUp();
        // Assert that local WP AE Users are not turned off
        $this->assert_WP_Users_on();
        $ae_user = $this->ae_js_users_array['ask888'];

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Create a AE WP User:
        $wp_user = $this->run_test_login_flow_POST('registration', $ae_user, 'ae_login_flow');

        // Assert that the user is logged in:
        $this->assertEquals($wp_user, wp_get_current_user());

        // Logout the wordpress user
        wp_logout();
        wp_set_current_user(0);

        // Assert that the user is logged out:
        $this->assertEquals(0, wp_get_current_user()->ID);


        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('login', $ae_user, 'ae_login_flow');

        // Assert that the user is logged in:
        $this->assertEquals($wp_user, wp_get_current_user());

        // Assert that all ae user data matches all WP user meta data
        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);
        $this->tearDown();
    }

    /**
     * This test verifies that a AE WP User Logout triggered by an internal ajax call is
     * executed correctly:
     *
     * The test registers an AE WP User in and then tests the logout CALL
     *
     * This test Asserts:
     *
     *  No WP user is logged in
     *
     *  The Current WP user's ID is set to 0 (No current user state code)
     *  @return NULL
     */
    function test_ajax_ae_login_flow_REGISTER_THEN_logout_POST() {
        $this->setUp();
        $ae_user = $this->ae_js_users_array['ask888'];

        // Create and register a new AE WP User:
        $wp_user = $this->run_test_login_flow_POST('registration', $ae_user, 'ae_login_flow');
        // Assert that the user is logged in:
        $this->assertTrue(is_user_logged_in());
        $this->assertEquals($wp_user->ID, wp_get_current_user()->ID);

        $this->run_test_login_flow_logout_POST('logout', 'Logging Out');
        // Assert that the user is logged out:
        $this->assertTrue(!is_user_logged_in());
        $this->assertEquals(0, wp_get_current_user()->ID);

        $this->tearDown();
    }

    /**
     * This test verifies that a AE WP User Logout triggered by an internal ajax call is
     * executed correctly:
     *
     * The test logs an AE WP User in and then tests the logout CALL
     *
     * This test Asserts:
     *
     *  No WP user is logged in
     *
     *  The Current WP user's ID is set to 0 (No current user state code)
     *  @return NULL
     */
    function test_ajax_ae_login_flow_LOGIN_THEN_logout_POST() {
        $this->setUp();
        $ae_user = $this->ae_js_users_array['ask888'];

        // Create and register a new AE WP User:
        $wp_user = $this->run_test_login_flow_POST('login', $ae_user, 'ae_login_flow');
        // Assert that the user is logged in:
        $this->assertTrue(is_user_logged_in());
        $this->assertEquals($wp_user->ID, wp_get_current_user()->ID);

        $this->run_test_login_flow_logout_POST('logout', 'Logging Out');
        // Assert that the user is logged out:
        $this->assertTrue(!is_user_logged_in());
        $this->assertEquals(0, wp_get_current_user()->ID);

        $this->tearDown();
    }

    /**
     * This test verifies that an if aeJS is in Update state, the ajax callback ae_update_wp() is executed
     * as expected
     *
     * This test Asserts:
     *
     *  That all users are currently logged out
     *
     *  that the update step properly synced AE data with the WP User's data in the
     *  WP DB
     * @return NULL
     */
    function test_ae_update_wp() {
        $this->setUp();
        $ae_user = $this->ae_js_users_array['ask888'];

        // Instantiate the class which holds the methods for User creation
        $AEUserSignonHandle = new Ae_Connect_UserSignonHandle();

        // Ensure that $AEConnectUserFlow was properly intantiated
        $this->assertInstanceOf(Ae_Connect_UserSignonHandle::class, $AEUserSignonHandle);

        $this->assert_WP_Users_on();

        // Register a new AE User
        $AEUserSignonHandle->wp_user_register($ae_user);

        $AEUserSignonHandle->wp_user_logout('Logged Out');

        // Assert that all users are logged out:
        $this->assertEquals(0, wp_get_current_user()->ID);

        // Add a new extra field value to the ae user:
        $ae_user['bio'] = "Sugar, spice and everything RICE";

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('update', $ae_user, 'ae_update_wp');
        // Assert that all ae user data matches all WP user meta data
        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);
        $this->tearDown();

    }

    /**
     * @group email_collison
     * assert that colliding users step properly through email collision flow
     */
    function test_email_collisions() {

        $user_a = $this->ae_js_users_array['ask888'];
        $user_b = $collision_ae_user = $this->ae_js_users_array["ask88_collision"];
        $this->run_generic_email_collision($user_a, $user_b);

        $this->tearDown();
        $this->setUp();

        $user_c = $this->ae_js_users_array['spotify_guru'];
        $user_d = $this->ae_js_users_array['email_guru'];
        $this->run_generic_email_collision($user_c, $user_d);

    }

    public function run_generic_email_collision($user_a, $user_b) {
        // Assert that local WP AE Users are not turned off
        $this->assert_WP_Users_on();
        $ae_user = $user_a;

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('registration', $ae_user, 'ae_login_flow');
        // erace testing db values:
        update_option('test-registration', false);

        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);

        // Assert that the user is logged in:
        $this->assertEquals($wp_user, wp_get_current_user());

        // Log out user
        $this->run_test_login_flow_logout_POST('logout', 'Logging Out');

        $collision_ae_user = $user_b;

        $_POST['_wpnonce'] = wp_create_nonce('ae_login_flow');
        global $_POST;
        unset($_POST['logout']);
        $_POST['registration'] = $collision_ae_user;

        try {//WPAjaxDieContinueException
            $this->_handleAjax('ae_login_flow');
        } catch (Exception $e) {

        }

        /**
         * write a more modular test for this
         */
        // $this->assertEquals($collision_ae_user, get_option('unclean_ae_user'));

        $this->assertEquals($ae_user['services'][0]['ID'], get_option('service_id'));
        // Assert that the collision occured as expected and was caught
        $service_collision_handle = get_option('email_collision_handle');
        $this->assertInternalType('array', $service_collision_handle);
    }

    /**
     * [test_verify_email_colision_resolution description]
     * @return [type] [description]
     */
    function test_verify_email_colision_resolution() {
        // Set up a scenario that triggers an email collision:
        // Assert that local WP AE Users are not turned off
        $this->assert_WP_Users_on();
        // Valid user
        $userA = $this->ae_js_users_array['ask888'];
        // User that will collide with the valid user
        $userB = $this->ae_js_users_array["ask88_collision"];

        // Make sure UserA and UserB have matching service ID's:
        $userB['services'][0]['ID'] = 123;
        $userA['services'][0]['ID'] = 123;

        // Make sure users have bunk ID's so that the POST endpoint request is sure to fail
        $userB['data']['ID'] = '#9999999999999';
        $userA['data']['ID'] = '#999999999999999999';

        // Set the instance as some bogus string for extra assurance that the endpoint won't be called
        update_option('ae_connect_instance', '##hoogaliboogali##');

        $service_collision_handle = array(
            'code' => 1111,
            'error' => 'Email Collision',
            'userAAeID' => $userA['data']['ID'],
            'userAServiceID' => $userA['services'][0]['ID'],
            'userBAeAccessToken' => $userB['data']['AccessToken'],
            'userA_service_type' => $userA['services'][0]['Service'],
            'userBAeID' => $userB['data']['ID']
        );
        update_option('email_collision_handle', $service_collision_handle);

        $_POST['_wpnonce'] = wp_create_nonce('ae_login_flow');
        global $_POST;
        $_POST['resolution'] = $userB;

        try {//WPAjaxDieContinueException
            $this->_handleAjax('verify_email_colision_resolution');
        } catch (Exception $e) {

        }

        $response = json_decode($this->_last_response, true);

        // Assert that the merge was attempted
        $this->assertTrue(array_key_exists('success', $response));
    }

    /**
     * Test disabling local WP Users and assert that on registration no users are created
     *
     * @return [type] [description]
     */
    function test_try_reg_disable_local_wp_user() {
        //disable local wp user:
        update_option('ae_connect_disable_local_wp_user', 'on');

        // Assert that the DB was properly updated:
        $this->assertEquals('on', get_option('ae_connect_disable_local_wp_user'));

        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];

        $_POST['_wpnonce'] = wp_create_nonce('ae_login_flow');
        global $_POST;
        $_POST['registration'] = $ae_user;

        try {//WPAjaxDieContinueException
            $this->_handleAjax($ajax_callback);
        } catch (Exception $e) {

        }

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        // Filtering result shouldn't find any WP User
        // I.e the array of WP users should be onf length 0
        $this->assertEquals(0, count($wp_users));

        $this->assertTrue(!email_exists($ae_user['data']['Email']));
    }

    /**
     * Test disabling local WP Users and assert that on login no users are created
     *
     * @return [type] [description]
     */
    function test_try_login_disable_local_wp_user() {
        //disable local wp user:
        update_option('ae_connect_disable_local_wp_user', 'on');

        // Assert that the DB was properly updated:
        $this->assertEquals('on', get_option('ae_connect_disable_local_wp_user'));

        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];

        $_POST['_wpnonce'] = wp_create_nonce('ae_login_flow');
        global $_POST;
        $_POST['login'] = $ae_user;

        try {//WPAjaxDieContinueException
            $this->_handleAjax($ajax_callback);
        } catch (Exception $e) {

        }

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        // Filtering result shouldn't find any WP User
        // I.e the array of WP users should be onf length 0
        $this->assertEquals(0, count($wp_users));

        $this->assertTrue(!email_exists($ae_user['data']['Email']));
    }

    /**
     * Test disabling local WP logged in sessions and assert that on registration the user is created but not logged in
     *
     * @return [type] [description]
     */
    function test_try_reg_disable_user_log_in_session() {
        //disable local wp user:
        update_option('ae_connect_disable_user_log_in_session', 'on');

        // Assert that the DB was properly updated:
        $this->assertEquals('on', get_option('ae_connect_disable_user_log_in_session'));
        // Assert that the DB was properly updated:
        $this->assertNotEquals('on', get_option('ae_connect_disable_local_wp_user'));

        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('registration', $ae_user, 'ae_login_flow');

        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);

        // Assert that there is no user logged in:
        $this->assertEquals(0, wp_get_current_user()->ID);
    }

    /**
     * Test disabling local WP logged in sessions and assert that on login the user is created but not logged in
     *
     * @return [type] [description]
     */
    function test_try_login_disable_user_log_in_session() {
        //disable local wp user:
        update_option('ae_connect_disable_user_log_in_session', 'on');

        // Assert that the DB was properly updated:
        $this->assertEquals('on', get_option('ae_connect_disable_user_log_in_session'));
        // Assert that the DB was properly updated:
        $this->assertNotEquals('on', get_option('ae_connect_disable_local_wp_user'));

        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];

        $wp_users = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($wp_users));

        // Run tests for the AJAX request Method
        $wp_user = $this->run_test_login_flow_POST('login', $ae_user, 'ae_login_flow');

        $this->assert_wp_meta_data_matches_ae_data($wp_user, $ae_user);

        // Assert that there is no user logged in:
        $this->assertEquals(0, wp_get_current_user()->ID);
    }

    /**
     * Sends and invokes WP AJAX login flow method and tests it according to its AE User
     * And it's POST Key ()
     * @param  string $type    POST Data key
     * @param  array $ae_user an array which contains all data for a particular AE User
     * @return WP_User
     */
    private function run_test_login_flow_POST($type, $ae_user, $ajax_callback) {
        $_POST['_wpnonce'] = wp_create_nonce($ajax_callback);
        global $_POST;
        $_POST[$type] = $ae_user;

        try {//WPAjaxDieContinueException
            $this->_handleAjax($ajax_callback);
        } catch (Exception $e) {

        }

        /**
         * replace with a more modular test
         */
        // verify that the registration array was mock sent in the POST
        // $user_login_array = get_option('test-' . $type);
        // $this->assertTrue(!empty($user_login_array));
        // $this->assertInternalType('array', $user_login_array);

        $wp_users = get_users(array('meta_key' => 'ae_connect_' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        // Filtering result should find one and only one WP User
        // I.e the array of WP users should be onf length 1
        $this->assertEquals(1, count($wp_users));

        $wp_user = $wp_users[0];
        // Assert that the $wp_user is in fact a WP User
        $this->assertInstanceOf(WP_User::class, $wp_user);

        return $wp_user;
    }

    /**
     * Sends and invokes WP AJAX login flow method specialized for a logout CALL
     * and tests it according to its AE User And it's POST Key
     *
     * @param  string $type    POST Data key
     * @param  array $ae_user an array which contains all data for a particular AE User
     * @return NULL
     */
    private function run_test_login_flow_logout_POST($type, $logout_message) {
        $_POST['_wpnonce'] = wp_create_nonce('ae_login_flow');
        global $_POST;
        $_POST[$type] = $logout_message;

        try {//WPAjaxDieContinueException
            $this->_handleAjax('ae_login_flow');
        } catch (Exception $e) {

        }

        // Check that the exception was thrown.
        $this->assertTrue(isset($e));

        /**
         * needs a better more modular test
         * @var [type]
         */
        // verify that the registration array was mock sent in the POST
    }

    /**
     * A Helper Test Function which Verifies all meta data in the WP usermeta
     * table matches the AE user's data
     *
     * @param  [type] $Wp_User [description]
     * @param  [type] $ae_user [description]
     * @return NULL
     */
    private function assert_wp_meta_data_matches_ae_data($Wp_User, $ae_user) {
        $user_data = $ae_user['data'];
        foreach ($user_data as $meta_field => $meta_value) {
            $this->assertEquals($meta_value, get_user_meta($Wp_User->ID, 'ae_connect_' . $meta_field, true));
        }

        $user_services = $ae_user['services'];
        foreach ($user_services as $service) {
            $this->assertEquals($service['ID'], get_user_meta($Wp_User->ID, 'ae_connect_' . $service['Service'] . '_service', true));
        }
    }

    /**
     *
     * A helper Test function which Asserts that local WP AE Users are not turned off
     * @return NULL
     */
    private function assert_WP_Users_on() {
        $local_wp_user = get_option('ae_connect_disable_local_wp_user');
        $user_login_session = get_option('ae_connect_disable_user_log_in_session');

        $this->assertNotEquals('on', $local_wp_user);
        $this->assertNotEquals('on', $user_login_session);
    }

}
