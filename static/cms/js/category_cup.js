function edit_category_cup(category_cup_id){    
     var url = 'dashboard/categoria_torneo/load/'+category_cup_id;
     location.href = site+url;   
}
function cancel_category_cup(){
	var url= 'dashboard/categoria_torneo';
	location.href = site+url;
}
function add_category_cup(){
	var url= 'dashboard/categoria_torneo/load';
	location.href = site+url;
}
function delete_category_cup(category_cup_id){
    bootbox.dialog("Confirma que desea eliminar la categoria del torneo", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/categoria_torneo/delete_category",
               dataType: "json",
               data: {category_cup_id : category_cup_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
