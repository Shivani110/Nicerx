$(document).ready(function(){
    $('#myform').submit(function(e){
        localStorage.setItem("email",$('#email').val());
        localStorage.setItem("password",$('#password').val());
        $('#loading').show();
        e.preventDefault();
        var data={
            email: $('#email').val(),
            password: $('#password').val(),
        }
        $.ajax({
            url: $('meta[name="base-url"]').attr('content'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: "post",
            data: data,
            dataType: "JSON",
            success: function(response){
                if(response == "success"){
                    email = localStorage.getItem('email');
                    password = localStorage.getItem('password');
                    $('#sign').hide();
                    $('#login-form').hide();
                    $('#otp-form').show();
                    $('#username').val(email);
                    $('#pass').val(password);
                    $('.msg').show();
                }

                if(response == "Incorrect Password"){
                    $('#loading').hide();
                    $('.show_msg').html('<p>'+response+'</p>');
                }

                if(response == "Incorrect Username"){
                    $('#loading').hide();
                    $('.show_msg').html('<p>'+response+'</p>');
                }
            },
            error: function(errors){
                $('#loading').hide();
                var message = errors.responseJSON.message;
                $('.show_msg').html('<p>'+message+'</p>');
            }
        });
    });
});

var timer = 600;
function countdown(){
    timer-- ;

    if(timer > 0){
        minutes = Math.floor(timer / 60) % 60;
        sec = Math.floor(timer) % 60;
        var time = '<p>Time left :'+minutes+':'+sec+'</p>';
        $('#myTimer').html(time);
        setTimeout(countdown,1000);
    }else{
        $('#myTimer').html('');
        $('.msg').hide();
        $('.msg1').html('<p>Otp is expired.</p>');
        $('.rsndbtn').show();
    }
}

countdown();

function resendOTP(){
    var data={
        username: $('#username').val(),
        password: $('#pass').val(),
    }
    $.ajax({
        url: $('meta[name="b-url"]').attr('content'),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content'),
        },
        type: "POST",
        data: data,
        dataType: "JSON",
        success: function(response){
            if(response == "success"){
                $('.msg').show();
                $('.msg1').hide();
                $('.rsndbtn').hide();
            }
        }
    });
}