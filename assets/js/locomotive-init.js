// Locomotive Scroll Setup
const lscroll = new LocomotiveScroll({
  el: document.querySelector('[data-scroll-container]'),
  smooth: true,
  direction: 'vertical',
  smartphone: {
    direction: 'vertical',
  },
  tablet: {
    direction: 'vertical',
  },
});

// Reload Locomotive Scroll after Page Load
document.addEventListener('DOMContentLoaded', function () {
  function ScrollUpdateDelay() {
    setTimeout(function () {
      lscroll.update();
    }, 500);
  }

  ScrollUpdateDelay();
});
