function TodoCtrl($scope, filterFilter) {
    $.ajax({
    	url: "app-includes/fetchTodo.php",
    	dataType: "json",
    	async: false,
    	success: function(data){
    		$scope.items = [];
    		data.forEach(function(item, i) {
    			var done = item.done == 0 ? false : true;
    			$scope.items.push({id: i+1, text: item.task, todo: done});
    		});
    	}
    });

	// $scope.items = [
		// {id: 1, text: 'Blog.erlem.fr : rédiger un article sur AngularJS', todo: false},
		// {id: 2, text: 'Courses : acheter des oranges x6', todo: true},
		// {id: 3, text: 'Basket-Ball : appeler Marcel pour le match de samedi', todo: false},
		// {id: 4, text: 'Timéo : aller le chercher lundi soir à 19H chez Sandrine', todo: false}                
	// ];

	$scope.clearTodo = function() {
		$scope.items = _.filter($scope.items, function(item) {
			return !item.todo;
		});
	}

	$scope.addItem = function() {
		var text = $scope.itemEntry,
			order = ($scope.items.length + 1);

		$scope.items.push({text: $scope.itemEntry, todo: false, id: ($scope.items.length + 1) });
		$scope.itemEntry = '';

		$.ajax({
			url: "app-includes/todoAdd.php",
			type: "POST",
			data: {
				text: text
			},
			success: function(data){
				bindAllCheckboxes();
			}
		});
	}
        
    $scope.countItem = function() {
        return $scope.items.length;
    }
    
    $scope.okItem = function() {
        return filterFilter($scope.items, {todo:true}).length;
    }        
    
    $scope.progressbarItem = function() {
        return ($scope.okItem()*100)/$scope.items.length;
    }        

	$scope.isTodo = function(todo) {
		return (todo) ? 'success' : 'danger';
	}
}

$(function() {

	bindAllCheckboxes();

	$('#clearTodo').click(function () {
		$.ajax({
			url: "app-includes/deleteTodo.php",
			success: function(data) {
				console.log(data);
			}
		})
	});





});

function bindAllCheckboxes() {
	$('.danger, .success').find('input[type="checkbox"]').unbind('click.db').bind('click.db',(function () {
		var checked = $(this).closest(".danger, .success").attr('class'),
		text = $(this).closest('td').text();

		$.ajax({

			url: "app-includes/changeTodo.php",
			type: "post",
			data: {
				checked: checked,
				text: text
			},
			success: function(data) {
				console.log(data);
			}
		});

	}));
}
