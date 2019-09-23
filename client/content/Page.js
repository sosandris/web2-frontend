'use strict';

var angularModule = require("content/Content");
require("content/page.html");

angularModule.config(function ($stateProvider) {
    $stateProvider.state('page', {
        url: '/page/:id',
        templateUrl: 'content/page.html',
        controller: 'PageCtrl'
    });
});

angularModule.controller('PageCtrl', function ($scope, API_SERVER_ENDPOINT, $stateParams, $http, $sce, $state) {
    $http.get(API_SERVER_ENDPOINT + '/api/v1/text/page/' + $stateParams.id).success(function (data) {
        $scope.page = data;
        $scope.page.formatted = $sce.trustAsHtml($scope.page.formatted);
    }).error(function (err) {
        $state.go('notfound');
    });
});
