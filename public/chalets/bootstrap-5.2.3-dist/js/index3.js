
$(function(){
  $("#step_speed_a").click(function (e) { 
    if ( $("#speed_28_1").is(':checked') || $("#speed_28_2").is(':checked') || $("#speed_27_1").is(':checked') || $("#speed_27_2").is(':checked') || $("#speed_41_1").is(':checked') || $("#speed_41_2").is(':checked') || $("#speed_me").is(':checked') ) {
      $(this).attr('href',"#mws");
                               if ( $("#speed_28_1").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(1);  
              $('#sc').val(1);
              $('#msahh').val(350);
              $('#gest').val(33);
              $('#flor').val(1);
              $('#s_w').val(23);
              $('#s_m').val(10);
              }else if( $("#speed_28_2").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(2);  
              $('#sc').val(2);
              $('#msahh').val(550);
              $('#gest').val(43);
              $('#flor').val(1);
              $('#s_w').val(28);
              $('#s_m').val(15);                                
              }
           else if ( $("#speed_27_1").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(1);  
              $('#sc').val(1);
              $('#msahh').val(1300);
              $('#gest').val(45);
              $('#flor').val(1);
              $('#s_w').val(30);
              $('#s_m').val(15);
              }else if( $("#speed_27_2").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(2);  
              $('#sc').val(2);
              $('#msahh').val(3000);
              $('#gest').val(120);
              $('#flor').val(1);
              $('#s_w').val(70);
              $('#s_m').val(50);                                
              }                         
           else if ( $("#speed_41_1").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(2);  
              $('#sc').val(1);
              $('#msahh').val(600);
              $('#gest').val(30);
              $('#flor').val(1);
              $('#s_w').val(25);
              $('#s_m').val(15);
              }else if( $("#speed_41_2").is(':checked')) {
              $('#step_4').show();
              $('#link_sys_new').hide();    
              $('#rooms').val(4);  
              $('#sc').val(2);
              $('#msahh').val(2000);
              $('#gest').val(75);
              $('#flor').val(1);
              $('#s_w').val(40);
              $('#s_m').val(30);                                
              }                         
                                       else{
              if($("#radio2").is(':checked')){
               $('#speed_div').show();   
               $('#ty_28').show();
               $('#ty_27').hide();    
               $('#ty_41').hide();    
              }else if($("#radio3").is(':checked')){
               $('#speed_div').show();   
               $('#ty_27').show();
               $('#ty_28').hide();    
               $('#ty_41').hide();                                   
              }else if($("#radio5").is(':checked')){
              $('#speed_div').show();   
               $('#ty_41').show();
               $('#ty_28').hide();    
               $('#ty_27').hide(); 
              }else{
              $('#speed_div').hide();  
              $('#step_3').show();
              $('#link_sys_new').hide();  
              }
              
              
              
              $('#step_1').show();
              $('#step_12_link').hide();    

              
                                          
              }
    } else {
        $(this).attr('href',"#speed");
      swal({
          title: "من فضلك اختر احد اختصارات التسجيل",
          text: "", 
          icon: "error",
          button: "موافق"
        });
      // e.preventDefault();
    }
  });
});

   
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    document.getElementById("bu_show").innerHTML = "اخفاء خيارات البحث";                        
    
    } else {
        x.style.display = "none";
            document.getElementById("bu_show").innerHTML = "اظهار خيارات البحث";
            
            
    }
}



      function myFunction2() {
    var x = document.getElementById("myDIV2");
    if (x.style.display === "none") {
        x.style.display = "block";
    document.getElementById("bu_show2").innerHTML = "اخفاء خيارات الغرف والضيوف";
    } else {
        x.style.display = "none";
        document.getElementById("bu_show2").innerHTML = " اظهار خيارات الغرف والضيوف والاقسام والمساحة";
    }
}




function yesnoCheck() {
if (document.getElementById('radio12').checked) {
document.getElementById('b1').style.display = 'block';
document.getElementById('b2').style.display = 'none';
document.getElementById('b3').style.display = 'none';
document.getElementById('b4').style.display = 'none';
document.getElementById('b5').style.display = 'none';
document.getElementById('b6').style.display = 'none';        
}
else document.getElementById('b1').style.display = 'none';

}

function yesnoCheck2() {
if (document.getElementById('radio13').checked) {
document.getElementById('b2').style.display = 'block';
document.getElementById('b1').style.display = 'none';
document.getElementById('b3').style.display = 'none';
document.getElementById('b4').style.display = 'none';
document.getElementById('b5').style.display = 'none';
document.getElementById('b6').style.display = 'none';
}
else document.getElementById('b2').style.display = 'none';

}

function yesnoCheck3() {
if (document.getElementById('radio14').checked) {
document.getElementById('b3').style.display = 'block';
document.getElementById('b1').style.display = 'none';
document.getElementById('b2').style.display = 'none';
document.getElementById('b4').style.display = 'none';
document.getElementById('b5').style.display = 'none';
document.getElementById('b6').style.display = 'none';
}
else document.getElementById('b3').style.display = 'none';

}


function yesnoCheck4() {
if (document.getElementById('radio15').checked) {
document.getElementById('b4').style.display = 'block';
document.getElementById('b1').style.display = 'none';
document.getElementById('b3').style.display = 'none';
document.getElementById('b2').style.display = 'none';
document.getElementById('b5').style.display = 'none';
document.getElementById('b6').style.display = 'none';
}
else document.getElementById('b4').style.display = 'none';

}


function yesnoCheck5() {
if (document.getElementById('radio16').checked) {
document.getElementById('b5').style.display = 'block';
document.getElementById('b1').style.display = 'none';
document.getElementById('b3').style.display = 'none';
document.getElementById('b4').style.display = 'none';
document.getElementById('b2').style.display = 'none';
document.getElementById('b6').style.display = 'none';
}
else document.getElementById('b5').style.display = 'none';

}


function yesnoCheck6() {
if (document.getElementById('radio17').checked) {
document.getElementById('b6').style.display = 'block';
document.getElementById('b1').style.display = 'none';
document.getElementById('b3').style.display = 'none';
document.getElementById('b4').style.display = 'none';
document.getElementById('b5').style.display = 'none';
document.getElementById('b2').style.display = 'none';
}
else document.getElementById('b6').style.display = 'none';

}



$(window).on('load',function(){
$('.main_banrs').liMarquee({
circular:true, 
startShow:true
});
})


document.addEventListener('DOMContentLoaded', function() {

var multipleDefault = new Choices(document.getElementById('choices-multiple-groups'));


var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
});

var resetMultiple = new Choices('#reset-multiple', {
removeItemButton: true,
});
});



let stories = new Zuck('stories',{
skin: "snapgram",
avatars: true,
list: false,
autoFullScreen: false,
cubeEffect: true,
paginationArrows: false,
backButton: true, 
localStorage: true,
rtl:true,
stories: [ 
        ],
callbacks:  {


onView (storyId) {
}


},
language: { // if you need to translate :)
unmute: 'Touch to unmute',
keyboardTip: 'Press space to see next',
visitLink: 'Visit link',
time: {
ago:'مضت', 
hour:'ساعة', 
hours:'ساعات', 
minute:'دقيقة', 
minutes:'دقائق', 
fromnow: 'from now', 
seconds:'ثواني', 
yesterday: 'الامس', 
tomorrow: 'غدا', 
days:'أيام'
}
}
});

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-68888140-1">
    
    </script>
   
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-68888140-1');
    


