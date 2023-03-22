(function() {
    // Init
    var container = document.getElementById("container"),
        inner = document.getElementById("inner");
  
    // Mouse
    var mouse = {
      _x: 0,
      _y: 0,
      x: 0,
      y: 0,
      updatePosition: function(event) {
        var e = event || window.event;
        this.x = e.clientX - this._x;
        this.y = (e.clientY - this._y) * -1;
      },
      setOrigin: function(e) {
        this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
        this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
      },
      show: function() {
        return "(" + this.x + ", " + this.y + ")";
      }
    };
  
    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container);
  
    //----------------------------------------------------
  
    var counter = 0;
    var refreshRate = 10;
    var isTimeToUpdate = function() {
      return counter++ % refreshRate === 0;
    };
  
    //----------------------------------------------------
  
    var onMouseEnterHandler = function(event) {
      update(event);
    };
  
    var onMouseLeaveHandler = function() {
      inner.style = "";
    };
  
    var onMouseMoveHandler = function(event) {
      if (isTimeToUpdate()) {
        update(event);
      }
    };
  
    //----------------------------------------------------
  
    var update = function(event) {
      mouse.updatePosition(event);
      updateTransformStyle(
        (mouse.y / inner.offsetHeight / 2).toFixed(2),
        (mouse.x / inner.offsetWidth / 2).toFixed(2)
      );
    };
  
    var updateTransformStyle = function(x, y) {
      var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
      inner.style.transform = style;
      inner.style.webkitTransform = style;
      inner.style.mozTranform = style;
      inner.style.msTransform = style;
      inner.style.oTransform = style;
    };
  
    //--------------------------------------------------------
  
    container.onmousemove = onMouseMoveHandler;
    container.onmouseleave = onMouseLeaveHandler;
    container.onmouseenter = onMouseEnterHandler;
  })();



  
		// var swiper = new Swiper('.swiper-container2', {
		// 	loop: true,
		// 	effect: 'coverflow',
		// 	centeredSlides: true,
		// 	loopFillGroupWithBlank: true,
		// 	slidesPerView: 3,
    //         initialSlide: 3,
    //         keyboardControl: true,
    //         mousewheelControl: false,
    //         lazyLoading: true,
		// 	pagination: {
		// 		el: '.swiper-pagination2',
		// 		clickable: true,
		// 	},
		// 	navigation: {
		// 		nextEl: '.swiper-button-next',
		// 		prevEl: '.swiper-button-prev',
		// 	},
		// 	breakpoints: {
    //             1199: {
    //                 slidesPerView: 3,
    //                 spaceBetween: 30,
    //             },
    //             991: {
    //                 slidesPerView: 3,
    //                 spaceBetween: 10,
    //             },
    //             767: {
    //                 slidesPerView: 2,
    //                 spaceBetween: 10,
    //             },
    //             575: {
    //                 slidesPerView: 1,
    //                 spaceBetween: 3,
    //             }
    //         }
		// });
		
		
		
		function reveal() {
      var reveals = document.querySelectorAll(".reveal");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    
    window.addEventListener("scroll", reveal);
    
