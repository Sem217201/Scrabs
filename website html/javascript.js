var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* de toggle tussen toevoegen en verwijdren */
    this.classList.toggle("active");

    /* De toggle om de accordion te verstoppen en laten zien */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
console.log("It works!");
