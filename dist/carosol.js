// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
  // DOM elements for carousel
  const dom = {
    carouselImage: document.getElementById("carousel-image"),
    caption: document.getElementById("carousel-caption"),
    nextBtn: document.getElementById("nextBtn"),
    prevBtn: document.getElementById("prevBtn"),
    wrapper: document.getElementById("reviewsWrapper"),
  };

  // Carousel slides
  const slides = [
    {
      img: "./images/infr2.jpg",
      text: "Welcome to RTC Inter College!",
    },
    {
      img: "./images/infr3.jpg",
      text: "Empowering Education in Every Corner",
    },
  ];

  let currentIndex = 0;

  function showImage(index) {
    if (dom.carouselImage && dom.caption) {
      dom.carouselImage.src = slides[index].img;
      dom.caption.textContent = slides[index].text;
    }
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

  dom.nextBtn.addEventListener("click", (e) => {
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

  // Initialize the carousel
  showImage(currentIndex);

  // Enhanced Student Reviews Section
  if (dom.wrapper) {
    const reviews = [
      { name: "Umesh Deghoria", reviews: "This college helped me achieve my goals." },
      { name: "Anjali Kumari", reviews: "Excellent faculty and environment!" },
      { name: "Ravi Singh", reviews: "Great experience overall, highly recommend." },
      { name: "Pooja Sinha", reviews: "Wonderful campus and very supportive staff." },
      { name: "Amit Raj", reviews: "Best in Ranchi, hands down." }
    ];

    let currentIndexReviews = 0;

    function renderReviews(index) {
      dom.wrapper.innerHTML = '';

      const getIndex = i => (i + reviews.length) % reviews.length;

      const indices = [
        getIndex(index - 1), // left
        getIndex(index),     // center
        getIndex(index + 1)  // right
      ];

      indices.forEach((i, pos) => {
        const review = reviews[i];
        const baseStyle = "w-full sm:w-1/3 p-4 transform transition-all duration-700 ease-in-out";

        let extraStyle = "";
        if (pos === 1) {
          extraStyle = "z-20 scale-105";
        } else {
          extraStyle = "z-10 scale-95 opacity-80";
        }

        const card = document.createElement('div');
        card.className = `${baseStyle} ${extraStyle}`;
        card.innerHTML = `
          <div class="bg-white shadow-lg rounded-xl p-6 text-center">
            <p class="text-red-700 text-sm italic">"${review.reviews}"</p>
            <h4 class="mt-4 font-bold text-indigo-700">${review.name}</h4>
          </div>
        `;
        dom.wrapper.appendChild(card);
      });
    }

    function nextReview() {
      currentIndexReviews = (currentIndexReviews + 1) % reviews.length;
      renderReviews(currentIndexReviews);
    }

    renderReviews(currentIndexReviews);
    let autoSlideReviews = setInterval(nextReview, 4000);
  }
});
