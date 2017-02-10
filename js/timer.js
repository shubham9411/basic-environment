$(document).ready(function(){
	var microsecond_counter = 0;
	var second_counter = 1;
	var minute_counter = 1;
	var hour_counter = 1;
	var day_counter = 1;
	function microsec_inc(){
		if(microsecond_counter == 100) {
			microsecond_counter=0;
			second_inc();
		}
		$('#microsecond').html(microsecond_counter);
		microsecond_counter++;
		setTimeout(microsec_inc,10);
	}
	function second_inc(){
		if(second_counter == 60) {
			second_counter=0;
			minute_inc();
		}
		$('#second').html(second_counter);
		second_counter++;
	}
	function minute_inc(){
		if(minute_counter == 60) {
			minute_counter=0;
		}
		$('#minute').html(minute_counter);
		minute_counter++;
	}
	function hour_inc(){
		if(hour_counter == 24) {
			hour_counter=0;
			$('body').html('<div class="container well jumbotron text-center"><h1>1 day don\'t be stupid</h1></div>');
		}
		$('#hour').html(hour_counter);
		hour_counter++;
	}
	setTimeout(microsec_inc,10);
	$('#submit-task').click(function(){
		if($('#task').val()==''){
			alert('Task value needed');
			return;
		}
		$('#task-form').submit();
	});
	$('#timer-submit').click(function(){
		data = {
			'task' : $('#task_sub').val(),
			'microsecond' : parseInt($('#microsecond').html()),
			'second' : parseInt($('#second').html()),
			'minute' : parseInt($('#minute').html()),
			'hour' : parseInt($('#hour').html()),
		};
		console.log(data);
		$.ajax({
			url: 'model/submit.php',
			type: 'post',
			data: data,
			success: function(response){
				alert(response);
				$('#timer-form').submit();
			}
		});
	});
});