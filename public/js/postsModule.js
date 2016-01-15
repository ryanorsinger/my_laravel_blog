(function() {
    "use strict";
    
    var app = angular.module('posts', []);
    
    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller('PostsController', ['$log', '$scope', '$http', function($log, $scope, $http) {
        $http.get('/posts').then(function(response) {
            $log.debug(response);
        }, function(response) {
            $log.warning('Oh noes!');
            $log.debug(response);
        })
    }])
})();
