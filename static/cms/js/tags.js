function edit_tags(tag_id){    
     var url = 'dashboard/tags/load/'+tag_id;
     location.href = site+url;   
}
function nuevo_tags(){
	var url= 'dashboard/tags/load';
	location.href = site+url;
}
function cancelar_tags(){
	var url= 'dashboard/tags';
	location.href = site+url;
}
function delete_tags(tag_id){
    bootbox.dialog("Confirma que desea elimiar tag", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/tags/delete",
               dataType: "json",
               data: {tag_id : tag_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}