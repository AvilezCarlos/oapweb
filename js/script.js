let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

const card = document.querySelectorAll(".card__inner");

function flipCard() {
  this.classList.toggle('is-flipped');
}
card.forEach((card) => card.addEventListener("click", flipCard));

function mensaje() {

  swal({
    title: 'Título',
    text: 'Mensaje de texto',
    html: '<p>Mensaje de texto con <strong>formato</strong>.</p>',
    type: 'success',
    timer: 3000,
  });
}