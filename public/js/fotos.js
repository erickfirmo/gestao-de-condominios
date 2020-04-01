 
 if(!recarregarFotos)
 {
      carregaFotos();
 }


 var recarregarFotos = 1;
 


 function carregaFotos()
 {
    var dominio = pegaDominio();   
    var fotable_id   = $('#fotable_id').val();
    var fotable_type = $('#fotable_type').val().replace('\\', '-');


    $('.listadefotos').html("");
    
    
    $.get('./../../../../../admin/listadefotos/' + fotable_id + '/' + fotable_type, function(response,){
    
      $.each(response, function(index, foto){
           $('.listadefotos').append("<div class='col-md-3'><a class='lgBtnExluir thumbnail'><img class='img img-responsive' src='"+ dominio + foto.thumbnail +"'><input type='button' class='btn btn-danger btn-flat btn-xs' onClick='excluirFoto(this)' id='"+foto.id+"' value='Excluir Foto'><i class='fa fa-trash'></i></a></div>");
      });

    
      
});

  

 }


$("#uploadFotos").change(function(){
    
     $('#form-fotos').ajaxSubmit(function() 

     {
       
      carregaFotos()
     }); 

    
  });


function excluirFoto(e)
{

  swal({
    title: "Tem Certeza?",
    text: "Você não poderá recuperar esse registro no futuro!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: 'btn-danger',
    confirmButtonText: 'Sim, apagar!',
    cancelButtonText: "Não, quero voltar!",
    closeOnConfirm: true,
    closeOnCancel: false,
  },
  function (isConfirm) {
    if (isConfirm) {
      var foto = e.id;
      var token = $('meta[name="csrf-token"]').attr('content');
      
      $.ajax({
       headers:
       {
           'X-CSRF-Token': token
       },
       url:  '../../../uploaddefotos/delete/' + foto,
       type: 'delete',
       data: {
         _method: 'delete',
       },
       success: function(data){ // What to do if we succeed
          
        carregaFotos();
        
       },
       
       error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
         console.log(JSON.stringify(jqXHR));
         console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
       }
      });

    } else {
      swal("Cancelado", "O registro não foi modificado  :)", "error");
      return false;
    }
  }); 




}