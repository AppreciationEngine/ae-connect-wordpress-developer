var jsdom = require('mocha-jsdom');
// global.$ = global.jQuery = require('jquery');

localStorage = require('mock-local-storage');

AeUtilities = require("../../../public/js/ae-utilities.js");
AeUserHandling = require("../../../public/js/user-handler.js");
AeState = require("../../../public/js/ae-state.js");

const expect = require( "chai" ).expect;
Utilities = new AeUtilities();

describe("isEmpty()", function() {

    it('Should be true because obj is empty', function(){
        var shouldBeTrue = Utilities.isEmpty({});
        expect(shouldBeTrue).to.eql(true);
    });

    it('Should be false because obj has a property with a value of null', function(){
        var shouldBeFalse = Utilities.isEmpty({prop: null});
        expect(shouldBeFalse).to.eql(false);
    });

    it('Should be false because obj has a property with a string value', function(){
        var shouldBeFalse = Utilities.isEmpty({prop: 'awesome'});
        expect(shouldBeFalse).to.eql(false);
    });

});

describe("areRequiredFields()", function() {

    it('Should be false because req_fields obj is empty', function(){
        var shouldBeFalse = Utilities.areRequiredFields({});
        expect(shouldBeFalse).to.eql(false);
    });

    it('1.Should be false because req_fields obj has fields but none are required.', function(){
        var extra_fields = {bio: {label: '', required: false}}
        var shouldBeFalse = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeFalse).to.eql(false);
    });

    it('2.Should be false because req_fields obj has fields but none are required.', function(){
        var extra_fields = {bio: {label: '', required: false}, firstname: {label: '', required: false}}
        var shouldBeFalse = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeFalse).to.eql(false);
    });

    it('3.Should be false because req_fields obj has fields but none are required.', function(){
        var extra_fields = {bio: {label: '', required: false}, firstname: {label: 'Fliberty', required: false}}
        var shouldBeFalse = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeFalse).to.eql(false);
    });

    it('1.Should be true because req_fields obj has required fields', function(){
        var extra_fields = {bio: {label: '', required: true},}
        var shouldBeTrue = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeTrue).to.eql(true);
    });

    it('2.Should be true because req_fields obj has required fields', function(){
        var extra_fields = {bio: {label: '', required: true}, firstname: {label: '', required: true}}
        var shouldBeTrue = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeTrue).to.eql(true);
    });

    it('3.Should be true because req_fields obj has required fields', function(){
        var extra_fields = {bio: {label: '', required: false}, firstname: {label: '', required: true}}
        var shouldBeTrue = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeTrue).to.eql(true);
    });

    it('4.Should be true because req_fields obj has required fields', function(){
        var extra_fields = {bio: {label: '', required: true}, firstname: {label: '', required: false}}
        var shouldBeTrue = Utilities.areRequiredFields(extra_fields);
        expect(shouldBeTrue).to.eql(true);
    });

});

describe.skip("resolveEmailCollisions()", function() {
    jsdom();
    before(() => {
        // global.document = document;
        // global.window = document.defaultView;
        $ = jQuery = require('jquery');
        AeState = new AeState({});
        UserHandler = new AeUserHandling(AeState);
    });

    it('Should be true because obj is empty', function(){
        sessionStorage.setItem('email_collision_resolved', {});
        Utilities.resolveEmailCollisions(UserHandler);
        expect(true).to.eql(false);
    });

});
