window.addEventListener('scroll', function(){
    const header =document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

window.addEventListener("resize", checkScreenWidth);
function checkScreenWidth() {
    const screenWidth = window.innerWidth;
    if (screenWidth <= 640) {
        const elementToRemove = document.getElementById("com");
        if (elementToRemove) {
            elementToRemove.remove();
        }
    }
}

function toggleNav(){
    const iconmenu = document.querySelector('.iconmenu');
    const navbar = document.querySelector('.navbar');
    iconmenu.classList.toggle('active');
    navbar.classList.toggle('active');

}

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
