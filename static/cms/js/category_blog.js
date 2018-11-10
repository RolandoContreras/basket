function edit_category_blog(category_blog_id){    
     var url = 'dashboard/categoria_blog/load/'+category_blog_id;
     location.href = site+url;   
}
function cancel_category_blog(){
	var url= 'dashboard/categoria_blog';
	location.href = site+url;
}
function add_category_blog(){
	var url= 'dashboard/categoria_blog/load';
	location.href = site+url;
}
function delete_category_blog(category_blog_id){
    bootbox.dialog("Confirma que desea eliminar la categoria del blog", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/categoria_blog/delete_category",
               dataType: "json",
               data: {category_blog_id : category_blog_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
