function login(){
    var emailInput = document.getElementById('InputEmail').value
    var passInput = document.getElementById('InputPassword').value

    if (emailInput=="admin" && passInput=="admin"){
        alert("Password Benar")
    } else{
        window.location="https://www.google.com"
    }
}