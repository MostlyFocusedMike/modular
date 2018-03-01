/*jslint plusplus: true*/
/*jslint white: true*/
/*globals $:false */
document.addEventListener("touchstart", function(){}, true); // allows you to negate the iphon highligthing when things are tapped
(function () {

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function showMenu() {
  var nav = document.getElementById("nav");
  nav.className = (nav.className == "hidden") ? "visible" : "hidden";
}


function checkForm() {

  var nameInp = document.getElementById("name-inp").value,
    nameError = document.getElementById("name-error"),
    emailInp = document.getElementById("email-inp").value,
    emailError = document.getElementById("email-error"),
    commentsInp = document.getElementById("comments-inp").value,
    commentsError = document.getElementById("comments-error"),
    errors = false;

  // check name
  nameError.textContent = "";
  if (!nameInp.match(/^[A-Za-z .'-]+$/)) {
    nameError.textContent = "Please fill out your name";
    errors = true;
  } 

  // check email
  emailError.textContent = "";
  if (!emailInp.match(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/)) {
    emailError.textContent = "Be sure to enter a valid email";
    errors = true;
  }
  
  // check comments
  commentsError.textContent = "";
  if (commentsInp.length < 3) {
    commentsError.textContent = "Don't forget to comment";
    errors = true;
  }
  if (errors) {
     event.preventDefault(); // Prevent form submission
  }
}

document.getElementById("menu-icon").addEventListener("click", function(){
  showMenu();
});



// if this doesn't work for some reason, try putting it in window.addEventListener("load", function() {
  document.forms[0].addEventListener("submit", function(event) {
     checkForm();
     //alert('hi');
   }, false);

}());
