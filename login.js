firebase.auth().onAuthStateChanged(function (user) {
    if (user) {
        // User is signed in.
        $("#main-div").show();
        $("#customer_div").show();
        $("#booking_div").show();
        $("#breakdown_div").show();
        $("#delivering_div").show();
        $("#login-div").hide();
    } else {
        // No user is signed in.
        $("#main-div").hide();
        $("#customer_div").hide();
        $("#booking_div").hide();
        $("#breakdown_div").hide();
        $("#delivering_div").hide();
        $("#login-div").show();
        $("#login-div1").show();
    }
});

function login() {
    var userEmail = document.getElementById("username").value;
    var userPass = document.getElementById("password").value;
    firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        window.alert("Error : " + errorMessage);
        // ...
    });
}

function signOut() {
    firebase.auth().signOut();
}
