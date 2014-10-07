angular.module('matchService', [])

	.factory('Match', function($http) {

		return {
			// get all the matches
			get : function() {
				return $http.get('/api/matches');
			},

			// save a match (pass in match data)
			save : function(matchdata) {
				return $http({
					method: 'POST',
					url: '/api/matches',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(matchdata)
				});
			},

			// destroy a match
			destroy : function(id) {
				return $http.delete('/api/matches/' + id);
			}
		}

	});