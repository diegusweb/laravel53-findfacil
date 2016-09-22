(function() {

	'use strict';

	angular
		.module('main-App')
		.controller('AuthController', AuthController);


	function AuthController($auth, $state, $http, $soorScope) {

		var vm = this;

		vm.login = function() {

			var credentials = {
				email: vm.email,
				password: vm.password
			}

			// Use Satellizer's $auth service to login
			$auth.login(credentials).then(function() {
			
				return $http.get('api/authenticate/user').then(function(response) {

					// Stringify the returned data to prepare it
					// to go into local storage
					var user = JSON.stringify(response.data.user);

					// Set the stringified user data into local storage
					localStorage.setItem('user', user);

					// The user's authenticated state gets flipped to
					// true so we can now show parts of the UI that rely
					// on the user being logged in
					$rootScope.authenticated = true;

					// Putting the user's data on $rootScope allows
					// us to access it anywhere across the app
					$rootScope.currentUser = response.data.user;

					// Everything worked out so we can now redirect to
					// the users state to view the data
					$state.go('items');
				});


				// If login is successful, redirect to the users state
				$state.go('items');
			}, function(error) {
				console.log(error);
				//vm.loginError = true;
				//vm.loginErrorText = error.data.error;
			});
		}

	}

})();
