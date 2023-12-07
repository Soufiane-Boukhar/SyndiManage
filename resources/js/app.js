import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




let list = document.querySelectorAll(".navigation li");
let icons = document.querySelectorAll(".navigation li a span .iconsNav");

function setActiveState() {
  const initiallyActiveItem = document.querySelector(".navigation li.active");

  if (initiallyActiveItem) {
    initiallyActiveItem.classList.add("hovered");

    icons.forEach((item) => {
      item.classList.remove('iconsNav', 'iconsNavHover');
      if (item.parentElement.parentElement === initiallyActiveItem) {
        item.classList.add('iconsNavHover');
      }
    });
  }
}

function activeLink(event) {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });

  event.currentTarget.classList.add("hovered");

  icons.forEach((item) => {
    item.classList.remove('iconsNavHover');
  });

  const iconsInsideHovered = event.currentTarget.querySelectorAll('.iconsNav');
  iconsInsideHovered.forEach((item) => {
    item.classList.add('iconsNavHover');
  });
}

document.addEventListener('DOMContentLoaded', () => {
  setActiveState();
  list.forEach((item) => {
    item.addEventListener('mouseenter', activeLink);
    item.addEventListener('mouseleave', () => {
    });
  });
});


let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let logo = document.querySelector(".logo");


toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


