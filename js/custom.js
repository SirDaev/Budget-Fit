$("#menu-button").click(function() {
	
	$("nav").slideToggle(200);
	
});

//When the "add task" button is clicked...
$("#add-task").click(function() {

	//Count how many tasks exist
	var countTasks = $(".task").length;
	var taskNum = countTasks + 1;
	
	//Append a new task with appropriate numbers
	$("#tasks").append(
		"<div class='task'>" +
		"<input class='task-name' type='text' name='task-name-" + taskNum + "' value='New Task' />\r\n" +
		"<input class='task-rate' type='text' name='task-rate-" + taskNum + "' value='0' />\r\n" +
		"<input class='task-hours' type='text' name='task-hours-" + taskNum + "' value='0' />\r\n" +
		"<span class='task-cost'>$0</span>\r\n" +
		"</div>\r\n");
});

//When a task rate is changed...
$("form#budget-calculator").on("change paste keyup", "input.task-rate", function() {
	
	//1. Calc the cost for that task
	var taskSum = $(this).val() * $(this).siblings("input.task-hours").val();
	$(this).siblings(".task-cost").text("$" + taskSum);
	
	//2. Calc the total cost
	var totalSum = 0;
	$('.task').each(function() {
		var oneTaskSum = $(this).children(".task-rate").val() * $(this).children(".task-hours").val();
		totalSum += oneTaskSum;
		
	});
	
	//3. Output the total cost
	$("#total-cost").text("$" + totalSum)
	
});

//When a task's hours is changed...
$("form#budget-calculator").on("change paste keyup", "input.task-hours", function() {
	
	//1. Calc the cost for that task
	var taskSum = $(this).val() * $(this).siblings("input.task-rate").val();
	$(this).siblings(".task-cost").text("$" + taskSum);
	
	//2. Calc the total cost
	var totalSum = 0;
	$('.task').each(function() {
		var oneTaskSum = $(this).children(".task-rate").val() * $(this).children(".task-hours").val();
		totalSum += oneTaskSum;
		
	});
	
	//3. Output the total cost
	$("#total-cost").text("$" + totalSum)
	
});