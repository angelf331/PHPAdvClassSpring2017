//app is the parameter which is reffered in html page where it will run
//ngRoute is a route to the controller which displays the info
(function(){
    'use strict';
    angular
        .module('app', ['ngRoute'])
        .config(config);

    config.$inject = ['$routeProvider'];
    
    //sets url to specified selected phone link
    function config($routeProvider){
        $routeProvider.
            when('/', {
                templateUrl: 'js/phone-list.template.html',
                controller: 'PhoneListController',
                controllerAs: 'vm'
            }).
            when('/phones/:phoneId', {
                templateUrl: 'js/phone-detail.template.html',
                controller: 'PhoneDetailController', 
                controllerAs: 'vm'
            }).
            otherwise({
               redirectTo: '/'
            });
    }
})();
