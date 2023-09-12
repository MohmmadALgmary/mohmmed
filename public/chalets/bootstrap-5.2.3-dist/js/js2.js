
$(document).ready(function(){
    $('#getUser').on('click',function(){
        var user_id = $('#user_id').val();
        $.ajax({
            type:'POST',
            url:'https://onaizah.alhgz.com/g.php',
            dataType: "json",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.name);
                    $('#userEmail').text(data.result.email);
                    $('#userPhone').text(data.result.phone);
                    $('#userCreated').text(data.result.created);
                    $('.user-content').slideDown();
                }else{
                    $('.user-content').slideUp();
                    alert("User not found...");
                } 
            }
        });
    });
    
    
        $('#getUser2').on('click',function(){
        var user_id = $('#user_id').val();
        $.ajax({
            type:'POST',
            url:'https://onaizah.alhgz.com/g.php',
            dataType: "json",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.name);
                    $('#userEmail').text(data.result.email);
                    $('#userPhone').text(data.result.phone);
                    $('#userCreated').text(data.result.created);
                    $('.user-content').slideDown();
                }else{
                    $('.user-content').slideUp();
                    alert("User not found...");
                } 
            }
        });
    });
    
    
            $('#book_now').on('click',function(){
        var user_id = $('#user_id').val();
        var p_show_id = $('#place_ac').val();
        var p_id = $('#pp_id').val();
         var p_url = $('#pp_link').val();
        $.ajax({
            type:'POST',
            url:'https://onaizah.alhgz.com/g.php',
            dataType: "json",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.name);
                    $('#userEmail').text(data.result.email);
                    $('#userPhone').text(data.result.phone);
                    $('#userCreated').text(data.result.created);
                    $('.book_now_d').slideDown();
                }else{
                    $('.book_now_d').slideUp();
                    alert("User not found...");
                } 
            }
        });
    });
    
    

    
});    
    
    

$(function(){
    $('.form-search').on('submit',function(){return false;});
    $('.form-search .myButton').on('click', function(e){
        var query = $.trim($(this).prevAll('.search-query').val()).toLowerCase();
        $('div.staff-container .bold').each(function(){
             var $this = $(this);
             if($this.text().toLowerCase().indexOf(query) === -1)
                 $this.closest('div.staff-container').fadeOut();
            else $this.closest('div.staff-container').fadeIn();
        });
    });
    
    
    $('imgg').attr('src','https://icons.iconarchive.com/icons/artua/dragon-soft/256/User-icon.png');
    });//]]> 
    


$(document).ready(function(){
                  $('#b_mosabqa').on('click',function(){
               $('.book_now_d_mosabqa').slideDown();
   
    });
    
});    

$(document).ready(function(){
                  $('#b_mosabqa_no').on('click',function(){
               $('.book_now_d_mosabqa').slideUp();
    });
    
});  
    
    
$(function(){
    $("#datepicker1").datepicker();
});
$(function(){
    $("#datepicker2").datepicker({
        dateFormat: "yy-mm-dd"
    });
});
$(function(){
    $("#datepicker3").datepicker({
		dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
    });
});
$(function(){
    $("#datepicker4").datepicker({
		dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        minDate: 0,
        maxDate: "+1M +5D"
    });
});

$( function() {
  var from = $( "#fromDate" )
	  .datepicker({
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		changeYear: true,
		        minDate: 0,
        maxDate: "+4M +1D"
	  })
	  .on( "change", function() {
		to.datepicker( "option", "minDate", getDate( this ) );
	  }),
	to = $( "#toDate" ).datepicker({
	  dateFormat: "yy-mm-dd",
	  changeMonth: true
	}) 
	.on( "change", function() {
	  from.datepicker( "option", "maxDate", getDate( this ) );
	});

  function getDate( element ) {
	var date;
	var dateFormat = "yy-mm-dd";
	try {
	  date = $.datepicker.parseDate( dateFormat, element.value );
	} catch( error ) {
	  date = null;
	}

	return date;
  }
});

// tell the embed parent frame the height of the content
if (window.parent && window.parent.parent){
  window.parent.parent.postMessage(["resultsFrame", {
    height: document.body.getBoundingClientRect().height,
    slug: "XjgR2"
  }], "*")
}




    
    function show_hide(tttt) {
      var x = document.getElementById(tttt);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    
    
    function show_hide_link(tttt,yyyy) {
      var x = document.getElementById(tttt);
      var y = document.getElementById(yyyy);
    
        x.style.display = "block";
        y.style.display = "none";
      
    }
    
    
    
    function show_hide_pls(tttt,id_b,text_show,text_hid) {
      var x = document.getElementById(tttt);
      if (x.style.display === "none") {
        x.style.display = "block";
    document.getElementById(id_b).innerHTML =text_hid;    
      } else {
        x.style.display = "none";
    document.getElementById(id_b).innerHTML =text_show;
      }
    }
    
    
    
    /*
     allbom img
    */
    
    
    
    /*
    finsh allbom img
    */
    
    
    

    $(document).ready(function(){
                      $('#b_2').on('click',function(){
                 var user_id ='cama1';
          var p_show_id = $('#place_ac_2').val();
    //        var p_id = $('#pp_id').val();
      //       var p_url = $('#pp_link').val();
            $.ajax({
                type:'POST',
                url:'https://Riyadh.alhgz.com/g25.php',
                dataType: 'json',
                data:{user_id:user_id,p_show_id:p_show_id},
                success:function(data){
                    if(data.status == 'ok'){
                        $('#res_b_2').html(data.result.name);
    
                        $('.book_now_d_2').slideDown();
                    }else{
                        $('.book_now_d_2').slideUp();
                        alert('User not found...');
                    } 
                }
            });
        });
        
    });    
        
        
    
    

    $(document).ready(function(){
                      $('#b_4').on('click',function(){
                 var user_id ='Loul.sa';
          var p_show_id = $('#place_ac_4').val();
    //        var p_id = $('#pp_id').val();
      //       var p_url = $('#pp_link').val();
            $.ajax({
                type:'POST',
                url:'https://Riyadh.alhgz.com/g25.php',
                dataType: 'json',
                data:{user_id:user_id,p_show_id:p_show_id},
                success:function(data){
                    if(data.status == 'ok'){
                        $('#res_b_4').html(data.result.name);
    
                        $('.book_now_d_4').slideDown();
                    }else{
                        $('.book_now_d_4').slideUp();
                        alert('User not found...');
                    } 
                }
            });
        });
        
    });    
        
     
$(document).ready(function(){
  $('#b_5').on('click',function(){
var user_id ='YIC-261058';
var p_show_id = $('#place_ac_5').val();
//        var p_id = $('#pp_id').val();
//       var p_url = $('#pp_link').val();
$.ajax({
type:'POST',
url:'https://Riyadh.alhgz.com/g25.php',
dataType: 'json',
data:{user_id:user_id,p_show_id:p_show_id},
success:function(data){
if(data.status == 'ok'){
    $('#res_b_5').html(data.result.name);

    $('.book_now_d_5').slideDown();
}else{
    $('.book_now_d_5').slideUp();
    alert('User not found...');
} 
}
});
});

});    

 
$(document).ready(function(){
  $('#b_10').on('click',function(){
var user_id ='SEH-589771';
var p_show_id = $('#place_ac_10').val();
//        var p_id = $('#pp_id').val();
//       var p_url = $('#pp_link').val();
$.ajax({
type:'POST',
url:'https://Riyadh.alhgz.com/g25.php',
dataType: 'json',
data:{user_id:user_id,p_show_id:p_show_id},
success:function(data){
if(data.status == 'ok'){
    $('#res_b_10').html(data.result.name);

    $('.book_now_d_10').slideDown();
}else{
    $('.book_now_d_10').slideUp();
    alert('User not found...');
} 
}
});
});

});    


$(document).ready(function(){
  $('#b_11').on('click',function(){
var user_id ='FVS-358976';
var p_show_id = $('#place_ac_11').val();
//        var p_id = $('#pp_id').val();
//       var p_url = $('#pp_link').val();
$.ajax({
type:'POST',
url:'https://Riyadh.alhgz.com/g25.php',
dataType: 'json',
data:{user_id:user_id,p_show_id:p_show_id},
success:function(data){
if(data.status == 'ok'){
    $('#res_b_11').html(data.result.name);

    $('.book_now_d_11').slideDown();
}else{
    $('.book_now_d_11').slideUp();
    alert('User not found...');
} 
}
});
});

});    



$(document).ready(function(){
                  $('#b_13').on('click',function(){
             var user_id ='QQT-616737';
      var p_show_id = $('#place_ac_13').val();
//        var p_id = $('#pp_id').val();
  //       var p_url = $('#pp_link').val();
        $.ajax({
            type:'POST',
            url:'https://Riyadh.alhgz.com/g25.php',
            dataType: 'json',
            data:{user_id:user_id,p_show_id:p_show_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#res_b_13').html(data.result.name);

                    $('.book_now_d_13').slideDown();
                }else{
                    $('.book_now_d_13').slideUp();
                    alert('User not found...');
                } 
            }
        });
    });
    
});    
    
    

    
                 
    