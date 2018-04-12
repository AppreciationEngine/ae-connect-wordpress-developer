/**
* https://tomelliott.com/javascript-ajax/javascript-function-check-uncheck-checkboxes
*/

module.exports = {
     checkAll: function(formaction, checktoggle) {
       var checkboxes = new Array();
       checkboxes = document.querySelector("form[action='options.php']").getElementsByClassName("ae-extra-fields-enable");
       for (var i=0; i<checkboxes.length; i++) {
           if (checkboxes[i].type == 'checkbox') {
             checkboxes[i].checked = checktoggle;
           }
       }
       document.getElementById("submit").click();
     },
};
