function loadjscssfile(filename, filetype) {
  if (filetype == 'js') {
    // Get external JS-Files
    const existingScript = document.querySelector('script[src="${filename}"]');
    if (existingScript) {
      existingScript.remove();
    }
    var fileref = document.createElement('script');
    fileref.setAttribute('type', 'text/javascript');
    fileref.setAttribute('src', filename);
  } else if (filetype == 'css') {
    // Get external CSS-Files
    const existingCSS = document.querySelector(`link[href='${filename}']`);
    if (existingCSS) {
      existingCSS.remove();
    }
    var fileref = document.createElement('link');
    fileref.setAttribute('rel', 'stylesheet');
    fileref.setAttribute('type', 'text/css');
    fileref.setAttribute('href', filename);
  }
  if (typeof fileref != 'undefined')
    // Append Files
    document.getElementsByTagName('head')[0].appendChild(fileref);
}

var scripts = {
  // Get current Page
  init: function () {
    if (document.getElementsByTagName('body')[0].classList.contains('home')) {
      console.log('This is home page');
      this.homepage();
    } else if (
      document.getElementsByTagName('body')[0].classList.contains('page')
    ) {
      console.log('This is a page');
      this.page();
    }
  },
  // Homepage or normal Page
  homepage: function () {
    const homepageCSS = 'style.css';
    loadjscssfile(homepageCSS, 'css');
  },
  page: function () {
    const pageCSS = 'style.css';
    loadjscssfile(pageCSS, 'css');
  },
};

barba.hooks.beforeEnter((data) => {
  console.log('Hello there');

  if (data.current.container) {
    // Run only during transition
    let nextHtml = data.next.html;
    let parser = new DOMParser();
    let htmlDoc = parser.parseFromString(
      nextHtml.replace(/(<\/?)body( .+?)?>/gi, '$1notbody$2>', nextHtml),
      'text/html'
    );
    let bodyClasses = htmlDoc.querySelector('notbody').getAttribute('class');
    document.getElementsByTagName('body')[0].setAttribute('class', bodyClasses);

    // Init Scripts
    scripts.init();
  }
});

// Barba Transition
barba.init({
  transitions: [
    {
      name: 'opacity-transition',
      leave(data) {
        return gsap.to(data.current.container, {
          opacity: 0,
        });
      },
      enter(data) {
        return gsap.from(data.next.container, {
          opacity: 0,
        });
      },
    },
  ],
});
