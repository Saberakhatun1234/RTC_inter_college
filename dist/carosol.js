const dom = {
  carouselImage: document.getElementById("carousel-image"),
  caption: document.getElementById("carousel-caption"),
  nextBtn: document.getElementById("nextBtn"),
  prevBtn: document.getElementById("prevBtn"),
  reviwe_conteiner: document.getElementById("reviwe_conteiner"),
  student_review: document.getElementsByClassName("student_review"),
};

// Now store image + caption together
const slides = [
  {
    img: "./images/infr2.jpg",
    text: "Welcome to RTC Inter College!",
  },
  {
    img: "./images/infrHero.jpg",
    text: "Modern Infrastructure for Future Leaders",
  },
  {
    img: "./images/infr3.jpg",
    text: "Empowering Education in Every Corner",
  },
];

let currentIndex = 0;

function showImage(index) {
  dom.carouselImage.src = slides[index].img;
  dom.caption.textContent = slides[index].text;
}

function nextImage() {
  currentIndex = (currentIndex + 1) % slides.length;
  showImage(currentIndex);
}

function prevImage() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  showImage(currentIndex);
}

let autoSlide = setInterval(nextImage, 5000);

dom.nextBtn.addEventListener("click", () => {
  nextImage();
  resetAutoSlide();
});

dom.prevBtn.addEventListener("click", () => {
  prevImage();
  resetAutoSlide();
});

function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextImage, 5000);
}


// student review


  