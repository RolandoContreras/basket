function send_messages(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var asunto = document.getElementById("asunto").value;
    var comments = document.getElementById("comments").value;
    //GET CAPTCHA DATA
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        document.getElementById("message_capcha").style.display = "block";
    } else {
        document.getElementById("message_capcha").style.display = "none";
        if(name == ""){
            document.getElementById("message_name").style.display = "block";
            $("#name").focus();
        }else if(email == ""){
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
        }else if(asunto == ""){
            document.getElementById("message_asunto").style.display = "block";
            $("#asunto").focus();
        }else if(comments == ""){
            document.getElementById("message_comments").style.display = "block";
            $("#comments").focus();
        }else{
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                   type: "post",
                   url: site+"contact/send_messages",
                   dataType: "json",
                   data: {name : name,
                          email : email,
                          asunto : asunto,
                          comments : comments},
                   success:function(data){          
                   document.getElementById("messages").style.display = "block";
                   }         
                 });
            }else{
                document.getElementById("message_email").style.display = "block";
                $("#email").focus();
            }
        }    
        
    }
}
function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function fade_name(name){
    var name = document.getElementById("name").value;
    if(name != ""){ 
        document.getElementById("message_name").style.display = "none";
    }
}
function fade_email(email){
    var email = document.getElementById("email").value;
    if(email != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_asunto(asunto){
    var asunto = document.getElementById("asunto").value;
    if(asunto != ""){ 
        document.getElementById("message_asunto").style.display = "none";
    }
}
function fade_comments(comments){
    var comments = document.getElementById("comments").value;
    if(comments != ""){ 
        document.getElementById("message_comments").style.display = "none";
    }
}
function fade_term(term){
    var term = document.getElementById("term").checked;
    if(term == true){ 
        document.getElementById("message_term").style.display = "none";
    }
}


