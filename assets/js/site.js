const pages = document.querySelectorAll("section, footer");
const searchForm = document.querySelector(".search-form");
const headerLogo = document.querySelector(".header-logo");
const menuButton = document.querySelector(".navigation-toggler");

let current = 0;
const INITIAL_WIDTH = 1640;
let isAnimating = false;
let pageHeight = window.innerHeight;
let pageWidth = window.innerWidth;

if (pageWidth > INITIAL_WIDTH) {
  const ANIM_TIME = 300; // must match CSS transition time

  showPage(current);

  // Set body height to emulate "virtual scroll"
  // function setScrollHeight() {
  //   document.body.style.height = `${pages.length * window.innerHeight}px`;
  // }
  // setScrollHeight();

  window.addEventListener("resize", () => {
    pageHeight = window.innerHeight;
    setScrollHeight();
  });

  function showPage(i) {
    // Display header form or logo based on section
    const isBanner = pages[i].classList.contains("banner");
    const haveBgBlack = pages[i].classList.contains("bg-black");
    searchForm.style.display = isBanner ? "block" : "none";
    headerLogo.style.display = isBanner ? "none" : "block";
    menuButton.style.filter = haveBgBlack ? "invert(1)" : "invert(0)";

    pages.forEach((p) => p.classList.remove("active"));
    pages[i].classList.add("active");
  }

  function goToPage(index) {
    if (isAnimating || index === current || index < 0 || index >= pages.length)
      return;

    isAnimating = true;
    current = index;
    showPage(current);

    setTimeout(() => {
      isAnimating = false;
    }, ANIM_TIME);
  }

  function nextPage() {
    goToPage(current + 1);
  }

  function prevPage() {
    goToPage(current - 1);
  }

  // Event listeners for mouse wheel navigation
  window.addEventListener(
    "wheel",
    (e) => {
      if (e.deltaY > 0) nextPage();
      else prevPage();
    },
    { passive: true }
  );

  // Event listeners for keyboard navigation
  window.addEventListener("keydown", (e) => {
    if (e.key === "ArrowDown") nextPage();
    if (e.key === "ArrowUp") prevPage();
  });

  // Event listeners for touch navigation
  let touchStartY = 0;

  window.addEventListener("touchstart", (e) => {
    touchStartY = e.changedTouches[0].clientY;
  });

  window.addEventListener("touchend", (e) => {
    let endY = e.changedTouches[0].clientY;
    let diff = touchStartY - endY;

    if (Math.abs(diff) < 50) return; // threshold
    if (diff > 0) nextPage();
    else prevPage();
  });
}
//Work history carousel
const workHistoryCarousel = document.querySelector("#work-history-carousel");
const dots = workHistoryCarousel.querySelectorAll(".dot");

const mobileDots = workHistoryCarousel.querySelectorAll(
  ".carousel-navigation-mobile .dot"
);
const workHistoryMobileDotInfo = workHistoryCarousel.querySelectorAll(
  ".carousel-navigation-mobile .item-info"
);

const carouselItems = workHistoryCarousel.querySelectorAll(".carousel-item");

mobileDots.forEach((dot) => {
  dot.addEventListener("click", () => {
    const index = parseInt(dot.getAttribute("data-index"));
    // Remove all active states
    workHistoryMobileDotInfo.forEach((info) => info.classList.remove("active"));
    // Set active info
    const activeInfo = workHistoryCarousel.querySelector(
      `.carousel-navigation-mobile .item-info[data-index="${index}"]`
    );
    activeInfo.classList.add("active");
  });
});

dots.forEach((dot) => {
  dot.addEventListener("click", () => {
    const index = parseInt(dot.getAttribute("data-index"));

    // Remove all active states
    dots.forEach((d) => d.classList.remove("active"));

    // Handle carousel items transition
    carouselItems.forEach((item) => {
      const isActive = item.classList.contains("active");
      item.classList.remove("active", "leave");

      if (isActive) {
        item.classList.add("leave");
      }

      if (item.getAttribute("data-item") === String(index)) {
        item.classList.add("active");
      }
    });

    // Set active dot
    dot.classList.add("active");
  });
});

//Blog carousel
const blogCarousel = document.querySelector("#blog-carousel");
const inner = blogCarousel.querySelector(".carousel-container");
const slides = blogCarousel.querySelectorAll(".carousel-item");
const prev = blogCarousel.querySelector(".arrow-back");
const next = blogCarousel.querySelector(".arrow-next");
// const dotsContainer = blogCarousel.querySelector(".dots-container");
// console.log(blogCarousel, inner, slides, prev, next);

let index = 0;

// Create dots
slides.forEach((_, i) => {
  const dot = document.createElement("button");
  if (i === 0) dot.classList.add("active");
  dot.addEventListener("click", () => goTo(i));
  // dotsContainer.appendChild(dot);
});

// const blogDots = dotsContainer.querySelectorAll("button");

function update() {
  const gap = 16;
  const translationDistance = -index * (slides[0].offsetWidth + gap); // 20px is the gap between slides
  inner.style.transform = `translateX(${translationDistance}px)`;
  // blogDots.forEach((d) => d.classList.remove("active"));
  // blogDots[index].classList.add("active");
}

function goTo(i) {
  index = i;
  update();
}

next.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  update();
});

prev.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  update();
});
// End Blog carousel

// Gallery carousel
const galleryCarousel = document.querySelector("#gallery-carousel");
const galleryInner = galleryCarousel.querySelector(".carousel-container");
const gallerySlides = galleryCarousel.querySelectorAll(".carousel-item");
const galleryCarouselDots = galleryCarousel.querySelectorAll(
  ".dots-container .dot"
);
const galleryPrev = galleryCarousel.querySelector(".arrow-back");
const galleryNext = galleryCarousel.querySelector(".arrow-next");

galleryCarouselDots.forEach((dot) => {
  dot.addEventListener("click", () => {
    const index = parseInt(dot.getAttribute("data-index"));
    setActiveItem(index);
  });
});

gallerySlides.forEach((slide) => {
  slide.addEventListener("click", () => {
    const index = parseInt(slide.getAttribute("data-item"));
    removeAllActiveStates();
    setActiveItem(index);
  });
});

galleryNext.addEventListener("click", () => {
  const activeSlide = galleryCarousel.querySelector(".carousel-item.active");
  let index = parseInt(activeSlide.getAttribute("data-item"));
  index = index === gallerySlides.length ? 1 : index + 1;
  setActiveItem(index);
});

galleryPrev.addEventListener("click", () => {
  const activeSlide = galleryCarousel.querySelector(".carousel-item.active");
  let index = parseInt(activeSlide.getAttribute("data-item"));
  index = index === 1 ? gallerySlides.length : index - 1;
  setActiveItem(index);
});

function setActiveItem(index) {
  // Remove all active states
  removeAllActiveStates();
  // Set active slide
  const activeSlide = galleryCarousel.querySelector(
    `.carousel-item[data-item="${index}"]`
  );
  activeSlide.classList.add("active");
  // Set active dot
  const activeDot = galleryCarousel.querySelector(
    `.dots-container .dot[data-index="${index}"]`
  );
  activeDot.classList.add("active");
}

function removeAllActiveStates() {
  gallerySlides.forEach((item) => {
    item.classList.remove("active");
  });
  galleryCarouselDots.forEach((d) => d.classList.remove("active"));
}
// End Gallery carousel
