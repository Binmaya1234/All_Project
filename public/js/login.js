$('.otp').hide();
$('.loginBtn').hide();
$('.rotpBtn').hide();
function sendOtp() { //alert("1");
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //var mob_regex = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
    var  mob_regex = /^(0|91)?[6-9][0-9]{9}$/;
    var email_mobile =$('#mobile').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if($('#mobile').val()=="") { //alert("2");
       $("#mobilecheck").html("**Please enter valid Email/Mobile..");
    }else if(regex.test(email_mobile)){ // alert("3");
          $("#mobilecheck").hide(); 
          $.ajax( {
            url:'sendOtp',
            type:'post',
            data: {'email': $('#mobile').val()},
            success:function(data) {
                if(data.user !=2){
                    millis = 100000;
                    timerTodisplay();
                    $('.otp').show();
                    $('.loginBtn').show();
                    $('.send-otp').hide();
                    $("#mobilecheck").hide();
                    $("#mobilecheck1").hide();
                    $("#otp").attr('required', 'required');
                }else{ 
                     $("#mobilecheck1").html("**Please Enter valid Email/Mobile..");
                     $('.otp').hide();
                     $('.loginBtn').hide();
                     $('.send-otp').show();
                    // $("#otp").prop('required',false);
                    }
            },error:function () { console.log('error'); }
        });
    }else if(mob_regex.test(email_mobile)){// alert("4");
        $("#mobilecheck").hide(); 
        $.ajax( {
          url:'sendOtp',
          type:'post',
          data: {'email': $('#mobile').val()},
          success:function(data) {  
              if(data.user !=2){  
                  millis = 100000;
                  timerTodisplay();
                  $('.otp').show();
                  $('.loginBtn').show();
                  $('.send-otp').hide();
                  $("#mobilecheck").hide();
                  $("#mobilecheck1").hide();
                  $("#otp").attr('required', 'required');
              }else{  
                  $("#mobilecheck1").html("**Please enter valid Email/Mobile..");
                  $('.otp').hide();
                  $('.loginBtn').hide();
                  $('.send-otp').show();
                 // $("#otp").prop('required',false);
              }
          },error:function () { console.log('error'); }
      });
    }else{ //alert("4");
          $("#mobilecheck").html("**Please enter valid Email/Mobile..");
    }

}

function displaytimer()
{
$('#timer').show();
var hours = Math.floor(millis / 36e5),
mins = Math.floor((millis % 36e5) / 6e4),
secs = Math.floor((millis % 6e4) / 1000);
$('#timer').html(secs);  
}
function timerTodisplay()
{
const myInterval =  setInterval(function() {
    millis -= 1000;
    if(millis >= 60000)
    {
        displaytimer();
        $('.rotpBtn').hide();
    }else{
        $('#timer').hide();
        $('.rotpBtn').show();
        clearInterval(myInterval);
    }
}, 1000);
}
