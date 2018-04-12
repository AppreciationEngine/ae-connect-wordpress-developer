var jsdom = require('mocha-jsdom');
// global.$ = global.jQuery = require('jquery');

localStorage = require('mock-local-storage');

OnPageExtraFields = require("../../../public/js/onpage-extra-fields.js");
AeState = require("../../../public/js/ae-state.js");

const expect = require( "chai" ).expect;

describe("objectKeysToLowerCase()", function() {

    before(() => {

        OnPageExtraFieldsObj = new OnPageExtraFields();

    });

    it('Should be empty {}', function(){
        var shouldBeEmpty = OnPageExtraFieldsObj.objectKeysToLowerCase({});
        expect(shouldBeEmpty).to.deep.eql({});
    });

    it('1.should be an object with lower case keys (already lower)', function(){
        var lowerCaseKeys = {firstname: 'jam', lastname: 'sauce'};
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(lowerCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({firstname: 'jam', lastname: 'sauce'});
    });

    it('2.should be an object with lower case keys (first key is upper)', function(){
        var upperCaseKeys = {Firstname: 'jam', lastname: 'sauce'};
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(upperCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({firstname: 'jam', lastname: 'sauce'});
    });

    it('3.should be an object with lower case keys (second key is upper)', function(){
        var upperCaseKeys = {firstname: 'jam', Lastname: 'sauce'};
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(upperCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({firstname: 'jam', lastname: 'sauce'});
    });

    it('4.should be an object with lower case keys (both keys upper)', function(){
        var upperCaseKeys = {Firstname: 'jam', Lastname: 'sauce'};
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(upperCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({firstname: 'jam', lastname: 'sauce'});
    });

    it('4.should be an object with lower case keys ($ key)', function(){
        var upperCaseKeys = {Firstname: 'jam', Lastname: 'sauce', $: 'weird key'};
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(upperCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({firstname: 'jam', lastname: 'sauce', $: 'weird key'});
    });

    it('1.AE User Data Case', function(){
        var upperCaseKeys = {
            FirstName: 'Avessizzle', Email: 'guru24kb@gmail.com',
            Username: 'ask888', Website: 'https://open.spotify.com/user/ask888',
            Gender: 'M', Country: 'Canada', PostCode: 'v1l2w2', HomePhone: '1234567891'
        };
        var shouldBeLowerKeys = OnPageExtraFieldsObj.objectKeysToLowerCase(upperCaseKeys);
        expect(shouldBeLowerKeys).to.deep.eql({
            firstname: 'Avessizzle', email: 'guru24kb@gmail.com',
            username: 'ask888', website: 'https://open.spotify.com/user/ask888',
            gender: 'M', country: 'Canada', postcode: 'v1l2w2', homephone: '1234567891'
        });
    });

});

/**
 * something is broken with this test
 */
describe.skip("removeRedundantFields()", function() {
    jsdom();

    before(() => {
        AeState = new AeState({});
        OnPageExtraFieldsObj = new OnPageExtraFields(AeState, {});
        global.document = document;
        // global.window = document.defaultView;
        $ = jQuery = require('jquery');
    });

    it('Should remove 1 redundant input field from form', function(){
        var userDataLc = {
            firstname: 'Avessizzle', email: 'guru24kb@gmail.com',
            // username: 'ask888', website: 'https://open.spotify.com/user/ask888',
            // gender: 'M', country: 'Canada', postcode: 'v1l2w2', homephone: '1234567891'
        };

        var additionalDataField = jQuery(
            '<form id="additional-data-form" data-ae-register-form="email" method="post">' +
            '<label class="firstname" for="firstname">firstname</label>' +
            '<input id="firstname" name="firstname" type="text">' +
            '<label class="username" for="username">username</label>' +
            '<input id="username" name="username" type="text">' +
            '<label class="username" for="username">username</label>' +
            '<input id="username" name="username" type="text">' +
            '<label class="gender" for="gender">gender</label>' +
            '<input id="gender" name="gender" type="text">' +
            '<a href="#" class="button button-primary" id="ae-skip-extra-fields">Skip this step</a>' +
            '<input type="submit" name="wp-submit" id="ae-extra-fields-submit" class="button button-primary" value="Submit">' +
            '</form>'
        );

        global.document.append('body');
        additionalDataField.appendTo('body');

        var expectedAdditionalDataFields =
            '<form id="additional-data-form" data-ae-register-form="email" method="post">' +
            '<label class="username" for="username">username</label>' +
            '<input id="username" name="username" type="text">' +
            '<label class="username" for="username">username</label>' +
            '<input id="username" name="username" type="text">' +
            '<label class="gender" for="gender">gender</label>' +
            '<input id="gender" name="gender" type="text">' +
            '<a href="#" class="button button-primary" id="ae-skip-extra-fields">Skip this step</a>' +
            '<input type="submit" name="wp-submit" id="ae-extra-fields-submit" class="button button-primary" value="Submit">' +
            '</form>';

        OnPageExtraFieldsObj.removeRedundantFields('input', userDataLc, 10);

        // expect(stringifiedFields).to.deep.eql(stringifiedExpectedFields);
        expect(expectedAdditionalDataFields).to.deep.eql(global.document.getElementById('additional-data-form').outerHTML);

    });

});
