javascript : /* Makes the background color of the title change */
/* Dit verandert de titel van kleur de achtergrond verandert in de kleur van de titel en de titel in de kleur van de achtergrond */
console.log('hello world');

    function changeColor(obj) {
            if (obj.style.color == 'white') {
            obj.style.color = 'green';
                } else {
                obj.style.color = 'green';
            }
          };
 

function changeBackground(id, color) {

    document.getElementById(id).style.backgroundColor = color;
    console.log("Deze functie wordt aangeroepen");
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel /
    this.classList.toggle("active");

    / Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
     }
  });
}