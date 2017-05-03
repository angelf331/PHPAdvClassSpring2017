(function(){
    'use strict';
    angular
        .module('app')
        .factory('PhonesService', PhonesService);

    PhonesService.$inject = ['$http', 'REQUEST'];
    //gets the phone form the controller and add parameter to the url
    function PhonesService($http, REQUEST){
        
        var url = REQUEST.Phones;
        var service = {
            'getPhones': getPhones,
            'findPhone': findPhone
        };
        return service;
        //gets the url of the phone thats been clicked
        function getPhones(){
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);
            //returns phone data if any 
            function getPhonesComplete(response){
                return response.data;
            }
            //returns error if phone not found
            function getPhonesFailed(error){
                return [];
            }
        }
        function findPhone(id){
            return getPhones()
                .then(function(data){
                    return findPhoneComplete(data);
             });
             //retrievs data from each phone
            function findPhoneComplete(data){
                var results = {};
                
                angular.forEach(data, function (value, key){
                    if (!results.length){
                        if (value.hasOwnProperty('id') && value.id === id){
                            results = angular.copy(value);
                        }
                    }
                }, results);
                
                return results;
            }
        }
    }
    
})();

