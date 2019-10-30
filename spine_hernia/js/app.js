/**Slideshow */
var simpleSlides = function () {
    var i;
    var slides = document.querySelectorAll(".slides");
    for (i = 0; i < slides.length; i++) {
        slides[i].setAttribute("style","display:none");
    }
    count++;
    if (count > slides.length) { count = 1; }
        slides[count-1].setAttribute("style","display:block");
        setTimeout(simpleSlides, 6800);
}

let count = 0;
simpleSlides();

/**Form function -- open -- close if clicked somewhere else */
let button = document.querySelectorAll('.btn');
const form = document.querySelector('.popup');
button.forEach(function(btn){
    btn.addEventListener('click', function(event){
        form.style.display = 'grid'; 
        closeBoxIfClickedOutside();
    });
});

function closeBoxIfClickedOutside(){
    if(form.style.display==='grid'){
        document.addEventListener("click", function(event) {
            // If user clicks inside the element, do nothing
            if (event.target.closest('.popup') || event.target.closest('.btn')) {
                return;
            }else{
            // If user clicks outside the element, hide it!
            form.style.display = 'none'; 
            };
        });
    }
}

