// Hamburger Menu

$(document).ready(function() {
    $.ajax({
        url: "isLoggedIn.php",
        method: "get",
        success: function(data) {
            if(data == "true") {
                $("#login-bt").hide();

            } else {
                $("#my-acc").hide();
            }
        },
        error: function() {
            console.log("error");
        }

    });
    $("#hamburger").click(function() {
        $(".nav__links").toggleClass("show");
        $(".login-bt").toggleClass("show");
    });
    $("#my-acc").click(function() {
        console.log("click");
    });
});

//Scroll Reveal

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 100;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("activee");
      } else {
        reveals[i].classList.remove("activee");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);