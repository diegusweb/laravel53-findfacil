(function() {

	'use strict';

	angular
		.module('main-App')
		.controller('ItemsController', ItemsController);

	function ItemsController($http,$auth, $rootScope, $state, dataFactory) {

		var vm = this;

		vm.users = [];
		vm.error;
        vm.libraryTemp = {};
        vm.totalItems = 0;

		vm.logout = function() {

			$auth.logout().then(function() {

				// Remove the authenticated user from local storage
				localStorage.removeItem('user');

				// Flip authenticated to false so that we no longer
				// show UI elements dependant on the user being logged in
				$rootScope.authenticated = false;

				// Remove the current user info from rootscope
				$rootScope.currentUser = null;

				// Redirect to auth (necessary for Satellizer 0.12.5+)
				$state.go('auth');
			});
}
        /*$http.get('api/v1/items').success(function(users) {
            vm.users = users.data;
            vm.totalItems = users.total;

        }).error(function(error) {
            vm.error = error;
        });*/

        getResultsPage(1);

        function getResultsPage(pageNumber) {
          if(! $.isEmptyObject(vm.libraryTemp)){
              dataFactory.httpRequest('/api/v1/items?search='+vm.searchText+'&page='+pageNumber).then(function(data) {
                vm.users = data.data;
                vm.totalItems = data.total;
              });
          }else{
            dataFactory.httpRequest('/api/v1/items?page='+pageNumber).then(function(data) {
              vm.users = data.data;
              vm.totalItems = data.total;
            });
          }
      };

      vm.pageChanged = function(newPage) {
        getResultsPage(newPage);
      };

	}

})();
