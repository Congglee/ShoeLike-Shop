// window.addEventListener("load", function () {
//   const slider = document.querySelector(".slider");
//   const sliderMain = document.querySelector(".slider-main");
//   const sliderItems = document.querySelectorAll(".slider-item");
//   const nextBtn = document.querySelector(".slider-next");
//   const prevBtn = document.querySelector(".slider-prev");
//   const dotItems = document.querySelectorAll(".slider-dot-item");

//   const sliderItemWidth = sliderItems[0].offsetWidth; // Lấy ra độ rộng của phần tử
//   const slideLength = sliderItems.length; // Số lượng slide
//   // sliderMain.style.width = `${slideLength * sliderItemWidth}px `;
//   let positionX = 0;
//   let index = 0;
//   console.log(sliderItemWidth);
//   nextBtn.addEventListener("click", function () {
//     handleChangeSlide(1);
//   });
//   prevBtn.addEventListener("click", function () {
//     handleChangeSlide(-1);
//   });
//   [...dotItems].forEach((item) =>
//     item.addEventListener("click", function (e) {
//       [...dotItems].forEach((el) => el.classList.remove("active"));
//       e.target.classList.add("active");
//       const slideIndex = parseInt(e.target.dataset.index); // Lấy ra thuộc tính data-index trong các thẻ có class là slide-dot-item
//       index = slideIndex;
//       positionX = -1 * index * sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//     })
//   );
//   function handleChangeSlide(direction) {
//     if (direction === 1) {
//       if (index >= slideLength - 1) {
//         index = slideLength - 1;
//         return;
//       }
//       positionX = positionX - sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//       index++;
//       console.log(index);
//     } else if (direction === -1) {
//       if (index <= 0) {
//         index = 0;
//         return;
//       }
//       positionX = positionX + sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//       index--;
//       console.log("prev slide");
//     }
//     [...dotItems].forEach((el) => el.classList.remove("active"));
//     dotItems[index].classList.add("active");
//   }
// });

$(document).ready(function () {
  $(".slider").slick({
    autoplay: true,
    arrows: true,
    autoplaySpeed: 3000,
    prevArrow:
      "<button type='button' class='slick-arrow slick-slider-prev slick-slider-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-arrow slick-slider-next slick-slider-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    dots: true,
  });
});

$(document).ready(function () {
  $(".brand-list").slick({
    infinite: true,
    arrows: false,
    slidesToShow: 5,
    slidesToScroll: 4,
    speed: 400,
    autoplay: true,
    autoplaySpeed: 2500,
  });
});

$(document).ready(function () {
  $(".product-new-list").slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    prevArrow:
      "<button type='button' class='slick-arrow slick-product-prev slick-product-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-arrow slick-product-next slick-product-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
});
