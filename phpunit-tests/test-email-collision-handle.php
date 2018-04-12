<?php

class TestEmailCollisionHandling extends WP_UnitTestCase {

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
                1 =>
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
                    'ID' => '534564321',
                    'UserID' => 'ask888',
                    'Username' => NULL,
                    'UserURL' => 'https://open.spotify.com/user/ask888',
                    // token and token secret are duplicates in this collision user and the OG user
                    'Token' => 'BQBfXPSYPtdm-hA-UNIiZZAWZ6cgNGa7OSTebkF21umYFib6uoOGstzDr6cE4WbJDzyY70arPRZipoWC1ELFEgllzs-xs0F1gd5AOKldtc4MgBHG74Lde17lnhNA46YqYoGfb4X5gm-k9WHLRYlZlPTDmQ3dyt8VZreisymgVwjF4TyHDBpFh6mJjTH6DLs5CTTEFN4MQJzWXgZBwgIOVa19QYcuRP8xvRGc_MUdfRN37MUm2z60H9W2VUbjeVeg5N321S0v1bYenInT6ZRSrescHQSqOQ',
                    'TokenSecret' => 'AQB8hWkpNjliYXsEG6gDueXfbKLGxECm5C-Ir2dWzqt2obWj3rGgyNRM3yQaNQf-Tqjlp_wSx4FwPIyk08oujCflToxTms2gumG4tOpRSeKoOU-dPGTT_pajVd9aE2DmB6o',
                    'ServiceID' => '2411',
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
        'email_guru' => array (
          'data' =>
          array (
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
      'spotify_guru' => array (
          'data' =>
          array (
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
              'ID' => '945',
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
        'guru_no_spotify' => array (
            'data' =>
            array (
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
                'Service' => 'email',
                'Valid' => '1',
                'ID' => '945',
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

    private $AEConnectUserFlow;

    public function setUp() {
        parent::setUp();
        require_once 'public/user-handling/class-user-signon-handle.php';
        require_once 'public/user-handling/class-ae-connect-user-flow.php';
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
     * Assert that a colliding AE user processed as a collision when handled
     */
    function test_collision_process_ae_data_is_collision() {

        $ae_user = $this->ae_js_users_array['ask888'];

        $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
        $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_user->ID);

        $unclean_ae_user = $this->ae_js_users_array['ask88_collision'];
        $post['login'] = $unclean_ae_user;

        $is_clean = $this->UserHandle->is_clean_signon($post);

        $result = json_decode($this->UserHandle->process_ae_data($is_clean, $post), true);
        $this->assertEquals(1111, $result['code']);

    }

    /**
     * Test the case where a user tries to login with a service that has an email attached to it
     * that conflicts with an email we have on record
     *
     * @return NULL
     */
    function test_handle_email_collision() {

        $ae_user = $this->ae_js_users_array['ask888'];

        $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
        $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_user->ID);

        $unclean_ae_user = $this->ae_js_users_array['ask88_collision'];
        $service_collision_handle = $this->EmailCollisionHandle->handle_email_collision($unclean_ae_user);

        $this->assertEquals('Email Collision', $service_collision_handle['error']);
        $this->assertEquals(1111, $service_collision_handle['code']);
        $this->assertEquals('spotify', $service_collision_handle['userA_service_type']);

        $ae_user = $this->ae_js_users_array["ask888"];

    }

    function test_login_merged_user_res_data_success() {

        $ae_guru_no_spotify = $this->ae_js_users_array['guru_no_spotify'];
        $WP_guru_user = $this->render_test_wp_user_from_ae_user($ae_guru_no_spotify);
        // Render meta fields in meta fields for test user:
        $this->UserHandle->update_ae_user_meta_data($ae_guru_no_spotify, $WP_guru_user->ID);

        // register email guru without
        $res_data = array();
        $res_data['success'] = true;
        $res_data['post_response'] = $this->ae_js_users_array['spotify_guru'];

        $WP_merged_user = $this->EmailCollisionHandle->login_merged_user($res_data);

        // Assert that the initial test WP user created matches the WP user logged in
        // from their AE Credentials
        $this->assertEquals($WP_guru_user, $WP_merged_user);
        $this->assertEquals($WP_guru_user->ID, $WP_merged_user->ID);

        // Assert that the user is logged in:
        $this->assertEquals($WP_guru_user, wp_get_current_user());

    }

    function test_login_merged_user_res_data_fail() {

        $ae_guru_no_spotify = $this->ae_js_users_array['guru_no_spotify'];
        $WP_guru_user = $this->render_test_wp_user_from_ae_user($ae_guru_no_spotify);
        // Render meta fields in meta fields for test user:
        $this->UserHandle->update_ae_user_meta_data($ae_guru_no_spotify, $WP_guru_user->ID);

        // register email guru without
        $res_data = array();
        $res_data['success'] = false;
        $res_data['post_response'] = $this->ae_js_users_array['spotify_guru'];

        $WP_merged_user = $this->EmailCollisionHandle->login_merged_user($res_data);

        $this->assertEquals(NULL, $WP_merged_user);

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

}
