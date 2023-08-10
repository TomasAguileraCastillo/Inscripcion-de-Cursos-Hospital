    
    
    //****************************************************************************************************** */
    //para limpiar los campos antes de dar de Alta una Persona
    $("#btninscribir").click(function(){
        $("#formjornada").validate();
        opcion = 1; //alta           
       
            var datitos=$('#formjornada').serialize();
            opcion = 1;
               
                
                $.ajax({
                    url: "php/CRUD_A.php",
                    type: "POST",
                    datatype:"json",    
                    data:  datitos,    
                    success: function(r) {
                        if(r==1){
                            $("#formjornada").trigger("reset");
                            //location.reload();
                            $('#exampleModal').modal('show');
                            //alert("Agregado Correctamente");

                        }else{
                            alert("Fallo el Servidor al Grabar, Contacte al Administrador, Codigo: jsL71CON");
                        }
                    }
                });	
    return false;
       // });
          
    });
    //****************************************************************************************************** */
  
