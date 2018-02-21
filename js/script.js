/*jslint plusplus: true*/
/*jslint white: true*/
/*globals $:false */
document.addEventListener("touchstart", function(){}, true); // allows you to negate the iphon highligthing when things are tapped
(function () {

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function showMenu() {
    var x = document.getElementById("nav"), 
      menuIcon = document.getElementById("menu-icon");
    if (x.className === "visible") {
        x.className = "hidden";
        menuIcon.innerHTML = "&#x02261;";
      console.log('it hid now');
    } else {
        x.className = "visible";
        menuIcon.innerHTML = "&#x02262;";
      console.log('it vis now');
    }
}

document.getElementById("menu-icon").addEventListener("click", function(){
  showMenu();

});
}());
