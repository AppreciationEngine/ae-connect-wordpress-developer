<?php
/**
 * @group user_utilites
 *
 */

 class TestUserHandleUtilities extends WP_UnitTestCase {

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
 );

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
      * Assert that get_ae_connect_id_by_wp_id returns valid AE ID from a WP_user ID
      */
     function test_get_ae_connect_id_by_wp_id() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $wp_id = $wp_user->ID;

         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_id);

         $ae_id_from_wp_id = $this->UserHandle->get_ae_connect_id_by_wp_id($wp_id);

         $this->assertEquals($ae_user['data']['ID'], $ae_id_from_wp_id);

     }

     /**
      * Assert get_first_of_ae_services_id returns the first AE service ID from
      * the AE Services structure and it is valid BY WP_user ID
      *
      */
     function test_get_first_of_ae_services_id() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $wp_id = $wp_user->ID;

         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_id);

         $first_of_ae_service_id_from_wp_id = $this->UserHandle->get_first_of_ae_services_id($wp_id);

         $this->assertEquals($ae_user['services'][0]['ID'], $first_of_ae_service_id_from_wp_id);

     }

     /**
      * Assert get_first_of_ae_services returns the first AE service from
      * the AE Services structure and it is valid BY WP_user ID
      *
      */
     function test_get_first_of_ae_services_service() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $wp_id = $wp_user->ID;

         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_id);

         $first_of_ae_service_type_from_wp_id = $this->UserHandle->get_first_of_ae_services_service_type($wp_id);

         $this->assertEquals($ae_user['services'][0]['Service'], $first_of_ae_service_type_from_wp_id);

     }

     /**
      * Assert fresh registration AE user is a clean signon
      *
      */
     function test_fresh_reg_is_clean_signon() {

         $ae_user = $this->ae_js_users_array['ask888'];
         $post['registration'] = $ae_user;

         $is_clean = $this->UserHandle->is_clean_signon($post);
         $this->assertTrue($is_clean);

     }

     /**
      * Assert clean logging in AE user is a clean signon
      *
      */
     function test_clean_login_is_clean_signon() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_user->ID);

         $post['login'] = $ae_user;

         $is_clean = $this->UserHandle->is_clean_signon($post);
         $this->assertTrue($is_clean);

     }

     /**
      * Assert unclean registering AE user is an unclean signon
      *
      */
     function test_unclean_reg_is_unclean_signon() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_user->ID);

         $unclean_ae_user = $this->ae_js_users_array['ask88_collision'];
         $post['login'] = $unclean_ae_user;

         $is_clean = $this->UserHandle->is_clean_signon($post);
         $this->assertTrue(!$is_clean);

     }

     /**
      * Assert unclean login AE user is an unclean signon
      *
      */
     function test_unclean_login_is_unclean_signon() {

         $ae_user = $this->ae_js_users_array['ask888'];

         $wp_user = $this->render_test_wp_user_from_ae_user($ae_user);
         $this->UserHandle->update_ae_user_meta_data($ae_user, $wp_user->ID);

         $unclean_ae_user = $this->ae_js_users_array['ask88_collision'];
         $post['registration'] = $unclean_ae_user;

         $is_clean = $this->UserHandle->is_clean_signon($post);
         $this->assertTrue(!$is_clean);

     }

     /**
      * Assert existing user email/spotify merged matching email user logging in
      * with email after logging in with spotify is a clean signon
      * @return boolean [description]
      */
    function test_merged_user_is_clean_signon() {

        $ae_spotify_guru_user = $this->ae_js_users_array['spotify_guru'];
        $spotify_wp_user = $this->render_test_wp_user_from_ae_user($ae_spotify_guru_user);
        $this->UserHandle->update_ae_user_meta_data($ae_spotify_guru_user, $spotify_wp_user->ID);

        $post['login'] = $ae_spotify_guru_user;

        $is_clean = $this->UserHandle->is_clean_signon($post);
        $this->assertTrue($is_clean);

        $ae_email_guru_user = $this->ae_js_users_array['email_guru'];

        $post['login'] = $ae_email_guru_user;

        $is_clean = $this->UserHandle->is_clean_signon($post);
        $this->assertTrue($is_clean);

    }

    /**
     * Asserts that get_signon_type_from_post returns logout of signon if 'logout' isset in the $_POST
     */
    function test_get_signon_type_from_post_is_logout() {

        $ae_user = $this->ae_js_users_array['ask888'];

        $post['logout'] = $ae_user;
        $type = $this->UserHandle->get_signon_type_from_post($post);
        $this->assertEquals('logout', $type);

    }

    /**
     * Asserts that get_signon_type_from_post returns logout of signon if 'login' isset in the $_POST
     */
    function test_get_signon_type_from_post_is_login() {

        $ae_user = $this->ae_js_users_array['ask888'];

        $post['login'] = $ae_user;
        $type = $this->UserHandle->get_signon_type_from_post($post);
        $this->assertEquals('login', $type);

    }

    /**
     * Asserts that get_signon_type_from_post returns registration of signon if 'registration' isset in the $_POST
     */
    function test_get_signon_type_from_post_is_registration() {

        $ae_user = $this->ae_js_users_array['ask888'];

        $post['registration'] = $ae_user;
        $type = $this->UserHandle->get_signon_type_from_post($post);
        $this->assertEquals('registration', $type);

    }

    /**
     * Asserts that get_signon_type_from_post returns registration of signon if 'gobbldi_gloop' isset in the $_POST
     */
    function test_get_signon_type_from_post_is_gobbldi_gloop() {

        $post['gobbldi_gloop'] = array('gobbldi_gloop');
        $type = $this->UserHandle->get_signon_type_from_post($post);
        $this->assertEquals('fatal_error', $type);

    }

    /**
     * Assert that two users with matching services match on services
     * @return [type] [description]
     */
    function test_match_services() {

        $ae_spotify_guru_user = $this->ae_js_users_array['spotify_guru'];
        $spotify_wp_user = $this->render_test_wp_user_from_ae_user($ae_spotify_guru_user);
        $this->UserHandle->update_ae_user_meta_data($ae_spotify_guru_user, $spotify_wp_user->ID);

        $post['login'] = $ae_spotify_guru_user;

        $is_clean = $this->UserHandle->is_clean_signon($post);
        $this->assertTrue($is_clean);

        $ae_email_guru_user = $this->ae_js_users_array['email_guru'];

        $match = $this->UserHandle->match_services($ae_email_guru_user);
        $this->assertTrue($match);

    }

    /**
     * Assert that given a JSON encoded object the output does not contain any sensitive WP user field propeties
     */
    function test_strip_sensitive_user_data() {

        $ae_user = $this->ae_js_users_array['ask888'];
        $aeWPUser = $this->render_test_wp_user_from_ae_user($ae_user);
        $encoded_user = json_encode($aeWPUser);
        $clean_data = json_decode( $this->UserHandle->strip_sensitive_user_data($encoded_user), true )['data'];

        $this->assertTrue(array_key_exists('ID', $clean_data));
        $this->assertEquals($aeWPUser->ID, $clean_data['ID']);

        $this->assertTrue(!array_key_exists('user_email', $clean_data));
        $this->assertTrue(!array_key_exists('user_login', $clean_data));
        $this->assertTrue(!array_key_exists('user_pass', $clean_data));
        $this->assertTrue(!array_key_exists('user_activation_key', $clean_data));
        $this->assertTrue(!array_key_exists('user_url', $clean_data));
        $this->assertTrue(!array_key_exists('user_registered', $clean_data));

    }

    /**
     * Assert that given a JSON encoded string the output is also an encoded string
     */
    function test_non_user_strip_sensitive_user_data() {

        $encoded_string = json_encode('no_process');
        var_dump($encoded_string);
        $clean_data = json_decode( $this->UserHandle->strip_sensitive_user_data($encoded_string), true );

        $this->assertInternalType('string', $clean_data[0]);

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
