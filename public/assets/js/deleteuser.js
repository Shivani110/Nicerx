function deleteUser(id){
    var data={
        id:id,
    }
    $.ajax({
        url:$('meta[name="b-url"]').attr('content'),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content'),
        },
        type: "post",
        data: data,
        dataType: "json",
        success: function(response){
            if(response){
                $('#data'+data.id).hide();
                NioApp.Toast('Deleted','error',{position:'top-right'});
            }
        } 
    });
}