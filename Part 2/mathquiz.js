(function($){

	var correct_answer = 0;
	var quiz_on = false;
	var num_right = 0;

	$button		= $("#timerbutton");
	$question	= $("#quizquestion");
	$answer		= $("#quizanswer");
	$form		= $("#quizform");

	function generate_problem(){
		// generate 2 random numbers
		var num1 = Math.floor(Math.random() * 13);
		var num2 = Math.floor(Math.random() * 13);

		// randomly generate the operator
		var operators=["+", "-", "*", "/"];
		var numchoices = 4;
		if (num1 % num2 != 0){
			// I'm not about to make people divide things that don't go into each other evenly
			numchoices = 3;
		}
		var operation_choice_num = Math.floor(Math.random()*numchoices);
		var operator = operators[operation_choice_num];
		// give them the problem
		$question.html(num1 + operator + num2 + "=");

		// now find the right answer
		correct_answer = 0;
		if (operation_choice_num == 0){
			correct_answer = num1+num2;
		}else if (operation_choice_num == 1){
			correct_answer = num1-num2;
		}else if (operation_choice_num == 2){
			correct_answer = num1*num2;
		}else{
			correct_answer = num1/num2;
		}
	} // end generate_problem;

	function start_timer(){
		quiz_on = true;
		$button.html("30");
		var second_count = 29;
		var timer_int = setInterval(function(){ 
			$button.html(second_count);
			second_count--;
			// do the following once time runs out
			if (second_count == -1){
				if (num_right == 1){
					$question.html("You got 1 problem correct.");
				}else{
					$question.html("You got " + num_right + " problems correct.");
				}
				$button.html("Start!");
				$answer.blur();
				num_right = 0;
				correct_answer = null;
				clearInterval(timer_int);
				quiz_on = false;
			}
		}, 1000);
	} // end start_timer

	$button.on("click", function() {
		if (!quiz_on){
			start_timer();
			generate_problem();
		}else{
			generate_problem();
		}

		$answer.val("");
		$answer.focus();
		return false;
	});

	$("#quizform").on("submit", function(){
		if (quiz_on && correct_answer == $answer.val()){
			generate_problem();
			$answer.val("");
			num_right++;
		}
		return false;
	});

})(jQuery);