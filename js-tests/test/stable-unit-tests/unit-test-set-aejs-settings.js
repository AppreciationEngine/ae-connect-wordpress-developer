var jsdom = require('mocha-jsdom');

AeSettings = require("../../../public/js/set-aejs-settings.js");
AeState = require("../../../public/js/ae-state.js");

const expect = require( "chai" ).expect;

describe("handleInvalidEmptyOptinsObject()", function() {

    before(() => {

        AeState = new AeState({});
        AeSettingsObj = new AeSettings(AeState);

    });

    it('1.Should be empty [] label is false', function(){
        var empty_optins = [{label: false, segmentid: false, checked: false}];
        var shouldBeEmpty = AeSettingsObj.handleInvalidEmptyOptinsArray(empty_optins);
        expect(shouldBeEmpty).to.deep.eql([]);
    });

    it('2.Should be empty [], label is a blank string', function(){
        var empty_optins = [{label: '', segmentid: 0, checked: false}];
        var shouldBeEmpty = AeSettingsObj.handleInvalidEmptyOptinsArray(empty_optins);
        expect(shouldBeEmpty).to.deep.eql([]);
    });

    it('Should be return original array', function(){
        var full_optins = [{label: 'A beautiful game', segmentid: 2345, checked: false}];
        var shouldBeEmpty = AeSettingsObj.handleInvalidEmptyOptinsArray(full_optins);
        expect(shouldBeEmpty).to.deep.eql(full_optins);
    });

});
