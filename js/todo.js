// // Create a "close" button and append it to each list item

// $(function(){
//   var span = $("<button></button>").text("\u00D7");
//   span.addClass('close');
//   $('LI').each(function(i,val){
//     $(this).append(span);
//   })
// });

// // Click on a close button to hide the current list item

// $(function(){
//   $('.close').click(function(){
//     close = $(this).parent();
//     close.css('display','none');
//   });
// });

// // Add a "checked" symbol when clicking on a list item

// $(function(){
//   $('li').click(function(){
//     $(this).toggleClass('checked');
//   });
// });

// Create a new list item when clicking on the "Add" button

function todoTask(value = $('#myInput').val()){
    if(value === ''){
      alert('You must write Somthing');
      return;
    }
    var li = $('<li></li>').text(value);
    $('#myUL').append(li);
    $('#myInput').val('');
    var span = $("<button></button>").text("\u00D7");
    span.addClass('close');
    li.append(span);
    close = $('.close');
    $('.close').click(function(){
      close = $(this).parent();
      close.css('display','none');
    });
    $('li').click(function(){
      $(this).toggleClass('checked');
    });
}

$(document).ready(function(){
  data = {
    'action' : 'tasks_load',
  };
  $.ajax({
    url: 'model/todo.php',
    type: 'post',
    data: data,
    dataType: 'json',
    success: function(response){
      console.log(response);
    }
  });
});