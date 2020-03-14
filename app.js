$(document).ready(function(){

    let edit = false;

    listarPersonas();
    $('#personas-result').hide();

    $('#search').keyup(function() {
        if($('#search').val()) {
          let search = $('#search').val();
            console.log(search);
            $.ajax({
                url: 'persona-search.php',
                data: {search},
                type: 'POST',

                success: function (response) {
                    if(!response.error) {
                    let personas = JSON.parse(response);
                    console.log(personas);
                    let template = '';
                    personas.forEach(persona => {
                        template += `
                        <li><a href="#" class="persona-item">${persona.nombre}</a></li>
                              ` 
                      });
                      $('#personas-result').show();
                      $('#container').html(template);
                    }
                  } 
                });
              }
            }); 

    $('#persona-form').submit(function(e){
        const postData = {
            name: $('#name').val(),
            last_name: $('#last_name').val(),
            rut: $('#rut').val(),
            descripcion: $('#descripcion').val(),
            id: $('#personaId').val(),
        };

        let url = edit === false? 'persona-add.php':'persona-update.php';
console.log(url);

        $.post(url,postData,function(response){
           
            
            listarPersonas();
            $('#persona-form').trigger('reset');

        });
        e.preventDefault();
    });

    $(document).on('click', '.persona-delete', function() {
        const element = $(this)[0].parentElement.parentElement;
       let id = $(element).attr('personaId');
        
       $.post('persona-delete.php',{id},function(response){
        console.log(response);
        listarPersonas();
       })
        

        
    });

    function listarPersonas(){
        
    $.ajax({
        url: 'persona-list.php',
        type: 'GET',
        success: function (response){
            
            let personas = JSON.parse(response);
            console.log(personas);
            
            let template = '';
            personas.forEach(persona=>{
                template += `
                <tr personaId="${persona.id}" >
                    <td >${persona.id} </td>
                    <td>${persona.name} </td>
                    <td>${persona.last_name} </td>
                    <td>${persona.rut} </td>
                    <td>${persona.descripcion} </td>
                    <td>
                        <button class="persona-delete btn btn-danger">
                        eliminar
                        </button>
                    </td>
                    <td>
                        <button class="persona-item btn btn-success href="#" ">
                        editar
                        </button>
                    </td>
                </tr>
                `
                
            });
            $('#personas').html(template); 
        }
    });

    }






    $(document).on('click','.persona-item',function(){
        const element = $(this)[0].parentElement.parentElement;
       let id = $(element).attr('personaId');
        console.log(id);
        $.post('persona-sola.php',{id},function(response){
            const persona = JSON.parse(response);
            $('#name').val(persona.name);
            $('#last_name').val(persona.last_name);
            $('#rut').val(persona.rut);
            $('#descripcion').val(persona.descripcion);
            $('#personaId').val(persona.id);
            edit = true;
            

        })
        
    });


    

    
    
});