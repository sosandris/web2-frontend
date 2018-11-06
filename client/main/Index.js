'use strict';

require("main/404.html")
require("main/test.html")
var angularModule = require("main/Main")



angularModule .config(function ($stateProvider) {
    $stateProvider.state('index', {
        url: '/',
        templateUrl: 'main/index.html',
        controller: 'MainCtrl'
    });
    $stateProvider.state('index-i', {
        url: '/index',
        templateUrl: 'main/index.html',
        controller: 'MainCtrl'
    });

});

angularModule.config(function ($stateProvider) {
    $stateProvider.state('testpage', {
        url: '/testpage',
        templateUrl: 'main/test.html'
    });
});


angularModule.controller('MainCtrl', function ($scope, $http, API_SERVER_ENDPOINT, $sce, $timeout) {

    // $http.get(API_SERVER_ENDPOINT + '/api/v1/text/page/lead').success(function (data) {
    //     $scope.lead = data;
    // });

    $http.get(API_SERVER_ENDPOINT + '/api/v1/text/news/current').success(function (data) {
        $scope.news = data;
    });
    $http.get(API_SERVER_ENDPOINT + '/api/v1/episode/next').success(function (data) {
        $scope.next = data;
    });
    $http.get(API_SERVER_ENDPOINT + '/api/v1/episode/last').success(function (data) {
        $scope.last = data;
    });
    $http.get(API_SERVER_ENDPOINT + '/api/v1/episode/lastWeek').success(function (data) {
        $scope.lastWeek = data;
    });

});
