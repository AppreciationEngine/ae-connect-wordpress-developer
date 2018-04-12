<?php

class Test_Ae_Utilities extends WP_Ajax_UnitTestCase {

    public function setUp() {
        parent::setUp();

        require_once 'utilities/class-ae-utilities.php';
        $this->Utilities = new Ae_Utilities();
    }

    public function tearDown() {
        parent::tearDown();
    }

    public function test_append_scheme_to_url_schemeless_secure() {

        $url = 'google.com';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('https://google.com', $url_schemeified);

    }

    public function test_append_scheme_to_url_schemeless_insecure() {

        $url = 'google.com';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('http://google.com', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_https_scheme_insecure() {

        $url = 'https://google.com';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('https://google.com', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_https_scheme_secure() {

        $url = 'https://google.com';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('https://google.com', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_http_scheme_insecure() {

        $url = 'http://google.com';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('http://google.com', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_http_scheme_secure() {

        $url = 'http://google.com';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('http://google.com', $url_schemeified);

    }





    public function test_append_scheme_to_url_schemeless_secure_withpath() {

        $url1 = 'google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'google.com/path/to/greatness';
        $url3 = 'google.com/path';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('https://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('https://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('https://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_schemeless_insecure_withpath() {

        $url1 = 'google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'google.com/path/to/greatness';
        $url3 = 'google.com/path';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('http://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('http://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('http://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_https_scheme_insecure_withpath() {

        $url1 = 'https://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'https://google.com/path/to/greatness';
        $url3 = 'https://google.com/path';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('https://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('https://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('https://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_https_scheme_secure_withpath() {

        $url1 = 'https://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'https://google.com/path/to/greatness';
        $url3 = 'https://google.com/path';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('https://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('https://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('https://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_http_scheme_insecure_withpath() {

        $url1 = 'http://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'http://google.com/path/to/greatness';
        $url3 = 'http://google.com/path';
        $secure = false;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('http://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('http://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('http://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_has_http_scheme_secure_withpath() {

        $url1 = 'http://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw';
        $url2 = 'http://google.com/path/to/greatness';
        $url3 = 'http://google.com/path';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url1, $secure);
        $this->assertEquals('http://google.com/?gfe_rd=cr&dcr=0&ei=clyLWvO-Acje8AfdhoCwAw', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url2, $secure);
        $this->assertEquals('http://google.com/path/to/greatness', $url_schemeified);

        $url_schemeified = $this->Utilities->append_scheme_to_url($url3, $secure);
        $this->assertEquals('http://google.com/path', $url_schemeified);

    }

    public function test_append_scheme_to_url_relative() {

        $url = '/homepage';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('/homepage', $url_schemeified);

    }

    public function test_append_scheme_to_url_blank_string() {

        $url = '';
        $secure = true;

        $url_schemeified = $this->Utilities->append_scheme_to_url($url, $secure);
        $this->assertEquals('', $url_schemeified);

    }

    public function test_match_and_change_scheme_https_to_http() {

        $desired_scheme_url = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $url_to_be_changed = 'https://theappreciationengine.com';

        $scheme_changed_url = $this->Utilities->match_and_change_scheme($desired_scheme_url, $url_to_be_changed);
        $scheme_change = parse_url($scheme_changed_url, PHP_URL_SCHEME);
        $this->assertEquals('http', $scheme_change);

    }

    public function test_match_and_change_scheme_http_to_https() {

        $desired_scheme_url = 'https://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $url_to_be_changed = 'http://theappreciationengine.com';

        $scheme_changed_url = $this->Utilities->match_and_change_scheme($desired_scheme_url, $url_to_be_changed);
        $scheme_change = parse_url($scheme_changed_url, PHP_URL_SCHEME);
        $this->assertEquals('https', $scheme_change);

    }

    public function test_match_and_change_scheme_no_scheme_to_https() {

        $desired_scheme_url = 'https://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $url_to_be_changed = 'theappreciationengine.com';

        $scheme_changed_url = $this->Utilities->match_and_change_scheme($desired_scheme_url, $url_to_be_changed);
        $this->assertEquals('https://theappreciationengine.com', $scheme_changed_url);

    }

    public function test_match_and_change_scheme_no_scheme_to_http() {

        $desired_scheme_url = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $url_to_be_changed = 'theappreciationengine.com';

        $scheme_changed_url = $this->Utilities->match_and_change_scheme($desired_scheme_url, $url_to_be_changed);
        $scheme_change = parse_url($scheme_changed_url, PHP_URL_SCHEME);
        $this->assertEquals('http', $scheme_change);

    }

    public function test_match_and_change_scheme_no_desired_scheme_check() {

        $desired_scheme_url = 'thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $url_to_be_changed = 'http://theappreciationengine.com';

        $scheme_changed_url = $this->Utilities->match_and_change_scheme($desired_scheme_url, $url_to_be_changed);
        $this->assertEquals('theappreciationengine.com', $scheme_changed_url);

    }

    public function test_flow_css_is_http_true() {

        $flow_css = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';

        $res = $this->Utilities->flow_css_is_http($flow_css);
        $this->assertTrue($res);

    }

    public function test_flow_css_is_http_false() {

        $flow_css = 'https://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $res = $this->Utilities->flow_css_is_http($flow_css);
        $this->assertTrue(!$res);

    }

    public function test_flow_css_is_http_null() {

        $flow_css = null;
        $res = $this->Utilities->flow_css_is_http($flow_css);
        $this->assertTrue(!$res);

    }

    public function test_flow_css_is_http_empty() {

        $flow_css = '';
        $res = $this->Utilities->flow_css_is_http($flow_css);
        $this->assertTrue(!$res);

    }

    public function test_change_aejs_scheme_based_on_flow_css_IS_CHANGED() {

        $flow_css_url = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $ae_js_url = 'https://theappreciationengine.com';

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals('http://theappreciationengine.com', $changed_url);

    }

    public function test_change_aejs_scheme_based_on_flow_css_https_https() {

        $flow_css_url = 'https://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $ae_js_url = 'https://theappreciationengine.com';

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals('https://theappreciationengine.com', $changed_url);

    }

    public function test_change_aejs_scheme_based_on_flow_css_http_http() {

        $flow_css_url = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $ae_js_url = 'http://theappreciationengine.com';

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals('http://theappreciationengine.com', $changed_url);

    }

    public function test_change_aejs_scheme_based_on_flow_css_null_http() {

        $flow_css_url = null;
        $ae_js_url = 'http://theappreciationengine.com';

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals('http://theappreciationengine.com', $changed_url);

    }

    public function test_change_aejs_scheme_based_on_flow_css_empty_http() {

        $flow_css_url = '';
        $ae_js_url = 'https://theappreciationengine.com';

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals('https://theappreciationengine.com', $changed_url);

    }

    public function test_change_aejs_scheme_based_on_flow_css_http_false() {

        $flow_css_url = 'http://thomas-wordpress.appreciationengine.com/wp-content/themes/excellentrecords/SDS-assets/css/ae-modal.css';
        $ae_js_url = false;

        $changed_url = $this->Utilities->change_aejs_scheme_based_on_flow_css($flow_css_url, $ae_js_url);
        $this->assertEquals(false, $changed_url);

    }

}
