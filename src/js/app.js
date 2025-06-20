document.addEventListener('DOMContentLoaded', function () {

  eventListener();

  darMode();
});

function darMode() {
  const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

  if (prefiereDarkMode.matches) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
  prefiereDarkMode.addEventListener('change', function () {
    if (prefiereDarkMode.matches) {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.remove('dark-mode');
    }
  });

  const botonDarkMode = document.querySelector('.dark-mode-boton');

  botonDarkMode.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
  });
}
function eventListener() {
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenu.addEventListener('click', navegacionReponsive);
}

function navegacionReponsive() {
  const navegacion = document.querySelector('.navegacion');

  //nnavegacion.classList.toggle('mostrar'); remueve y pone
  if (navegacion.classList.contains('mostrar')) {
    navegacion.classList.remove('mostrar');
  } else {
    navegacion.classList.add('mostrar');
  }
}