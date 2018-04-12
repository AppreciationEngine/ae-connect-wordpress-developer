<?php

/**
 * Test cases for WP User Creation
 */
class TestIntegrationgWPUserHandling extends WP_UnitTestCase {

    /**
     * An Object reference containing all methods relevant to User Handling
     * @var
     */
    private $AEConnectUserFlow;

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
        )
    );

    public function setUp() {
        parent::setUp();
        require_once 'public/user-handling/class-ae-connect-user-flow.php';
        require_once 'public/user-handling/class-user-signon-handle.php';
        require_once 'public/user-handling/class-email-collision-handle.php';
        //require_once 'public/class-ae-connect-public.php';
        // Instantiate the class which holds the methods for User creation
        $this->AEConnectUserFlow = new Ae_Connect_User_Flow('ae_connect', '1.0.0');
        $this->UserHandle = new Ae_Connect_UserSignonHandle();
        $this->EmailCollisionHandle = new Ae_Connect_EmailCollisionHandle();
    }

    public function tearDown() {
        parent::tearDown();
    }

    /**
     * Tests the functionality of the create_new_ae_wp_user function.
     *
     * Asserts:
     *
     *  WP User exists
     *
     *  Basic AE User Data matches Basic WP User Data
     * @return NULL
     *
     */
    function test_create_new_ae_wp_user() {
        $this->setUp();
        // Ensure that $AEConnectUserFlow was properly intantiated
        $this->assertInstanceOf(Ae_Connect_User_Flow::class, $this->AEConnectUserFlow);

        $this->assert_WP_Users_on();

        // Grab an ae test user from the global ae js user array
        $user = $this->ae_js_users_array["ask888"];

        // Set up user data from $ae_js_user:
        $ae_data = $user['data'];

        // Compose variables to store core user data
        $ae_user_name = $ae_data['Username'];
        $ae_email = $ae_data['Email'];

        // Create a WP user from this JS user
        // $new_user_data: array('user_data' => $user_data, 'user_id' => $user_id, 'wp_user_data' => $wp_user_data)
        $new_user_data = $this->UserHandle->create_new_ae_wp_user($user);

        $wp_user_data = $new_user_data['wp_user_data'];
        $new_wp_user_id = $new_user_data['user_id'];

        // Ensure data for new WP user matches the AE user's data
        $this->assertEquals($ae_user_name, $wp_user_data['user_login']);
        $this->assertEquals($ae_email, $wp_user_data['user_email']);

        // Retrieve newly created test user by its ID
        $test_WP_User = get_user_by('ID', $new_wp_user_id);

        // Assert that the user was created and is valid
        $this->assertInstanceOf(WP_User::class, $test_WP_User);

        // Assert that this user's basic properties match the AE user's
        $this->assertEquals($ae_user_name, $test_WP_User->get('user_login'));
        $this->assertEquals($ae_email, $test_WP_User->get('user_email'));

        $this->tearDown();
    }

    /**
     * Tests the functionality of the log_in_ae_wp_user function.
     *
     * Asserts:
     *
     *  Logged in WP user is Logged in
     * @return NULL
     *
     */
    function test_log_in_ae_wp_user() {
        $this->setUp();

        $this->assert_WP_Users_on();

        // Create a WP user from an AE user data scheme:
        // Grab an ae test user from the global ae js user array
        $user = $this->ae_js_users_array["ask888"];
        $test_WP_User = $this->render_test_wp_user_from_ae_user($user);

        // Log user in:
        $logged_in_WP_User = $this->UserHandle->log_in_ae_wp_user($test_WP_User);

        // Ensure the logged in user's ID matches the original test user's ID
        $this->assertEquals($test_WP_User->ID, $logged_in_WP_User->ID);

        $this->tearDown();
    }

    /**
     * Tests the functionality of the update_ae_user_meta_data function.
     *
     * Asserts:
     *
     *  WP ID is an Integer
     *
     *  All WP AE User's services, data match the raw AE user's
     * @return NULL
     *
     */
    function test_update_ae_user_meta_data() {
        $this->setUp();

        $this->assert_WP_Users_on();

        // Create a WP user from an AE user data scheme:
        // Grab an ae test user from the global ae js user array
        $user = $this->ae_js_users_array["ask888"];
        $test_WP_User = $this->render_test_wp_user_from_ae_user($user);
        $wp_user_id = $test_WP_User->ID;
        $this->assertInternalType('int', $wp_user_id);

        // Add meta data to the new WP user
        $this->UserHandle->update_ae_user_meta_data($user, $wp_user_id);

        // Verify all meta data in the WP usermeta table matches the AE data:
        $this->assert_wp_meta_data_matches_ae_data($test_WP_User, $user);

        $this->tearDown();
    }

    /**
     * Tests the functionality of the wp_user_login function.
     *
     * Simulates a scenario where there is an existing WP user in the DB, and we are
     * logging them in using their AE ID
     *
     *  Asserts:
     *
     *  WP AE User is correctly created and synced with AE data
     *
     *  TEST WP User created has the Same ID as the AE WP User logging in
     *
     *  WP AE User is logged in and is the current user
     * @return NULL
     *
     */
    function test_wp_user_login() {
        $this->setUp();

        $this->assert_WP_Users_on();
        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];
        // Render test user
        $test_WP_User = $this->render_test_wp_user_from_ae_user($ae_user);

        // Render meta fields in meta fields for test user:
        $this->UserHandle->update_ae_user_meta_data($ae_user, $test_WP_User->ID);

        // Verify all meta data in the WP usermeta table matches the AE data:
        $this->assert_wp_meta_data_matches_ae_data($test_WP_User, $ae_user);

        // Log the AE user in
        $logged_in_WP_User = $this->UserHandle->wp_user_login($ae_user);

        // Assert that the initial test WP user created matches the WP user logged in
        // from their AE Credentials
        $this->assertEquals($test_WP_User, $logged_in_WP_User);
        $this->assertEquals($test_WP_User->ID, $logged_in_WP_User->ID);

        // Assert that the user is logged in:
        $this->assertEquals($test_WP_User, wp_get_current_user());

        $this->tearDown();
    }

    /**
     * Tests the functionality of the wp_user_register function.
     *
     * Asserts:
     *
     *  WP AE User data correctly synced
     *
     *  WP AE User is logged in
     * @return NULL
     *
     */
    function test_wp_user_register() {
        $this->setUp();

        $this->assert_WP_Users_on();

        // Grab an ae test user from the global ae js user array
        $ae_user = $this->ae_js_users_array["ask888"];
        $ae_id = $ae_user['data']['ID'];

        // Register ae user as WP user
        $test_reg_WP_User = $this->UserHandle->wp_user_register($ae_user);

        // Verify all meta data in the WP usermeta table matches the AE data:
        $this->assert_wp_meta_data_matches_ae_data($test_reg_WP_User, $ae_user);

        // Create another user to ensure $test user is still logged in.
        $factory_user_id = $this->factory->user->create(array('role' => 'author'));

        // Assert that the user is logged in:
        $this->assertEquals($test_reg_WP_User, wp_get_current_user());

        $this->tearDown();
    }

    /**
     * Tests the functionality of the   wp_user_logout function.
     *
     * Asserts:
     *
     *  AE WP USer is initially logged in
     *
     *  AE WP User is logged out and there is no current WP User session
     * @return NULL
     *
     */
    function test_wp_user_logout() {
        $this->setUp();

        // Test for a user who as been created but has no Meta fields
        // I.E does not link back to an AE user
        $test_user = $this->render_test_wp_user_from_ae_user($this->ae_js_users_array["ask888"]);

        $this->UserHandle->log_in_ae_wp_user($test_user);
        // Assert that the user is logged in:
        $this->assertEquals($test_user, wp_get_current_user());

        $this->UserHandle->wp_user_logout("Login out bud");
        // Assert that the user is logged out:
        $this->assertTrue(!is_user_logged_in());
        $this->assertEquals(0, wp_get_current_user()->ID);

        // Test for a new fully registered user
        $this->tearDown();
        $this->setUp();

        $test_reg_user = $this->UserHandle->wp_user_register($this->ae_js_users_array["ask888"]);

        $this->UserHandle->log_in_ae_wp_user($test_reg_user);
        // Assert that the user is logged in:
        $this->assertEquals($test_reg_user, wp_get_current_user());

        $this->UserHandle->wp_user_logout("Login out bud");
        // Assert that the user is logged out:
        $this->assertEquals(0, wp_get_current_user()->ID);

        $this->tearDown();
    }

    /**
     * [test_ae_wp_user_validation description]
     * @return [type] [description]
     */
    function test_ae_wp_user_validation() {
        $ae_user = $this->ae_js_users_array["ask888"];

        // Register ae user as WP user
        $test_reg_WP_User = $this->UserHandle->wp_user_register($ae_user);

        $is_wp_ae_user = $this->UserHandle->ae_wp_user_validation($ae_user);
        // Assert that they pass validation (should match on ID)
        $this->assertTrue($is_wp_ae_user);

        // Change the logged in user's AE ID
        update_user_meta($test_reg_WP_User->ID, 'ID', 981726354);

        // Validate a user that has a different AE ID against services
        $is_wp_ae_user = $this->UserHandle->ae_wp_user_validation($ae_user);

        // assert that the no user is attached to the changed (simulated old) AE ID anymore
        // AKA the user has been updated
        $DNE_user_array = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => 981726354));
        $this->assertTrue(empty($DNE_user_array));

        // Grab updated local user and assert that they have been updated
        // because their ID should be merged with the new account signing in
        $updated_user_array = get_users(array('meta_key' => 'ae_connect_' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(!empty($updated_user_array));

        // Assert that the user's AE ID has been updated and that they passed the validation check
        $this->assertEquals($ae_user['data']['ID'], get_user_meta($test_reg_WP_User->ID, 'ae_connect_' . 'ID', true));
        $this->assertTrue($is_wp_ae_user);

        // create a user that has the same email as the previous user, but doesn't
        // match on ID's or Services
        $collision_ae_user = $this->ae_js_users_array["ask88_collision"];
        // echo 'Collision user service: ' . $collision_ae_user['services'][0]['ID'];
        // echo 'Collision user ID: ' . $collision_ae_user['data']['ID'];
        // echo 'Collision user Email: ' . $collision_ae_user['data']['Email'];
        // Assert that the user does not have a verified email to match on
        $this->assertTrue(empty($collision_ae_user['VerifiedEmail']));

        $is_wp_ae_user = $this->UserHandle->ae_wp_user_validation($collision_ae_user);

        // Assert that the user is valid
        $this->assertTrue(!$is_wp_ae_user);
    }

    /**
     * Test the case where a user tries to login with a service that has an email attached to it
     * that conflicts with an email we have on record
     *
     * @return NULL
     */
    function test_handle_email_collision() {
        $ae_user = $this->ae_js_users_array["ask888"];
        // Register ae user as WP user
        $test_reg_WP_User = $this->UserHandle->wp_user_register($ae_user);


        $collision_ae_user = $this->ae_js_users_array["ask88_collision"];
        $service_collision_handle = $this->EmailCollisionHandle->handle_email_collision($collision_ae_user);

        $this->assertEquals('Email Collision', $service_collision_handle['error']);
        $this->assertEquals(1111, $service_collision_handle['code']);
        $this->assertEquals('spotify', $service_collision_handle['userA_service_type']);
    }

    /**
     *
     * @return [type] [description]
     */
    function test_check_verified_email() {
        $ae_user = $this->ae_js_users_array["ask888"];
        $ae_user['data']['VerifiedEmail'] = $ae_user['data']['Email'];

        // Register ae user as WP user
        $test_reg_WP_User = $this->UserHandle->wp_user_register($ae_user);

        // Set user's VerifiedEmail
        $collision_ae_user = $this->ae_js_users_array["ask88_collision"];
        $collision_ae_user['data']['VerifiedEmail'] = $ae_user['data']['Email'];
        // Change their service ID so they don't merge on service ID either
        $collision_ae_user['services'][0]['ID'] = 8276483;

        // Assert that the user signing in matches the verified email of the previous User
        $this->assertEquals($ae_user['data']['VerifiedEmail'], $ae_user['data']['VerifiedEmail']);
        // Validate a user with a different AE ID
        $merged = $this->UserHandle->ae_wp_user_validation($collision_ae_user);
        $this->assertTrue($merged);

        // Grab updated local user and assert that they have been erased
        $updated_user_array = get_users(array('meta_key' => 'ae_connect' . 'ID', 'meta_value' => $ae_user['data']['ID']));
        $this->assertTrue(empty($updated_user_array));
    }

    /**
     * Renders a test WP user from a AE User array. This function DOES NOT
     * sync the WP User's data with AE's data and services (aka update_user_meta)
     *
     * @return WP_User AE WP USer
     */
    private function render_test_wp_user_from_ae_user($ae_user) {
        $new_user_data = $this->UserHandle->create_new_ae_wp_user($ae_user);
        $new_wp_user_id = $new_user_data['user_id'];

        // Retrieve newly created test user by its ID
        $test_WP_User = get_user_by('ID', $new_wp_user_id);

        return $test_WP_User;
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
