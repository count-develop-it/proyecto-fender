const observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.15 
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
    }
  });
}, observerOptions);

document.querySelectorAll('.scroll-reveal').forEach((el) => observer.observe(el));

function comprar(monto){
  alert('¡Compra realizada con éxito por un total de: Q' + monto);
  window.location.href= 'eliminar_carrito.php';
}