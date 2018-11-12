function edit_blog(blog_id){    
     var url = 'dashboard/blog/load/'+blog_id;
     location.href = site+url;   
}
function cancel_blog(){
	var url= 'dashboard/blog';
	location.href = site+url;
}
function add_blog(){
	var url= 'dashboard/blog/load';
	location.href = site+url;
}
function delete_blog(blog_id){
    bootbox.dialog("Confirma que desea eliminar el blog?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/blog/delete_blog",
               dataType: "json",
               data: {blog_id : blog_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
