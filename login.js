// log in to a previously registered account
var waApp = new WebAuthnApp()
waApp.username = "me";
waApp.login()
    .then(() => {
        alert("You are now logged in!");
    })
    .catch((err) => {
        alert("Log in error: " + err.message);
    });