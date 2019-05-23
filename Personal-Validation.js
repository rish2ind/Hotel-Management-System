function formValidation()
{
    var firstname = document.registration.fname;
    var emailid = document.registration.email;
    var mobile = document.registration.mobiles;
    
    if(name_validation(firstname))
    {
        if(email_validation(emailid))
        {
            if(mobile_validation(mobile))
            {
                
            }
        }
    }
    return false;
}

function name_validation(firstname){
    var result = /^[a-zA-Z ]+$/;
    if(firstname.value.match(result)){
        return true;
    }
    else{
        document.getElementById('name').innerHTML = "<span style='color: red;'><sup>*</sup> Enter correct name";
        firstname.focus();
        return false;
    }
}
function email_validation(emailid){
    var result = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailid.value.match(result)){
        return true;
    }
    else{
        document.getElementById('email').innerHTML = "<span style='color: red; '><sup>*</sup> Enter correct name";
        emailid.focus();
        return false;
    }
}
function mobile_validation(mobile){
    var result = /^[0-9]+$/;
    if(mobile.value.match(result)){
        alert("Form Submited Successfully");
        return true;
        window.location.reload();
    }
    else{
        document.getElementById('mobile').innerHTML = "<span style='color: red; '><sup>*</sup> Enter correct mobile number";
        mobile.focus();
        return false;
    }
}