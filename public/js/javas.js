
    

    function ajax_estado(id){

        estadoObj = new Object(id);
        estadoObj.ordeId = $('#id_order'+id).val();
        estadoObj.estado = $('#estado_pedido'+id).val();   
    
         $.ajax({
            url:"/consultar/store",
            method:"POST",
            data:$.param(estadoObj),
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
    }
    
   

   //EN EL html <select onchange="ajax_estado({{id}})" ></select>
 


