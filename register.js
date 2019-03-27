// register a new device / account
var waApp = new WebAuthnApp()
waApp.username = "me";
waApp.register()
    .then(() => {
        alert("You are now registered!");
    })
    .catch((err) => {
        alert("Registration error: " + err.message);
    });