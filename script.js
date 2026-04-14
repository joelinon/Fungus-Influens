function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.getElementById("menuIcon").style.display = "none";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("menuIcon").style.display = "block";
}

function closeModal(modalClass) {
  document.querySelector('.' + modalClass).style.display = "none";
  document.getElementById("menuIcon").style.display = "block";
}

const galleryButtons = document.querySelectorAll('.cards-gallery .card button');
const modalClasses = ['modal1', 'modal2', 'modal3', 'modal4', 'modal5', 'modal6'];

galleryButtons.forEach(function(btn, index) {
  btn.onclick = function() {
    const modalClass = modalClasses[index];
    if (modalClass) {
      document.querySelector('.' + modalClass).style.display = "grid";
      document.querySelector('.' + modalClass).style.placeContent = "center";
      document.getElementById("menuIcon").style.display = "none";
    }
  };
});

window.onclick = function(event) {
  modalClasses.forEach(function(cls) {
    const modal = document.querySelector('.' + cls);
    if (event.target === modal) {
      modal.style.display = "none";
      document.getElementById("menuIcon").style.display = "block";
    }
  });
};