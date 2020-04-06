
    

    function ajax_estado(estado, order){
    
    
         $.ajax({
            url:"/consultar/store",
            method:"POST",
            data:{'id_order': order, 'estado_pedido': estado },
            dataType:"json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
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
    }
    
   

   //EN EL html <select onchange="ajax_estado({{id}})" ></select>
 


