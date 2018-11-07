function edit_category(category_id){    
     var url = 'dashboard/categorias/load/'+category_id;
     location.href = site+url;   
}
function cancel_category(){
	var url= 'dashboard/categorias';
	location.href = site+url;
}
function add_category(){
	var url= 'dashboard/categorias/load';
	location.href = site+url;
}
function delete_category(news_id){
    bootbox.dialog("Confirma que desea eliminar la categoria", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/categorias/delete_category",
               dataType: "json",
               data: {news_id : news_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
