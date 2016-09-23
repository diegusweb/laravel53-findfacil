(function() {

	'use strict';

	angular
		.module('main-App')
		.controller('AuthController', AuthController);


	function AuthController($auth, $state) {

		var vm = this;

		vm.login = function() {
console.log("sd");
			var credentials = {
				email: vm.email,
				password: vm.password
			}

			// Use Satellizer's $auth service to login
			$auth.login(credentials).then(function(data) {

				// If login is successful, redirect to the users state
				$state.go('items');
			}, function(error) {
				console.log(error);
			});
		}

	}

})();
