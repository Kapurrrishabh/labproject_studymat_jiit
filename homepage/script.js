var heading = document.querySelector(".intro p");
var text = heading.textContent; 

function typeEffect(text, index) {
    if (index < text.length) {
        heading.textContent += text[index]; 
        setTimeout(function() {
            typeEffect(text, index + 1);
        }, 150); 
    }
    else {
    setTimeout(clearHeading, 500); 
                    }
}
function clearHeading() {
         heading.textContent = ""; 
         typeEffect(text,0); 
          }
// Start the typing effect
  typeEffect(text, 0);
  document.querySelectorAll('.subcontainer').forEach(container => {
    const subcontainer = container.querySelector('.subjects');
    const backbtn = container.querySelector('.backbtn .btn');  
    const forbtn = container.querySelector('.backbtn .btn2');  
    const scrollAmount = 200; 
    function slideleft() {
        subcontainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
    function slideright() {
        subcontainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
    backbtn.addEventListener('click', slideleft);
    forbtn.addEventListener('click', slideright);
});