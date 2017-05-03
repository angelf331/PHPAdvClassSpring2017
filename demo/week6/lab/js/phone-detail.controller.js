(function(){
    'use strict';
    angular
        .module('app')
        .controller('PhoneDetailController', PhoneDetailController);
    
    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];
    
    //gets the phone id an displays the information in the html
    function PhoneDetailController($routeParams, PhonesService){
        var vm = this;
        
        vm.phone = {};
        var id = $routeParams.phoneId;
        
        activate();
        
        function activate(){
            PhonesService.findPhone(id).then(function(response){
               vm.phone = response; 
            });
        }
    }
})();


