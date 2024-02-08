document.getElementById("signupButton").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("signupPage").style.display = "block";
});