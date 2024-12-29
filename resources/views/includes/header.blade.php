<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="background: linear-gradient(135deg,rgb(132, 216, 136),rgb(142, 150, 193));">
    <h1 class="navbar-brand"  style="color:#07680c;">Medicare</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('profile') }}" class="nav-link" href="#">Profile</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}" >logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
