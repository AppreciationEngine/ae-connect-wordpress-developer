<?php

class Test_Ae_JS_Settings_Export extends WP_Ajax_UnitTestCase {

    /**
     * Object reference for the Ae_JS_Settings_Ajax_Export class
     * @var Ae_JS_Settings_Ajax_Export
     */
    private $Ajax_Export;

    /**
     * an associative array of extra_fields
     * @var array
     */
    private $extra_fields_assoc_array = array(
        'Address' => 'address',
        'Address/line2' => 'addressline2',
        'City' => 'city',
        'State/Province' => 'state',
        'Country' => 'country',
        'Postal Code' => 'postcode',
        'Home Phone' => 'homephone',
        'Mobile Phone' => 'mobilephone',
        'Username' => 'username',
        'Website' => 'website',
        'Tell Us About Yourself' => 'bio',
        'Gender' => 'gender',
        'Birthdate' => 'birthdate'
    );

    /**
     * an array of email formatting options
     * @var array
     */
    private $email_formats_array = array(
        array(
            "field" => "background_color",
            "human_readable" => "Background Color",
            "section" => "email_format"),
        array(
            "field" => "font_size",
            "human_readable" => "Font Size",
            "section" => "email_format"),
        array(
            "field" => "font_family",
            "human_readable" => "Font Family",
            "section" => "email_format"),
        array(
            "field" => "font_color",
            "human_readable" => "Font Color",
            "section" => "email_format"),
        array(
            "field" => "show_header",
            "human_readable" => "Show Header",
            "section" => "email_header"),
        array(
            "field" => "header_background_color",
            "human_readable" => "Header Background Color",
            "section" => "email_header"),
        array(
            "field" => "header_font_color",
            "human_readable" => "Header Font Color",
            "section" => "email_header"),
        array(
            "field" => "image_url",
            "human_readable" => "Header Image URL",
            "section" => "email_header"),
        array(
            "field" => "show_footer",
            "human_readable" => "Show Footer",
            "section" => "email_footer"),
        array(
            "field" => "footer_background_color",
            "human_readable" => "Footer Background Color",
            "section" => "email_footer"),
        array(
            "field" => "footer_font_color",
            "human_readable" => "Footer Font Color",
            "section" => "email_footer"),
        array(
            "field" => "logo_link",
            "human_readable" => "Footer Logo Destination URL",
            "section" => "email_footer"),
        array(
            "field" => "logo_img_url",
            "human_readable" => "Footer Logo Image URL",
            "section" => "email_footer"),
        array(
            "field" => "copyright",
            "human_readable" => "Copyright Text",
            "section" => "email_footer"),
        array(
            "field" => "verify_email_subject",
            "human_readable" => "Verify Email Subject",
            "section" => "email_verify"),
        array(
            "field" => "verify_email_message",
            "human_readable" => "Verify Email Text",
            "section" => "email_verify"),
        array(
            "field" => "verify_email_link",
            "human_readable" => "Verify Email Link Text",
            "section" => "email_verify"),
        array(
            "field" => "reset_pw_email_subject",
            "human_readable" => "Reset Password Subject",
            "section" => "email_reset_pword"),
        array(
            "field" => "reset_pw_email_message",
            "human_readable" => "Reset Password Text",
            "section" => "email_reset_pword"),
        array(
            "field" => "reset_pw_email_link",
            "human_readable" => "Reset Email Link Text",
            "section" => "email_reset_pword")
    );

    public function setUp() {
        parent::setUp();

        require_once 'admin/class-ae-connect-ae-js-settings-export.php';
        $this->Ajax_Export = new Ae_JS_Settings_Export('ae_connect', '1.0.0');
    }

    public function tearDown() {
        parent::tearDown();
    }

    /**
     * Tests the export_ae_js_settings
     * Makes no notable assertions, however will throw an error if something goes wrong
     * in the code base which is its ultimate use.
     *
     * @return [type] [description]
     */
    public function test_export_ae_js_settings() {
        $this->setUp();

        $Ajax_Export = $this->Ajax_Export;

        $aeJs_settings = $Ajax_Export->export_ae_js_settings();

        $this->assertInternalType('string', $aeJs_settings);

        $this->tearDown();
    }

    /**
     * Tests the render_services_string by simulating enabled AE Application
     * services and WP Admin settings
     *
     * Asserts:
     *  The string rendered by render_services_string() matches the expected result
     *
     * @return [type] [description]
     */
    public function test_render_services_string() {
        $this->setUp();

        update_option('ae_connect_social_logins', array('Twitter', 'Facebook', 'Google'));
        update_option('ae_connect_Twitter', 'on');
        update_option('ae_connect_Facebook', 'on');
        update_option('ae_connect_Google', 'on');

        $Ajax_Export = $this->Ajax_Export;

        $services_string = $Ajax_Export->render_services_string();

        $this->assertEquals("twitter,facebook,google", $services_string);

        $this->tearDown();
    }

    /**
     * Tests the render_extra_fields_settings by simulating WP Admin settings
     *
     * Asserts:
     *
     *  render_extra_fields_settings returned an array with more than 0 fields in it
     *
     *  If that the options for the extra field in the WP database matches the
     *  extra_fields object that is being exported to the AEJS
     *
     * @return [type] [description]
     */
    public function test_render_extra_fields_settings() {
        $this->setUp();
        $Ajax_Export = $this->Ajax_Export;
        // A list of extra_fields:
        $extra_fields_assoc_array = $this->extra_fields_assoc_array;
        update_option('ae_connect_extra_fields_assoc_array', $extra_fields_assoc_array);

        // Simulate a user setting some extra fields options
        update_option('ae_connect_address', 'on');
        update_option('ae_connect_label_address', 'Funky Monks');
        update_option('ae_connect_required_address', 'on');

        update_option('ae_connect_homephone', 'on');
        update_option('ae_connect_label_homephone', 'Buds');

        update_option('ae_connect_city', 'on');
        update_option('ae_connect_required_address', 'on');

        $ae_extra_fields = $Ajax_Export->render_extra_fields_settings();
        $this->assertTrue(count($ae_extra_fields) > 0);

        $count = 0;
        foreach ($ae_extra_fields as $e_field => $properties) {
            $enabled = get_option('ae_connect_' . $e_field);
            $this->assertTrue(!empty($enabled));

            if ($enabled == 'on') {
                $label_query = get_option('ae_connect_label_' . $e_field);
                $required_query = get_option('ae_connect_required_' . $e_field) ? true : false;

                $this->assertEquals($label_query, $properties['label']);
                $this->assertEquals($required_query, $properties['required']);
            }
        }
        $this->tearDown();
    }

    public function test_render_email_format_settings() {
        $this->setUp();
        $Ajax_Export = $this->Ajax_Export;

        // A list of extra_fields:
        $email_formats_array = $this->email_formats_array;
        update_option('ae_connect_email_formats_struct', $email_formats_array);

        // Simulate a user setting some extra fields options
        update_option('ae_connect_background_color', 'purple');
        update_option('ae_connect_font_family', 'arial');
        update_option('ae_connect_header_font_color', 'red');

        $ae_email_formats = $Ajax_Export->render_email_format_settings();
        $this->assertTrue(count($ae_email_formats) > 0);

        // $email_formats[$format['field']] = $customization;
        foreach ($ae_email_formats as $format => $value) {
            $db_field = get_option('ae_connect_' . $format);

            if (!empty($db_field)) {
                $this->assertEquals($db_field, $value);
            }
        }

        $this->tearDown();
    }

    public function test_get_selected_flow_css_url_flow_css_defined_theme_undefined() {
        $Ajax_Export = $this->Ajax_Export;

        update_option('ae_connect_flow_css', 'https://awesome-styles.com/path/to/awesomestyles.css');
        // update_option('ae_connect_flow_css_themes');

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('https://awesome-styles.com/path/to/awesomestyles.css', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_defined_theme_0() {
        $Ajax_Export = $this->Ajax_Export;

        update_option('ae_connect_flow_css', 'https://awesome-styles.com/path/to/awesomestyles.css');
        update_option('ae_connect_flow_css_themes', 0);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('https://awesome-styles.com/path/to/awesomestyles.css', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_defined_theme_1() {
        $Ajax_Export = $this->Ajax_Export;
        update_option('ae_connect_flow_css', 'https://awesome-styles.com/path/to/awesomestyles.css');
        update_option('ae_connect_flow_css_themes', 1);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('https://awesome-styles.com/path/to/awesomestyles.css', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_defined_theme_2() {
        $Ajax_Export = $this->Ajax_Export;
        update_option('ae_connect_flow_css', 'https://awesome-styles.com/path/to/awesomestyles.css');
        update_option('ae_connect_flow_css_themes', 2);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('https://awesome-styles.com/path/to/awesomestyles.css', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_defined_theme_3() {
        $Ajax_Export = $this->Ajax_Export;
        update_option('ae_connect_flow_css', 'https://awesome-styles.com/path/to/awesomestyles.css');
        update_option('ae_connect_flow_css_themes', 3);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('https://awesome-styles.com/path/to/awesomestyles.css', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_undefined_theme_0() {
        $Ajax_Export = $this->Ajax_Export;
        update_option('ae_connect_flow_css_themes', 0);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals('', $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_undefined_theme_1() {
        $Ajax_Export = $this->Ajax_Export;
        $theme_1 = plugin_dir_url(__DIR__) . 'public/css/ae-signup-theme-colourful.css';
        update_option('ae_connect_flow_css_themes', 1);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals($theme_1, $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_undefined_theme_2() {
        $Ajax_Export = $this->Ajax_Export;
        $theme_2 = plugin_dir_url(__DIR__) . 'public/css/ae-signup-theme-light.css';
        update_option('ae_connect_flow_css_themes', 2);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals($theme_2, $flow_css_url);
    }

    public function test_get_selected_flow_css_url_flow_css_undefined_theme_3() {
        $Ajax_Export = $this->Ajax_Export;
        $theme_3 = plugin_dir_url(__DIR__) . 'public/css/ae-signup-theme-dark.css';
        update_option('ae_connect_flow_css_themes', 3);

        $flow_css_url = $Ajax_Export->get_selected_flow_css_url();
        $this->assertEquals($theme_3, $flow_css_url);
    }

}
