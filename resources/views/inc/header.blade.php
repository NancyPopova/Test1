<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

  <img src="/images/logo1.jpg" height="100">
  <button type="submit" onclick="{{ route('logo') }}">Заказать звонок</button>

  <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{ route('home') }}">Главная страница</a>
    <a class="p-2 text-dark" href="{{ route('about') }}">Про нас</a>
    <a class="p-2 text-dark" href="{{ route('contact') }}">Контакты</a>
  </nav>
</div>
