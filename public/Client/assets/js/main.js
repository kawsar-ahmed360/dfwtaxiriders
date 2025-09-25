(function ($) {
   "use strict";
   var wind = $(window);
   var parallaxSlider;
   var parallaxSliderOptions = {
      speed: 1000,
      autoplay: true,
      parallax: true,
      loop: true,
      on: {
         init: function () {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
               $(swiper.slides[i])
                  .find(".bg-img")
                  .attr({
                     "data-swiper-parallax": 0.75 * swiper.width,
                  });
            }
         },
         resize: function () {
            this.update();
         },
      },
      pagination: {
         el: ".slider-prlx .parallax-slider .swiper-pagination",
         dynamicBullets: true,
         clickable: true,
      },
      navigation: {
         nextEl: ".slider-prlx .parallax-slider .next-ctrl",
         prevEl: ".slider-prlx .parallax-slider .prev-ctrl",
      },
   };
   parallaxSlider = new Swiper(".slider-prlx .parallax-slider", parallaxSliderOptions);
   // Var Background image
   var pageSection = $(".bg-img, section");
   pageSection.each(function (indx) {
      if ($(this).attr("data-background")) {
         $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
   });

   // -------- Main Menu
   $(".hamburger_menu").click(function () {
      $(".main_menu_wrp").slideToggle(500);
      $(this).toggleClass("SHOW");
   });

   $(".main_menu_wrp ul li.has-child a:not('.sub-menu a')").each(function (index) {
      $(this).click(function (event) {
         $(this).parent().siblings().children("a").removeClass("active");
         $(this).next(".sub-menu").slideToggle();
         $(this).toggleClass("active");
         $(this).parent().siblings().children().next().slideUp();
         event.preventDefault();
      });
      $(".sub-menu").click(function (e) {
         e.stopPropagation();
         e.stopImmediatePropagation();
      });
   });

   // --------- Home rev slider start
   var sliderHeight = $(".home-slider").outerHeight();
   if ($("#rev_slider_202_1").length > 0) {
      var tpj = jQuery;
      var revapi202;
      tpj(document).ready(function () {
         if (tpj("#rev_slider_202_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_202_1");
         } else {
            revapi202 = tpj("#rev_slider_202_1")
               .show()
               .revolution({
                  sliderType: "standard",
                  jsFileLocation: "js",
                  sliderLayout: "fullwidth",
                  dottedOverlay: "none",
                  delay: 5000,
                  touchenabled: "on",

                  navigation: {
                     arrows: {
                        enable: true,
                        style: "gyges",
                        tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                     },
                  },

                  responsiveLevels: [1500, 1400, 992, 700],
                  visibilityLevels: [1500, 1000, 750, 320],
                  gridwidth: [1300, 1000, 750, 320],
                  gridheight: [sliderHeight],
                  lazyType: "none",
                  shadow: 0,
                  spinner: "off",
                  stopLoop: "off",
                  stopAfterLoops: -1,
                  stopAtSlide: -1,
                  shuffle: "off",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                     simplifyAll: "off",
                     nextSlideOnWindowFocus: "off",
                     disableFocusListener: false,
                  },
               });
         }
      });
   }
   // Home rev slider end

   // ---------- About slider start
   if ($(".partner-video-slider__section-container__section-row__init").length > 0) {
      //Start Slick Image Count
      var $status = $(
         ".partner-video-slider__section-container__section-row__section-text-wapper__button__count .pagingInfo"
      );
      var $slickElement = $(".partner-video-slider__section-container__section-row__init");

      $slickElement.on("init reInit afterChange", function (event, slick, currentSlide, nextSlide) {
         var i = (currentSlide ? currentSlide : 0) + 1;
         $status.text(i + "/" + slick.slideCount);
      });
      //End Slick Image Count

      $(".partner-video-slider__section-container__section-row__init").slick({
         infinite: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: false,
         autoplaySpeed: 2000,
         prevArrow: $(".partner-video-slider-prev"),
         nextArrow: $(".partner-video-slider-next"),
      });
   }
   // About slider end

   // -------- parallax content height fix
   var featureContainers = $(".single-mini-feature");

   // Get the tallest height among all feature containers
   var tallestHeight = 0;
   featureContainers.each(function () {
      var containerHeight = $(this).outerHeight();
      if (containerHeight > tallestHeight) {
         tallestHeight = containerHeight;
      }
   });

   // Set the same height for all containers
   featureContainers.css("height", tallestHeight + "px");
   // parallax content height fix end

   // ---------- car details show
   $(".more-details").click(function (event) {
      event.preventDefault();

      // Find the corresponding .rate-details section
      var popup = $(this).closest(".car-collection").find(".rate-details");

      // Close any other open .rate-details sections
      $(".rate-details").not(popup).slideUp();

      // Slide down the clicked .rate-details section
      popup.slideDown();
   });

   $(".close").click(function () {
      $(this).closest(".rate-details").slideUp();
   });
   // ---------- car details show end

   // ----- Tab underline effect
   $(".underline").on("click", ".nav-item", function () {
      $(this).addClass("active").siblings().removeClass("active");
   });

   // ------- WOW JS
   $(window).on("load", function () {
      if ($(".wow").length) {
         var wow = new WOW({
            boxClass: "wow", // Animated element css class (default is wow)
            animateClass: "animated", // Animation css class (default is animated)
            offset: 30, // Distance to the element when triggering the animation (default is 0)
            mobile: false, // Trigger animations on mobile devices (default is true)
            live: true, // Act on asynchronously loaded content (default is true)
         });
         wow.init();
      }
   });

   // ------ Sponsor Slide owlCarousel
   $("#sponsor-slide").owlCarousel({
      loop: true,
      margin: 0,
      mouseDrag: true,
      autoplay: true,
      dots: false,
      fullscreen: false,
      smartSpeed: 800,
      responsiveClass: true,
      responsive: {
         0: {
            items: 1,
         },
         600: {
            items: 2,
         },
         1000: {
            items: 5,
         },
      },
   });

   //------------ nice select
   if ($(".Select").length > 0) {
      $(".Select").niceSelect();
   }
   // Handle form submission
   $("#myForm").submit(function (event) {
      event.preventDefault(); // Prevent default form submission

      // Call the custom validation function
      if (validateForm()) {
         // Form validation successful, proceed with form submission
         // Your form submission code goes here
         console.log("Form submitted successfully!");
      }
   });

   // contact-info content resize
   $(window).on("load resize", function () {
      let getOffset = $(".footer .container").offset().left;

      // menu offset , video  offset
      if ($(window).width() < 992) {
         $(".contact-info-content").css({ "padding-left": getOffset + 30 });
      } else {
         $(".contact-info-content").removeAttr("style");
      }
   });

   //--------- About page counter starts
   function DataCounter() {
      $(".countIt").each(function (e) {
         var start = $(this).attr("data-count-start");
         var end = $(this).attr("data-count-end");
         $(this).countTo({
            from: start,
            to: end,
            speed: 1200,
            onComplete: null,
         });
      });
   }

   var CheckOnce = false;

   if ($(".about-intro").length > 0) {
      $(window).scroll(function () {
         if ($(window).scrollTop() >= $(".about-intro").offset().top / 1.4) {
            if (CheckOnce == false) {
               DataCounter();
               CheckOnce = true;
            }
         }
      });
   }
   if ($(".home-counter").length > 0) {
      $(window).scroll(function () {
         if ($(window).scrollTop() >= $(".home-counter").offset().top / 1.4) {
            if (CheckOnce == false) {
               DataCounter();
               CheckOnce = true;
            }
         }
      });
   }
   //--------- About page counter end

   // From Date field
   if ($(".datepicker").length > 0) {
      $(".datepicker").datepicker({
         format: "mm/dd/yyyy",
         toggleActive: true,
         todayBtn: "linked",
         changeMonth: true,
         changeYear: true,
         KeyboardEvent: true,
      });
   }

   if ($(".timepicker").length > 0) {
      $(".timepicker").datetimepicker({
         format: "hh:mm:ss a",
         icons: {
            up: "fa fa-angle-up",
            down: "fa fa-angle-down",
         },
      });
   }
   // ------ Vehicle More info show hide

   $(".vehicle-details").hide();

   $(".more-info_btn").on("click", function (event) {
      event.preventDefault();

      var vehicleDetails = $(this).closest(".vehicle-list_single").find(".vehicle-details");
      var moreInfoButton = $(this);

      // Check if the vehicle-details div is currently visible
      var isVisible = vehicleDetails.is(":visible");

      // Toggle the vehicle-details div visibility
      vehicleDetails.slideToggle();

      // Update the button text and icon based on the visibility state
      if (isVisible) {
         moreInfoButton.find("i").addClass("ti-angle-down").removeClass("ti-angle-up");
         moreInfoButton.find("span").text("More Info");
      } else {
         moreInfoButton.find("i").addClass("ti-angle-up").removeClass("ti-angle-down");
         moreInfoButton.find("span").text("Less Info");
      }
   });

   //----- booking summery price get
   // Function to handle vehicle selection
   $(".vehicle-title-select a.button").on("click", function (event) {
      event.preventDefault();
      var isSelected = $(this).hasClass("selected");
      if (!isSelected) {
         // Remove .selected class from any other previously selected vehicle
         $(".vehicle-title-select a.button").removeClass("selected");
         // Add .selected class to the currently selected vehicle
         $(this).addClass("selected");

         // Get the price of the selected vehicle
         // var vehiclePrice = $(this).closest(".vehicle-title-select").next(".vehicle-price").text();
         
         
       

         var price_Text = $('#total_amount_final').val();
         var hours_Text = $('#total_hours_distance').val();
         var vehiclePrice = price_Text * hours_Text;
         
           $('#total_hours_count').text(`${hours_Text}Hr`);
           $('#total_hours_count_two').text(`${hours_Text}Hr`);

         // Update the booking summary total price $160 / Hr (Min. 3hr)
         $(".selected-vehicle span:last-child").text(`$${vehiclePrice} / Hr`);
         // console.log(hours_price_cal);
         $(".total-price span:last-child").text(`$${vehiclePrice} / ${hours_Text}Hr`);

         // Calculate and update the 30% deposit
         var deposit = (parseFloat(vehiclePrice) * 0.3).toFixed(2);
         $(".to-pay span:last-child").text("$" + deposit);
      } else {
         // Unselect the vehicle
         $(this).removeClass("selected");
         // Clear the booking summary total price and deposit
         $(".selected-vehicle span:last-child").text("");
         $(".total-price span:last-child").text("");
         $(".to-pay span:last-child").text("");
      }
   });

   // ------ Billing address show hide
   $("#billing-address").hide();

   $("#billing_checked").on("change", function () {
      if ($(this).is(":checked")) {
         $("#billing-address").slideDown();
      } else {
         $("#billing-address").slideUp();
      }
   });
   // ------ Coupon code show hide
   $("#coupon").hide();

   $("#coupon_checked").on("change", function () {
      if ($(this).is(":checked")) {
         $("#coupon").slideDown();
      } else {
         $("#coupon").slideUp();
      }
   });

   // ------- payment method select start
   $(".payment-method li:first-child a").addClass("payment-method-selected");
   $(".payment-method li:first-child .checked-btn").show();

   $(".payment-method li a").click(function (e) {
       e.preventDefault();
       $(".payment-method li a").removeClass("payment-method-selected");
       $(".checked-btn").hide();
       $(this).addClass("payment-method-selected");
       $(this).siblings(".checked-btn").show();
   });
   // ------- payment method select end

   // ------ vehicle select sort starts
   // Function to filter the vehicle list based on selected options
   function filterVehicles() {
      var selectedPassengers = parseInt($("#passengersSelect").val());
      var selectedSuitcases = parseInt($("#suitcasesSelect").val());
      var selectedType = $("#typeSelect").val().toLowerCase();

      $(".vehicle-list_single").each(function () {
         var passengers = parseInt($(this).find(".more-info_icons_inner:eq(0) span").text());
         var suitcases = parseInt($(this).find(".more-info_icons_inner:eq(1) span").text());
         var type = $(this).find(".vehicle-title-select h4").text().toLowerCase();

         // Show the vehicle list item if it matches the selected options, or hide it if it doesn't match
         if (
            (!isNaN(selectedPassengers) ? passengers >= selectedPassengers : true) &&
            (!isNaN(selectedSuitcases) ? suitcases >= selectedSuitcases : true) &&
            (selectedType !== "" ? type === selectedType : true)
         ) {
            $(this).show();
         } else {
            $(this).hide();
         }
      });

      // Sort the vehicle list based on the vehicle titles (h4)
      var vehicleList = $(".vehicle-list");
      var vehicleItems = vehicleList.find(".vehicle-list_single:visible");
      vehicleItems.sort(function (a, b) {
         var titleA = $(a).find(".vehicle-title-select h4").text().toLowerCase();
         var titleB = $(b).find(".vehicle-title-select h4").text().toLowerCase();
         return titleA.localeCompare(titleB);
      });
      vehicleList.append(vehicleItems);
   }

   // Call the filter function when any select field is changed
   $("#passengersSelect, #suitcasesSelect, #typeSelect").on("change", filterVehicles);

   // Initially, show all vehicle list items and sort them by vehicle titles
   filterVehicles();

   // ------ vehicle select sort ends

   // ------- Multistep Booking form starts
     

   // ------- Multistep Booking form ends

})(jQuery);

// ------- Multistep Booking form starts
document.addEventListener("DOMContentLoaded", function () {
   let formSteps;
   const multiStepForm = document.querySelector("[data-multi-step]");

   if (multiStepForm !== null) {
       formSteps = [...multiStepForm.querySelectorAll("[data-step]")];
       let stepsListAfter = document.querySelectorAll(".registration-list li");

       let currentStep = formSteps.findIndex((step) => {
           return step.classList.contains("active");
       });

       if (currentStep < 0) {
           currentStep = 0;
           showCurrentStep();
       }

       const clickHandler = (e) => {
           let incrementor;
           if (e.target.hasAttribute("data-next")) {
               incrementor = 1;
               if (e.target.hasAttribute("data-vehicle-select")) {
                   // Check if any vehicle is selected
                   var selectedVehicle = document.querySelectorAll("#vehicleListContainer .vehicle-title-select a.button.selected");
                   if (selectedVehicle.length == 0) {
                       // Show a warning that no vehicle is selected
                       alert("Please select a vehicle before proceeding.");
                       return; // Return early if no vehicle is selected
                   }
               }
           } else if (e.target.hasAttribute("data-previous")) {
               incrementor = -1;
           }

           if (incrementor == null) return;

           if (incrementor === 1) {
               const selectInputs = [...formSteps[currentStep].querySelectorAll("select.Select")];
               const inputInputs = [...formSteps[currentStep].querySelectorAll("input[required]")];

               let isValid = true;

               selectInputs.forEach((input) => {
                   if (!input.checkValidity()) {
                       isValid = false;
                       input.classList.add("invalid-field");
                       const warningMessage = input.parentNode.querySelector(".warning-message");
                       if (!warningMessage) {
                           const newWarning = document.createElement("div");
                           newWarning.className = "warning-message";
                           newWarning.textContent = "This field is required.";
                           input.parentNode.appendChild(newWarning);
                       }
                   } else {
                       input.classList.remove("invalid-field");
                       const warningMessage = input.parentNode.querySelector(".warning-message");
                       if (warningMessage) {
                           warningMessage.remove();
                       }
                   }
               });

               inputInputs.forEach((input) => {
                   if (!input.checkValidity()) {
                       isValid = false;
                       input.classList.add("invalid-field");
                       const warningMessage = input.parentNode.querySelector(".warning-message");
                       if (!warningMessage) {
                           const newWarning = document.createElement("div");
                           newWarning.className = "warning-message";
                           newWarning.textContent = "This field is required.";
                           input.parentNode.appendChild(newWarning);
                       }
                   } else {
                       input.classList.remove("invalid-field");
                       const warningMessage = input.parentNode.querySelector(".warning-message");
                       if (warningMessage) {
                           warningMessage.remove();
                       }
                   }
               });

               if (!isValid) {
                   // alert("Please fill out all required fields before proceeding.");
                   return;
               }
           }

           currentStep += incrementor;
           showCurrentStep();
       };

       // Use both "click" and "touchend" events
       multiStepForm.addEventListener("click", clickHandler);
       multiStepForm.addEventListener("touchend", clickHandler);

       function showCurrentStep() {
           formSteps.forEach((step, index) => {
               step.classList.toggle("active", index === currentStep);
           });

           stepsListAfter.forEach((step, index) => {
               step.classList.toggle("active", index === currentStep);
           });
       }
   }
});
 // ------ Multistep Booking form ends







