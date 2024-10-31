  <style>
      html,
      body {
          position: relative;
          height: 100%;
      }

      body {
          background: #eee;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color: #000;
          margin: 0;
          padding: 0;
      }

      swiper-container {
          width: 100%;
          height: 100%;
      }

      swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
      }

      swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
      }

      swiper-container {
          width: 100%;
          height: 300px;
          margin: 20px auto;
      }

      .append-buttons {
          text-align: center;
          margin-top: 20px;
      }

      .append-buttons button {
          display: inline-block;
          cursor: pointer;
          border: 1px solid #007aff;
          color: #007aff;
          text-decoration: none;
          padding: 4px 10px;
          border-radius: 4px;
          margin: 0 10px;
          font-size: 13px;
      }
  </style>

  <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
      pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
      <swiper-slide><img src="img/elephants1.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/elephants2.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/elephants3.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/elephants4.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/elephants5.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/elephants6.jpg" alt=""></swiper-slide>
  </swiper-container>

  <!-- <p class="append-buttons">
    <button class="prepend-2-slides">Prepend 2 Slides</button>
    <button class="prepend-slide">Prepend Slide</button>
    <button class="append-slide">Append Slide</button>
    <button class="append-2-slides">Append 2 Slides</button>
  </p> -->


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script>
      const swiperEl = document.querySelector('swiper-container');
      const swiper = swiperEl.swiper;

      var appendNumber = 4;
      var prependNumber = 1;
      document
          .querySelector(".prepend-2-slides")
          .addEventListener("click", function(e) {
              e.preventDefault();
              swiper.prependSlide([
                  '<swiper-slide>Slide ' + --prependNumber + "</swiper-slide>",
                  '<swiper-slide>Slide ' + --prependNumber + "</swiper-slide>",
              ]);
          });
      document
          .querySelector(".prepend-slide")
          .addEventListener("click", function(e) {
              e.preventDefault();
              swiper.prependSlide(
                  '<swiper-slide>Slide ' + --prependNumber + "</swiper-slide>"
              );
          });
      document
          .querySelector(".append-slide")
          .addEventListener("click", function(e) {
              e.preventDefault();
              swiper.appendSlide(
                  '<swiper-slide>Slide ' + ++appendNumber + "</swiper-slide>"
              );
          });
      document
          .querySelector(".append-2-slides")
          .addEventListener("click", function(e) {
              e.preventDefault();
              swiper.appendSlide([
                  '<swiper-slide>Slide ' + ++appendNumber + "</swiper-slide>",
                  '<swiper-slide>Slide ' + ++appendNumber + "</swiper-slide>",
              ]);
          });
  </script>