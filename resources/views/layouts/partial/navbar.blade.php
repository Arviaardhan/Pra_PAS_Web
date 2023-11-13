<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if(request()->is('home')) active @endif" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('students')) active @endif" href="/handphone.all">Handphones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->is('students')) active @endif" href="/laptop.all">Laptops</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>