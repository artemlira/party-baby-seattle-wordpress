(function ($) {
  $(".home-hero-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 100,
    autoplay: true,
    lazyLoad: "ondemand",
    adaptiveHeight: true,
    fade: true,
    dots: true,
    arrows: false,
    // prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    //nextArrow: '<button type="button" class="slick-next">Next</button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  // wow animate
  wow = new WOW({
    boxClass: "wow", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
  });
  wow.init();

  // Функція для переходу в повноекранний режим
  var elem = document.documentElement; // Посилання на весь документ
  function openFullscreen() {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) {
      /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
      /* IE11 */
      elem.msRequestFullscreen();
    }
  }

  // Функція для виходу з повноекранного режиму
  function closeFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) {
      /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
      /* IE11 */
      document.msExitFullscreen();
    }
  }

  // Зупиняємо всі відео на сторінці
  $(".vacancies-page video").each(function () {
    this.pause(); // Зупиняємо кожне відео
  });
  $(".partners-page video").each(function () {
    this.pause(); // Зупиняємо кожне відео
  });

  $(".sub-menu").hover(
    function () {
      // При наведении мыши добавляем класс к родительскому элементу
      $(this).closest(".menu-item-has-children").addClass("highlight");
    },
    function () {
      // При убирании наведения мыши удаляем класс у родительского элемента
      $(this).closest(".menu-item-has-children").removeClass("highlight");
    },
  );

  $(".trends-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    centerMode: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Инициализируем Swiper
  const swiper = new Swiper(".trends-swiper", {
    slidesPerView: 1.2,
    spaceBetween: 20,
    centeredSlides: false,
    loop: true,
    speed: 500,
    grabCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      900: {
        slidesPerView: 3,
        spaceBetween: 64,
        centeredSlides: true,
      },
    },
  });

  $(".home-testimonials-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  if ($(".vimeo-video-container").length > 0) {
    $(".vimeo-video-container").slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      autoplay: false,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  $(".product-slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: false,
    asNavFor: ".product-slider-nav",
  });
  var sLightboxProduct = $(".product-slider-for");
  sLightboxProduct.slickLightbox({
    lazy: true,
    src: "src",
    closeOnBackdropClick: false,
    layouts: {
      closeButton:
        '<button type="button" class="slick-lightbox-close"></button>',
    },
    itemSelector: ".slider-item",
    caption: function (element, info) {
      var span = $(element).parent().find(".desc");
      return span.html();
    },
  });
  $(".product-slider-for")
    .slickLightbox()
    .on({
      "show.slickLightbox": function () {
        console.log("A `show.slickLightbox` event triggered.");

        $("body").addClass("modal-active");
        $(".slick-lightbox-inner").prepend('<span class="fullscreen"></span>');
        $(".fullscreen").on("click", function () {
          if (
            !document.fullscreenElement &&
            !document.webkitFullscreenElement &&
            !document.msFullscreenElement
          ) {
            openFullscreen(); // Включаємо повноекранний режим
            $(this).addClass("active");
          } else {
            closeFullscreen(); // Виходимо з повноекранного режиму
            $(this).removeClass("active");
          }
        });
      },
      "hide.slickLightbox": function () {
        console.log("A `hide.slickLightbox` event triggered.");
        closeFullscreen(); // Виходимо з повноекранного режиму
        $("body").removeClass("modal-active");
      },
    });

  $(".product-slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".product-slider-for",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });

  if ($(".carousel-logos").length > 0) {
    $(".carousel-logos").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
          },
        },
      ],
    });
  }
  // blog-posts-slider
  if ($(".blog-posts-slider").length > 0) {
    $(".blog-posts-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      autoplay: false,
      autoplaySpeed: 2000,
      className: "center",
      centerMode: true,
      infinite: true,
      centerPadding: "20px",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  if ($(".vacansies-videos-slider").length > 0) {
    $(".vacansies-videos-slider").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      infinite: false,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
          },
        },
      ],
    });
  }

  $(".partners-videos-slider").slick({
    centerMode: true,
    centerPadding: "0px",
    speed: 500,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          variableWidth: false,
          dots: true,
          autoplay: true,
        },
      },
    ],
  });
  $(".partners-videos-slider").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      console.log("beforeChange", currentSlide, nextSlide);
    },
  );
  $(".partners-videos-slider").on(
    "afterChange",
    function (event, slick, currentSlide) {
      console.log("afterChange", currentSlide);
    },
  );

  $(".home-gallery").each(function () {
    var slider = $(this);
    slider.slick({
      arrows: true,
      dots: false,
      accessibility: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 5000,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 786,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });

    var sLightbox = $(this);
    sLightbox.slickLightbox({
      lazy: true,
      src: "src",
      closeOnBackdropClick: false,
      layouts: {
        closeButton:
          '<button type="button" class="slick-lightbox-close"></button>',
      },
      itemSelector: ".gallery-items .desc",
      caption: function (element, info) {
        var span = $(element).parent().find(".desc");
        return span.html();
      },
    });
  });
  $(".home-gallery")
    .slickLightbox()
    .on({
      "show.slickLightbox": function () {
        console.log("A `show.slickLightbox` event triggered.");
        //$('#page').addClass('modal');
        $("body").addClass("modal-active");
        // Перемикання повноекранного режиму по кліку на .fullscreen
        $(".slick-lightbox-inner").prepend('<span class="fullscreen"></span>');
        $(".fullscreen").on("click", function () {
          if (
            !document.fullscreenElement &&
            !document.webkitFullscreenElement &&
            !document.msFullscreenElement
          ) {
            openFullscreen(); // Включаємо повноекранний режим
            $(this).addClass("active");
          } else {
            closeFullscreen(); // Виходимо з повноекранного режиму
            $(this).removeClass("active");
          }
        });
      },
      "hide.slickLightbox": function () {
        console.log("A `hide.slickLightbox` event triggered.");
        closeFullscreen(); // Виходимо з повноекранного режиму
        $("body").removeClass("modal-active");
      },
    });

  //sound on home video
  $(".sound-on").on("click", function (e) {
    e.stopPropagation(); // Предотвращаем всплытие события
    var video = $("#reserveVideo").get(0);
    if (video.muted) {
      video.muted = false;
      // Проверяем, не на паузе ли видео, перед вызовом play()
      if (video.paused) {
        video.play();
      }
      $(".sound-on").addClass("on");
    } else {
      video.muted = true;
      $(".sound-on").removeClass("on");
    }
  });

  // Код для второго видео остается без изменений
  $(".sound-on-2").on("click", function () {
    var video = $("#reserveVideo2").get(0);
    if (video.muted) {
      video.muted = false;
      video.play();
      $(".sound-on-2").addClass("on");
    } else {
      video.muted = true;
      $(".sound-on-2").removeClass("on");
    }
  });
  // $(".sound-on-3").on("click", function () {
  //   var video = $("#reserveVideo").get(0);
  //   if (video.muted) {
  //     video.muted = false;
  //     video.play();
  //     $(".sound-on").text("Turn sound off!");
  //     $(".sound-on-3").addClass("on");
  //   } else {
  //     video.muted = true;
  //     $(".sound-on").text("Turn sound on!");
  //     $(".sound-on-3").removeClass("on");
  //   }
  //   console.log("fewfew");
  // });

  //sound on home video - улучшенная версия для iOS
  // $(document).ready(function () {
  //   console.log("DOM загружен");
  //
  //   // Делаем отладочную проверку всех элементов
  //   console.log(
  //     "Найдено элементов video#reserveVideo:",
  //     $("#reserveVideo").length,
  //   );
  //   console.log("Найдено элементов .sound-on:", $(".sound-on").length);
  //   console.log(
  //     "Найдено элементов .sound-control:",
  //     $(".sound-control").length,
  //   );
  //
  //   // Первое видео
  //   const video1 = document.getElementById("reserveVideo");
  //
  //   if (video1) {
  //     // Загрузка и воспроизведение первого видео
  //     video1.load();
  //     video1.muted = true;
  //
  //     try {
  //       video1.play().catch(function (error) {
  //         console.log("Автовоспроизведение первого видео не удалось:", error);
  //         $(video1).parent().addClass("waiting-for-interaction");
  //       });
  //     } catch (e) {
  //       console.log("Ошибка при попытке воспроизведения видео:", e);
  //     }
  //
  //     // Обработчик для первого видео
  //     $(video1).on("click", function () {
  //       console.log("Клик на первом видео");
  //       try {
  //         video1.play().catch(console.error);
  //         $(video1).parent().removeClass("waiting-for-interaction");
  //       } catch (e) {
  //         console.log("Ошибка при клике на видео:", e);
  //       }
  //     });
  //   } else {
  //     console.error("Элемент #reserveVideo не найден!");
  //   }
  //
  //   // Пробуем все возможные способы прикрепить обработчик к кнопке звука первого видео
  //
  //   // Способ 1: Прямое прикрепление обработчика
  //   $(".sound-on").on("click", function (e) {
  //     console.log("Клик на .sound-on (способ 1)");
  //     e.stopPropagation();
  //     toggleSound(video1, $(this));
  //   });
  //
  //   // Способ 2: Прикрепление через родительский элемент
  //   $(".sound-control .sound-on").on("click", function (e) {
  //     console.log("Клик на .sound-control .sound-on (способ 2)");
  //     e.stopPropagation();
  //     toggleSound(video1, $(this));
  //   });
  //
  //   // Способ 3: Делегирование события
  //   $(".sound-control").on("click", ".sound-on", function (e) {
  //     console.log("Клик на .sound-on через делегирование (способ 3)");
  //     e.stopPropagation();
  //     toggleSound(video1, $(this));
  //   });
  //
  //   // Способ 4: Использование document для делегирования
  //   $(document).on("click", ".sound-on", function (e) {
  //     console.log("Клик на .sound-on через document (способ 4)");
  //     e.stopPropagation();
  //     toggleSound(video1, $(this));
  //   });
  //
  //   // Добавляем явные размеры и курсор к кнопке звука, если она невидима или слишком маленькая
  //   $(".sound-on").css({
  //     "min-width": "30px",
  //     "min-height": "30px",
  //     display: "block",
  //     cursor: "pointer",
  //     "z-index": "999", // Высокий z-index чтобы быть поверх других элементов
  //   });
  //
  //   // Второе видео
  //   const video2 = document.getElementById("reserveVideo2");
  //
  //   if (video2) {
  //     // Загрузка и воспроизведение второго видео
  //     video2.load();
  //     video2.muted = true;
  //
  //     try {
  //       video2.play().catch(function (error) {
  //         console.log("Автовоспроизведение второго видео не удалось:", error);
  //       });
  //     } catch (e) {
  //       console.log("Ошибка при попытке воспроизведения второго видео:", e);
  //     }
  //
  //     // Обработчик кнопки звука второго видео
  //     $(".sound-on-2").on("click", function (e) {
  //       console.log("Клик на .sound-on-2");
  //       e.stopPropagation();
  //       toggleSound(video2, $(this));
  //     });
  //
  //     // Клик на второе видео
  //     $(video2).on("click", function () {
  //       console.log("Клик на втором видео");
  //       try {
  //         video2.play().catch(console.error);
  //       } catch (e) {
  //         console.log("Ошибка при клике на второе видео:", e);
  //       }
  //     });
  //   } else {
  //     console.error("Элемент #reserveVideo2 не найден!");
  //   }
  //
  //   // Общая функция для переключения звука
  //   function toggleSound(videoElement, button) {
  //     console.log("Переключение звука:", videoElement.id);
  //     if (videoElement) {
  //       videoElement.muted = !videoElement.muted;
  //       button.toggleClass("on", !videoElement.muted);
  //
  //       console.log("Звук " + (videoElement.muted ? "выключен" : "включен"));
  //
  //       if (videoElement.paused) {
  //         try {
  //           videoElement.play().catch(function (error) {
  //             console.log(
  //               "Не удалось воспроизвести видео после включения звука:",
  //               error,
  //             );
  //           });
  //         } catch (e) {
  //           console.log("Ошибка при попытке воспроизведения:", e);
  //         }
  //       }
  //     } else {
  //       console.error("Видео элемент не определен!");
  //     }
  //   }
  // });

  // $("#reserveVideo").on("click", function () {
  //   this.play();
  //   if (this.muted) {
  //     this.muted = false;
  //     $(".sound-on").text("Turn sound off!");
  //     $(".sound-on-3").addClass("on");
  //   }
  // });

  //video careers/vacancies page
  $(".video-container").on("click", function () {
    var video = $(this).find("video").get(0);
    var icon = $(this).find("svg");
    if (video.muted) {
      video.muted = false;
      video.play();
      icon.hide();
      $(this).find(".sound-toggle").text("Turn sound off!");
    } else {
      video.muted = true;
      video.pause();
      icon.show();
      $(this).find(".sound-toggle").text("Turn sound on!");
    }
  });

  //mobile menu
  $(".open-menu").on("click", function () {
    $(".mobile-menu-container").addClass("active");
    $("body").addClass("modal-active");
  });
  $(".close-mobile-menu").on("click", function () {
    $(".mobile-menu-container").removeClass("active");
    $(".mobile-menu-container .menu-item-has-children .sub-menu").animate(
      {height: "0"},
      300,
    ); // Скрываем меню
    $(".mobile-menu-container .menu-item-has-children").removeClass("active");
    $("body").removeClass("modal-active");
  });

  // close modal
  $(".close-modal").on("click", function () {
    $(".modal").fadeOut();
    $("body").removeClass("modal-active");
    $(".modal-booking").fadeOut();
  });

  // choose your ball
  $(".choose-your-ball").on("click", function () {
    $(".choose-your-ball-modal").fadeIn();
    $("body").addClass("modal-active");
  });

  $(window).click(function (event) {
    if ($(event.target).is(".choose-your-ball-modal")) {
      $(".choose-your-ball-modal").fadeOut();
      $("body").removeClass("modal-active");
    }
  });

  // modal booking

  $(".booking-cta-blocks .text a").addClass("modal-booking-open");

  $(".modal-booking-open").on("click", function () {
    $(".modal-booking").fadeIn();
    $("body").addClass("modal-active");
  });

  $(window).click(function (event) {
    if ($(event.target).is(".modal-booking")) {
      $(".modal-booking").fadeOut();
      $("body").removeClass("modal-active");
    }
  });

  // search panel
  $(".close-search").on("click", function () {
    $(".search-form").hide();
    $(".open-search").show();
    $(".close-search").hide();
  });
  $(".open-search").on("click", function () {
    $(".search-form").show();
    $(".open-search").hide();
    $(".close-search").show();
  });

  //
  // Получаем текущий URL
  const urlParams = new URLSearchParams(window.location.search);
  const searchTerm = urlParams.get("s"); // Получаем значение параметра 's'

  if (searchTerm) {
    // Ищем и выделяем все совпадения слова
    $(".search-posts .post-excerpt").html(function (_, html) {
      const regex = new RegExp(`(${searchTerm})`, "gi"); // Создаём регулярное выражение для поиска
      return html.replace(regex, '<span class="highlight">$1</span>'); // Заменяем совпадения на выделенный текст
    });
    $(".search-posts .post-title").html(function (_, html) {
      const regex = new RegExp(`(${searchTerm})`, "gi"); // Создаём регулярное выражение для поиска
      return html.replace(regex, '<span class="highlight">$1</span>'); // Заменяем совпадения на выделенный текст
    });
  }

  //
  var totalHeight = 0;
  $(".sub-menu li").each(function () {
    totalHeight += $(this).outerHeight(true); // outerHeight(true) включает вертикальные margin
  });

  $(".mobile-menu-container .menu-item-has-children").on("click", function () {
    var submenu = $(this).find(".sub-menu"); // Знаходимо підменю
    var parentMenu = $(".menu-main-menu-container"); // Головний контейнер меню

    // Розрахунок висоти підменю
    if (!submenu.data("height")) {
      submenu.css("height", "auto"); // Ставимо 'auto' для правильного розрахунку
      var totalHeight = submenu.outerHeight(true); // Розрахунок висоти підменю
      submenu.data("height", totalHeight); // Зберігаємо висоту в data-атрибут
      submenu.css("height", "0"); // Повертаємо висоту в 0
    }

    // Переключаємо висоту підменю
    if (submenu.height() === 0) {
      $(this).addClass("active");
      submenu.animate(
        {height: submenu.data("height") + "px"},
        300,
        function () {
          parentMenu.css("height", "auto"); // Встановлюємо авто-висоту батьківського контейнера
        },
      );
    } else {
      submenu.animate({height: "0"}, 300, function () {
        $(this).closest(".menu-item-has-children").removeClass("active");
        parentMenu.css("height", "auto"); // Встановлюємо авто-висоту після закриття
      });
    }
  });

  // Initialize all accordions without the icons option
  //faq
  $(
    ".balloon_faq .accordion-header, .events_faq .accordion-header, .about_faq .accordion-header",
  ).click(function () {
    $(this).toggleClass("active");
    const content = $(this).next(".accordion-content");
    content.toggle("fast");
  });

  $("a").on("click", function (event) {
    if (this.hash !== "") {
      //event.preventDefault();
      var hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - 60, // Відступ 60 пікселів зверху
        },
        800,
        function () {
          // Оновлюємо URL без перескакування сторінки
          history.pushState(null, null, hash);
        },
      );
    }
  });
  if (window.location.hash) {
    var hash = window.location.hash;
    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top - 60, // Відступ 60 пікселів зверху
      },
      800,
    );
  }

  var player;
  // Відкриття модального вікна по кліку на картинку
  $(".video-item").on("click", function () {
    var videoIframe = $(this).data("video");
    $("#modal-video-container").html(videoIframe); // Додаємо iframe до модального вікна
    $("#video-modal").fadeIn();

    // Ініціалізуємо Vimeo Player після додавання iframe
    var iframe = $("#modal-video-container iframe")[0];
    player = new Vimeo.Player(iframe);

    // Починаємо відтворення відео
    player.play();
  });

  // Закриття модального вікна
  $(".close-btn, #video-modal").on("click", function () {
    $("#video-modal").fadeOut();

    // Зупиняємо відео перед очищенням контейнера
    if (player) {
      player.pause().then(function () {
        $("#modal-video-container").html(""); // Видаляємо iframe після зупинки відео
      });
    }
  });

  // Зупиняємо пропагування кліка всередині контенту модального вікна
  $(".modal-content").on("click", function (e) {
    e.stopPropagation();
  });

  //wpcf7, file input
  $('input[name="file-310"]').change(function (e) {
    var fileName = e.target.files[0].name;
    // $('.file-upload-wrapper').attr('data-text', fileName);
    console.log(fileName);

    $(".wpcf7 .file-info").text(fileName);
    $('.contact-form-vacancy input[type="file"]').removeClass("invalid");
    $('.contact-form-vacancy input[type="file"]').addClass("done");
  });
  document.addEventListener(
    "wpcf7invalid",
    function (event) {
      if ($('.contact-form-vacancy input[type="file"]').hasClass("done")) {
        console.log("file uploaded");
      } else {
        $('.contact-form-vacancy input[type="file"]').addClass("invalid");
      }
    },
    false,
  );

  //show booking form single product
  $(".single-product .open-booking-form").on("click", function () {
    // Show the booking form
    $("#booking_form").show();

    // Smooth scroll to the booking form
    $("html, body").animate(
      {
        scrollTop: $("#booking_form").offset().top,
      },
      600,
    ); // Adjust duration as needed (600ms for smooth scrolling)
  });

  // Share on Facebook
  $(".share-items .facebook").on("click", function (e) {
    e.preventDefault();
    const url = encodeURIComponent(window.location.href);
    const fbUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
    window.open(fbUrl, "_blank", "width=600,height=400");
  });

  // Share on X (Twitter)
  $(".share-items .twitter").on("click", function (e) {
    e.preventDefault();
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent(document.title);
    const twitterUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`;
    window.open(twitterUrl, "_blank", "width=600,height=400");
  });

  // Share on LinkedIn
  $(".share-items .linkedin").on("click", function (e) {
    e.preventDefault();
    const url = encodeURIComponent(window.location.href);
    const linkedInUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
    window.open(linkedInUrl, "_blank", "width=600,height=400");
  });

  // Copy Link to Clipboard
  $(".share-items .copy").on("click", function (e) {
    e.preventDefault();
    const url = window.location.href;
    navigator.clipboard
      .writeText(url)
      .then(() => {
        alert("Link copied to clipboard!");
      })
      .catch((err) => {
        alert("Failed to copy link: " + err);
      });
  });

  // Print Page
  $(".share-items .print").on("click", function (e) {
    e.preventDefault();
    window.print();
  });

  // pop up settings
  function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  function getCookie(name) {
    const cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      // Проверяем, совпадает ли имя cookie
      if (cookie.indexOf(name + "=") === 0) {
        return cookie.substring(name.length + 1); // Возвращаем значение cookie
      }
    }
    return null; // Если cookie не найден
  }

  // if (getCookie('pop_up_download_guide') === 'viewed') {
  //     console.log('Cookie exists: User has already viewed the guide.');
  // } else {
  //     console.log('Cookie does not exist: Showing the guide popup.');
  //     setTimeout(function () {
  //         $('.pop-up-download-guide').fadeIn(); // Плавное появление окна
  //     }, 60000); // 1 минута = 60000 миллисекунд
  // }

  // $('.close-pop-up-download-guide').on('click', function (e) {
  //     e.preventDefault();
  //     $('.pop-up-download-guide').fadeOut();
  //     setCookie('pop_up_download_guide', 'viewed', 7); // Зберігаємо на 7 днів
  // });

  //
  $(".wpcf7-select").change(function (evt) {
    var selected;
    selected = $(this).val();
    if (selected === "Select Trailer Size") {
    } else {
      $(this).css("color", "#151515");
    }
  });

  // Функція для форматування числа з комами
  function formatNumberWithCommas(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  // Функція для анімації чисел
  function animateCounter($element, start, end, duration) {
    $({count: start}).animate(
      {count: end},
      {
        duration: duration,
        easing: "linear",
        step: function (now) {
          $element.text(formatNumberWithCommas(Math.floor(now))); // Форматуємо число з комами
        },
        complete: function () {
          $element.text(formatNumberWithCommas(end)); // Гарантуємо фінальне значення
        },
      },
    );
  }

  // Функція для перевірки, чи елемент у видимій зоні
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Основна функція для запуску анімації
  function animateNumbersOnScroll(selector) {
    function checkAndAnimateCounters() {
      $(selector).each(function () {
        const $this = $(this);
        const start = parseInt($this.data("start"), 10);
        const end = parseInt($this.data("end"), 10);
        const duration = 2000; // Тривалість анімації (в мілісекундах)

        if (isElementInViewport(this) && !$this.hasClass("animated")) {
          $this.addClass("animated"); // Додаємо клас, щоб уникнути повторної анімації
          animateCounter($this, start, end, duration);
        }
      });
    }

    // Виконуємо перевірку одразу при завантаженні сторінки
    checkAndAnimateCounters();

    // Виконуємо перевірку при прокручуванні
    $(window).on("scroll", function () {
      checkAndAnimateCounters();
    });
  }

  animateNumbersOnScroll(".counter");

  // Booking-filters

  $(".booking-filters a").on("click", function (e) {
    e.preventDefault();

    let cat = $(this).attr("data-category");
    $(".booking-filters a").removeClass("active");
    $(this).addClass("active");
    console.log(cat);

    $(".booking-list-container .package-item").hide();

    let matchingItems = $(
      '.booking-list-container .package-item[data-category="' + cat + '"]',
    );

    matchingItems.show().removeClass("wow fadeIn").css({
      visibility: "visible",
      "animation-name": "none",
      "animation-delay": "0s",
      animation: "none",
    });

    matchingItems
      .find(".wow")
      .css({
        visibility: "visible",
        "animation-name": "none",
        "animation-delay": "0s",
        animation: "none",
      })
      .removeClass("wow fadeIn");

    if (matchingItems.length > 0) {
      $("html, body").animate(
        {
          scrollTop: matchingItems.first().offset().top - 275,
        },
        600,
      );
    }
  });

  //
  $('.booking-filters a[data-category="all"]').on("click", function (e) {
    e.preventDefault();

    $(".booking-list-container .package-item")
      .show()
      .css("visibility", "visible");

    $("html, body").animate(
      {
        scrollTop: $(".booking-list-container").offset().top - 275,
      },
      600,
    );
  });

  var $filters = $(".booking-filters");
  var $container = $(".packages-container");
  var offsetTop = 170;

  $(window).on("scroll", function () {
    var containerTop = $container.offset().top;
    var scrollTop = $(window).scrollTop();

    if (scrollTop + offsetTop >= containerTop) {
      $filters.addClass("sticky");
    } else {
      $filters.removeClass("sticky");
    }
  });

  // function toggleDescriptionOnResize() {
  //     if ($(window).width() > 767) {

  //         $('.package-description').show();
  //     } else {

  //         $('.package-description').hide();

  //         $('.see-more').removeClass('active').text('See More');
  //     }
  // }

  // toggleDescriptionOnResize();

  // $(window).on('resize', function () {
  //     toggleDescriptionOnResize();
  // });

  $(".see-more").on("click", function (e) {
    e.preventDefault();

    if ($(window).width() <= 767) {
      var $description = $(this).next(".package-description");

      $description.slideToggle(300);

      $(this).toggleClass("active");

      if ($(this).hasClass("active")) {
        $(this).text("See less");
      } else {
        $(this).text("See more");
      }
    }
  });

  $(".open-package-modal").on("click", function (e) {
    e.preventDefault();

    var iframeCode = $(this).data("iframe");
    var $modal = $(this).next(".modal-package");
    var $iframeContainer = $modal.find(".iframe-container");

    $iframeContainer.removeClass("loaded");

    var $iframe = $("<iframe>", {
      src: $(iframeCode).attr("src"),
      width: "100%",
      height: "800",
      frameborder: 0,
      title: "Schedule Appointment",
    });

    $iframe.on("load", function () {
      $iframeContainer.addClass("loaded");
    });

    $iframeContainer.html('<div class="iframe-loader"></div>').append($iframe);

    $modal.addClass("open");
    $modal.show();
  });

  $(".modal-package .close-modal, .modal-package .modal-overlay").on(
    "click",
    function () {
      var $modal = $(this).closest(".modal-package");
      $modal.removeClass("open");
      $modal.find(".iframe-container").removeClass("loaded").html("");
    },
  );

  // fancybox page balloon gallery
  jQuery(document).ready(function ($) {
    $("[data-fancybox]").fancybox({
      buttons: [],
      arrows: false,
      infobar: false,
      loop: false,
      baseClass: "fancybox-custom-modal",
      smallBtn: false,
      toolbar: false,
      hideScrollbar: false,
      preventCaptionOverlap: true,
      afterShow: function (instance, current) {
        $(".fancybox-custom-close").on("click", function () {
          $.fancybox.close();
        });
      },
      beforeShow: function () {
        var scrollPos = $(window).scrollTop();
        $("html").addClass("fancybox-margin-fix");

        setTimeout(function () {
          $(window).scrollTop(scrollPos);
        }, 10);
      },
    });
  });
})(jQuery);

//Comparison Slider

const imageComparisonSlider = document.querySelector(
  '[data-component="image-comparison-slider"]',
);

function setSliderstate(e, element) {
  const sliderRange = element?.querySelector("[data-image-comparison-range]");

  if (e.type === "input") {
    sliderRange.classList.add("image-comparison__range--active");
    return;
  }

  sliderRange.classList.remove("image-comparison__range--active");
  element.removeEventListener("mousemove", moveSliderThumb);
}

function moveSliderThumb(e) {
  const sliderRange = document.querySelector("[data-image-comparison-range]");
  const thumb = document.querySelector("[data-image-comparison-thumb]");
  let position = e.layerY - 20;

  if (e.layerY <= sliderRange.offsetTop) {
    position = -20;
  }

  if (e.layerY >= sliderRange.offsetHeight) {
    position = sliderRange.offsetHeight - 20;
  }

  thumb.style.top = `${position}px`;
}

function moveSliderRange(e, element) {
  const value = e.target.value;
  const slider = element.querySelector("[data-image-comparison-slider]");
  const imageWrapperOverlay = element.querySelector(
    "[data-image-comparison-overlay]",
  );

  slider.style.left = `${value}%`;
  imageWrapperOverlay.style.width = `${value}%`;

  element.addEventListener("mousemove", moveSliderThumb);
  setSliderstate(e, element);
}

function init(element) {
  if (element) {
    const sliderRange = element.querySelector("[data-image-comparison-range]");

    if ("ontouchstart" in window === false) {
      sliderRange.addEventListener("mouseup", (e) => setSliderstate(e, element));
      sliderRange.addEventListener("mousedown", moveSliderThumb);
    }

    sliderRange.addEventListener("input", (e) => moveSliderRange(e, element));
    sliderRange.addEventListener("change", (e) => moveSliderRange(e, element));
  }
}

init(imageComparisonSlider);

document.addEventListener('DOMContentLoaded', function () {
  // Обработчики для всех видео превью
  document.querySelectorAll('.daycare-video-preview').forEach(preview => {
    const videoId = preview.dataset.videoId;
    const modal = document.getElementById(`modal-${videoId}`);

    // Клик по кнопке воспроизведения
    preview.querySelector('.daycare-video-play-button').addEventListener('click', () => {
      openVideoModal(videoId);
    });

    // Клик по кнопке закрытия
    modal.querySelector('.daycare-video-close-button').addEventListener('click', () => {
      closeVideoModal(videoId);
    });

    // Клик по оверлею
    modal.querySelector('.daycare-video-modal-overlay').addEventListener('click', () => {
      closeVideoModal(videoId);
    });
  });

  // Закрытие по ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      const activeModal = document.querySelector('.daycare-video-modal.active');
      if (activeModal) {
        const videoId = activeModal.id.replace('modal-', '');
        closeVideoModal(videoId);
      }
    }
  });
});

function openVideoModal(videoId) {
  const modal = document.getElementById(`modal-${videoId}`);
  const playerContainer = document.getElementById(`player-container-${videoId}`);

  // Создаем iframe
  const iframe = document.createElement('iframe');
  iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=1&rel=0&modestbranding=1`);
  iframe.setAttribute('frameborder', '0');
  iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
  iframe.setAttribute('allowfullscreen', '');

  // Очищаем контейнер и добавляем iframe
  playerContainer.innerHTML = '';
  playerContainer.appendChild(iframe);

  // Показываем модалку
  modal.classList.add('active');
  document.body.classList.add('modal-open');
}

function closeVideoModal(videoId) {
  const modal = document.getElementById(`modal-${videoId}`);
  const playerContainer = document.getElementById(`player-container-${videoId}`);

  // Очищаем плеер
  playerContainer.innerHTML = '';

  // Скрываем модалку
  modal.classList.remove('active');
  document.body.classList.remove('modal-open');
}