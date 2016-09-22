(function() {

	'use strict';

	angular
		.module('main-App', ['ui.router', 'satellizer','angularUtils.directives.dirPagination'])
		.config(function($stateProvider, $urlRouterProvider, $authProvider) {


			// Satellizer configuration that specifies which API
			// route the JWT should be retrieved from
			$authProvider.loginUrl = '/api/v1/authenticate';

			// Redirect to the auth state if any other states
			// are requested other than users
			$urlRouterProvider.otherwise('/auth');

			$stateProvider
				.state('auth', {
					url: '/auth',
					templateUrl: 'templates/authView.html',
					controller: 'AuthController as auth'
				})
				.state('items', {
					url: '/items',
					templateUrl: 'templates/items.html',
					controller: 'ItemsController as item'
				});
		});
})();
