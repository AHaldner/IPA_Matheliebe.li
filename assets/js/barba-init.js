// function loadjscssfile(filename, filetype) {
//   if (filetype == 'js') {
//     //if filename is a external JavaScript file
//     const existingScript = document.querySelector('script[src="${filename}"]');
//     if (existingScript) {
//       existingScript.remove();
//     }
//     var fileref = document.createElement('script');
//     fileref.setAttribute('type', 'text/javascript');
//     fileref.setAttribute('src', filename);
//   } else if (filetype == 'css') {
//     //if filename is an external CSS file
//     const existingCSS = document.querySelector(`link[href='${filename}']`);
//     if (existingCSS) {
//       existingCSS.remove();
//     }
//     var fileref = document.createElement('link');
//     fileref.setAttribute('rel', 'stylesheet');
//     fileref.setAttribute('type', 'text/css');
//     fileref.setAttribute('href', filename);
//   }
//   if (typeof fileref != 'undefined')
//     document.getElementsByTagName('head')[0].appendChild(fileref);
// }

// var scripts = {
//   init: function () {
//     if (document.getElementsByTagName('body')[0].classList.contains('home')) {
//       console.log('This is home page');
//       this.homepage();
//     } else if (
//       document.getElementsByTagName('body')[0].classList.contains('blog')
//     ) {
//       console.log('This is blog page');
//       this.blog();
//     }
//   },
//   homepage: function () {
//     const homepageCSS = 'style.css';
//     loadjscssfile(homepageCSS, 'css');
//   },
//   blog: function () {
//     const blogCSS = 'style.css';
//     loadjscssfile(blogCSS, 'css');
//   },
// };

// barba.hooks.beforeEnter((data) => {
//   console.log('Hello there');

//   if (data.current.container) {
//     // only run during a page transition - not initial load
//     let nextHtml = data.next.html;
//     let parser = new DOMParser();
//     let htmlDoc = parser.parseFromString(
//       nextHtml.replace(/(<\/?)body( .+?)?>/gi, '$1notbody$2>', nextHtml),
//       'text/html'
//     );
//     let bodyClasses = htmlDoc.querySelector('notbody').getAttribute('class');
//     document.getElementsByTagName('body')[0].setAttribute('class', bodyClasses);

//     scripts.init();
//   }
// });

// barba.init({
//   transitions: [
//     {
//       name: 'opacity-transition',
//       leave(data) {
//         return gsap.to(data.current.container, {
//           opacity: 0,
//         });
//       },
//       enter(data) {
//         return gsap.from(data.next.container, {
//           opacity: 0,
//         });
//       },
//     },
//   ],
// });
