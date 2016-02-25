$("#menu-button").click(function() {
	
	$("nav").slideToggle(200);
	
});

//When the "add task" button is clicked
$("#add-task").click(function() {

	//Count how many tasks exist
	var countTasks = $(".task").length;
	var taskNum = countTasks + 1;
	
	//Append a new task with appropriate numbers
	$("#tasks").append(
		"<div class='task'>" +
		"<input class='task-name' type='text' name='task-name-" + taskNum + "' value='' />\r\n" +
		"<input class='task-rate' type='text' name='task-rate-" + taskNum + "' value='0' />\r\n" +
		"<span class='task-cost'>$0</span>\r\n" +
		"</div>\r\n");
		console.log("Add Task...");
});
	
//When a field is filled outerHeight
	//Update the total cost