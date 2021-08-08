function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
    
    
    }
    function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
    
    }
    
    function validateForm(){
    var returnval = true;
    clearErrors();
    
    //perform validation and if validation fails, set the value of returnval to false
    var empname = document.forms['myForm']["empname"].value;
    if (empname.length<6){
        seterror("empname", "*Length is too short");
        returnval = false;
    }
    
    var comname = document.forms['myForm']["comname"].value;
    if (comname.length>20){
        seterror("comname", "*Length is too long");
        returnval = false;
    }
    
    
    var phone = document.forms['myForm']["contact"].value;
    if (contact.length >= 10){
        seterror("phone", "*Phone number is not valid");
        returnval = false;
    }

    var username = document.forms['myForm']["username"].value;
    if (username.length>20){
        seterror("username", "*Length is too long");
        returnval = false;
    }
    
    var password = document.forms['myForm']["password"].value;
    if (password.length < 6){
    
        // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
        seterror("password", "*Password should be atleast 6 characters long!");
        returnval = false;
    }
    
    
    
    return returnval;
    }
    