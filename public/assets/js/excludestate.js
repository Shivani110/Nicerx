$(document).ready(function(){
    $('#myform').submit(function(e){
        e.preventDefault();
        var data={
            state: $('#state').val(),
        }
        $.ajax({
            url: $('meta[name="base-url"]').attr('content'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: "POST",
            data: data,
            dataType: "json",
            success: function(response){
                if(response){
                    NioApp.Toast('Saved', 'success' ,{position:'top-right'});
                }
            },
            error: function(errors){
                var message = errors.responseJSON.message;
                NioApp.Toast(message, 'error' ,{position:'top-right'});
            }
        });
    });
});
