(function(){
    'use strict';
    //this is selecting the data from json file
    angular
        .module('app')
        .constant('REQUEST', {
            'Phones': './data/phones.json'
    });
})();


