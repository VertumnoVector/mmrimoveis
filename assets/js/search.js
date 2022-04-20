function search() {
    var input, filter, cards, cardContainer, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();

    cardContainer = document.getElementById("myProducts");
    cards = cardContainer.getElementsByClassName("col");

    var alert = document.getElementById("message");

    for (i = 0; i < cards.length; i++) {
      title = cards[i].querySelector(".card-text");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cards[i].classList.remove("d-none");
        cards[i].style.display = "";
        alert.style.display = "none";

      } else {
        cards[i].classList.add("d-none");
       // alert.style.display = "block";

      }
      console.log(cardContainer);
    }
    if (title.innerText.toUpperCase().indexOf(filter) == -1){
        alert.style.display = "block";
    }
  }