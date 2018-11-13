function edit_company(company_id){    
     var url = 'dashboard/empresas/load/'+company_id;
     location.href = site+url;   
}
function cancel_company(){
	var url= 'dashboard/empresas';
	location.href = site+url;
}
function add_company(){
	var url= 'dashboard/empresas/load';
	location.href = site+url;
}
function delete_company(company_id){
    bootbox.dialog("Confirma que desea eliminar la empresa?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/empresas/delete_company",
               dataType: "json",
               data: {company_id : company_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
