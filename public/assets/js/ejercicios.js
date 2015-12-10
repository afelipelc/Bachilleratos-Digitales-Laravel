

// función ready() de jQuery

//$(document)....
//document: representa a todo el documento html.
//la función ready() se ejecuta hasta que todo el documento se ha cargado.
//

$(document).ready(function() {
  
  //implementar el evento change de #semester_id
  
  $('#semester_id').change(function(){

    //tomar el ID o valor seleccionado.
    
    //pregunta de examen: ¿función para obtener el valor de un elemento con jQuery?

    //hacer la peticion JSON para recuperar los grupos del semestre seleccionado
    
    //¿cómo se hace una petición JSON con jQuery?
    $.getJSON(
      'http://localhost:8000/group/'+ $(this).val() +'.json',
      
        function(data){
          //data representa todos los datos recibidos
          
          //comprobar si devolvió error
          //sino, cargar la lista de grupos
          if(data.error){
            alert(data.message);
          }else{
            
            //antes de cargar la lista
            //borrar la lista actual del select
            $('#group_id').empty();

            //procesar los grupos
            $.each(data.semester.groups, function (i, item){
              //agregar el elemento al select de grupo
              $('#group_id').append('<option value="' + item.id +'">'+ item.nombre + '<option>');
            });
          }
        }
      );


    

  });


});