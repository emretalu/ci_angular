function userController($scope,$http) {
    $scope.users = [];
    
	$http.get('user/get_list').success(function($data){ 
		$scope.users=$data;
	});
}