//for sign up validation//
function validation() {
    var username=document.getElementById("registerName");
    var usernameValue=username.value.trim();
    var password1=document.getElementById("registerPass1");
    var password2=document.getElementById("registerPass2");
    var password1Value=password1.value.trim();
    var password2Value=password2.value.trim();
    var alphabet= /^[ A-Za-z]*$/;
    var errormessage="";

    if (!usernameValue.match(alphabet)) {
        errormessage+="Username must be in alphabet!\n";
    }
    
    if (password1Value.length <8){
        errormessage+="Password must be at least 8 characters!\n";
    }

    if (password2Value!= password1Value){
        errormessage+="Password not match!\n";
    }

    if (errormessage !=""){
        alert(errormessage);
        return false;
    }
}