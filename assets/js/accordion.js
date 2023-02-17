function toggleAccordion(e) {
  const accordion = e.currentTarget.parentNode.parentNode;
  const accHeader = e.currentTarget.parentNode;
  const accBody = e.currentTarget.parentNode.nextElementSibling;
  const accShowClass = 'accordion-body-show';
  // Do we open or close a panel
  let closeAccordion = false;
  if (accHeader.classList.contains(accShowClass)) {
    closeAccordion = true;
  }
  for (let i = 0; i < accordion.childNodes.length; i++) {
    if (accordion.childNodes[i].classList) {
      // Remove max-height
      if (accordion.childNodes[i].nodeName === 'DD') {
        accordion.childNodes[i].style.maxHeight = null;
      }
      // Remove open class form any open element
      if (accordion.childNodes[i].nodeName === 'DT') {
        accordion.childNodes[i].classList.remove(accShowClass);
        accordion.childNodes[i].firstChild.nextElementSibling.setAttribute(
          'aria-expanded',
          'false'
        );
      }
    }
  }
  // Add open class, don't re-open if it was just closed
  if (!closeAccordion) {
    accHeader.classList.add(accShowClass);
    e.currentTarget.setAttribute('aria-expanded', 'true');
    accBody.style.maxHeight = accBody.scrollHeight + 'px';
  }

  e.preventDefault();
}

// Listen for Clicks
const panels = document.querySelectorAll('.accordion dt a');
for (let i = 0; i < panels.length; i++) {
  panels[i].addEventListener('click', toggleAccordion);
}
