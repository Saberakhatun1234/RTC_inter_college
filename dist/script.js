document.addEventListener("DOMContentLoaded", function () {
  const navToggle = document.getElementById("nav-toggle");
  const navLinks = document.getElementById("nav-links");

  const links = navLinks.querySelectorAll("a");
  if(navToggle && navLinks){
  navToggle.addEventListener("click",()=>{
    // console.log("click");
     navLinks.classList.toggle("hidden");
     navToggle.querySelector("i").classList.toggle("fa-xmark");
     navToggle.querySelector("i").classList.toggle("fa-bars");
     
  })

}
});
