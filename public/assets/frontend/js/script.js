var myModal = null;
var myModal2 = null;

function singin() {

    // Show the modal using Bootstrap's modal method
    console.log("btn clicked")
    var myModal = new bootstrap.Modal(document.getElementById('signIn'));
    myModal.show();

}


function singup() {

  // Hide the 'signIn' modal if it's open
        var signInModalElement = document.getElementById('signIn');
        var signUpModalElement = document.getElementById('singUp');

        // Check if the 'signIn' modal is visible
        if (signInModalElement.classList.contains('show')) {
            var myModal = bootstrap.Modal.getInstance(signInModalElement);
            if (myModal) {
                myModal.hide();
            }
        }

    // Show the modal using Bootstrap's modal method
    console.log("btn clicked")
    var myModal2 = new bootstrap.Modal(document.getElementById('singUp'));
    myModal2.show();

    //interpace changing


}









document.addEventListener("DOMContentLoaded", function () {
    const nav1 = document.querySelector("#nav-2");
    const nav2 = document.querySelector("#mainheader");
    // $('#mainheader').css({'display':'none'});
    // Initially, hide nav2 and show nav1
    //nav2.style.display = "none";


    window.addEventListener("scroll", function () {
        if (window.scrollY <= 250) {  // Adjust 140 to the desired scroll distance
            nav1.style.display = "block";
            //nav2.style.display = "none";
            // $('#mainheader').css({'display':'none'});
        }

        else{
            nav1.style.display = "none";
            nav2.style.display = "block";

        }

    });
});
