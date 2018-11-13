function send_messages(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var comment = document.getElementById("comment").value;
    //GET CAPTCHA DATA
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        document.getElementById("message_capcha").style.display = "block";
    } else {
        document.getElementById("message_capcha").style.display = "none";
        if(comment == ""){
            document.getElementById("message_comment").style.display = "block";
            $("#comment").focus();
            
        }else if(name == ""){
            document.getElementById("message_name").style.display = "block";
            $("#name").focus();
        }else if(email == ""){
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
        }else{
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                   type: "post",
                   url: site+"contact/send_messages",
                   dataType: "json",
                   data: {name : name,
                          email : email,
                          comment : comment},
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
function fade_comments(comments){
    var comments = document.getElementById("comment").value;
    if(comments != ""){ 
        document.getElementById("message_comment").style.display = "none";
    }
}

