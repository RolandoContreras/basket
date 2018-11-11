function edit_team(team_id){    
     var url = 'dashboard/equipos/load/'+team_id;
     location.href = site+url;   
}
function cancel_team(){
	var url= 'dashboard/equipos';
	location.href = site+url;
}
function add_team(){
	var url= 'dashboard/equipos/load';
	location.href = site+url;
}
function delete_team(team_id){
    bootbox.dialog("Confirma que desea eliminar el equipo?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/equipos/delete_team",
               dataType: "json",
               data: {team_id : team_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
