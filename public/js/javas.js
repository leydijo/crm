

$(document).ready(function() {
    
    var form_data =  $('#button_action').val();
    $("#update_pedido" ).click(function() {
      
        $.ajax({
            url:"/consultar/store",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            method:"POST",
            data:$('#envio form').serialize(),
            dataType:"json",
            success:function(data)
            {
                console.log(data);
            },
            error: function (jqXHR,estado,error){
                console.log(estado)
                console.log(error)
            },
            complete: function (jqXHR,estado){
                console.log(estado);
            }
        
        })
    })

});