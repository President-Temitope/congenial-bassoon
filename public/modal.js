// new WOW().init();



// Get DOM Elements
const close = document.querySelector(".close");
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
var span = document.getElementsByClassName("close")[0];


// Events
modalBtn.addEventListener('click', openModal);
// Open
function openModal() {
  modal.style.display = 'block';
}

  span.onclick = function() {
    modal.style.display = "none";
 }
  //  span2.onclick = function() {
  //    modal2.style.display = "none";
  //  }

