<footer>
<div class="menu">
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/products">Productos</a></li>
    <li><a href="/services">Servicios</a></li>
    <li><a href="/faqs">Preguntas Frecuentes</a></li>
    @if (Auth::guest())
      <li><a href="/register">Registro</a></li>
    @endif
  </ul>
</div>
<div class="contactoRedes">
  <h2><i class="fas fa-envelope"></i> : patitas@deciudad.com</h2>
  <ul>
    <li><a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
  </ul>
</div>
</footer>
