$(document).ready(function(){
	$('.alert').hide();
	$('#submit').click(function(){
		memo = $('#memo').val();
		data = {
			'memo' : memo,
		};
		$.ajax({
			url: 'model/submit.php',
			type: 'post',
			data: data,
			success: function(response){
				success_ajax(response);
			}
		});
	});
});
function success_ajax(res){
	if(res=='Success'){
		$('#memo-success').show();
	}
	else{
		$('#memo-failure').show();
		console.log(res);
	}
}
function myFunction() {
  var input, filter, table, tr, td, i;
  input = $("#myInput");
  filter = input.val().toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}