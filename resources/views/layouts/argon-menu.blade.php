<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('dashboard') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-table text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
  <a class="nav-link" href="{{ route('tables') }}">
    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
      <i class="fas fa-calendar-alt text-success text-sm opacity-10"></i>
    </div>
    <span class="nav-link-text ms-1">Tables</span>
  </a>
</li>

    <li class="nav-item">
       <a class="nav-link" href="{{ route('billing') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-credit-card text-danger text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Billing</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('virtual-reality') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-vr-cardboard text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Virtual Reality</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('rtl')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-globe-americas text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">RTL</span>
      </a>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('profile')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-user text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('sign-in')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fas fa-sign-in-alt text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign In</span>
      </a>
    </li>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-link nav-link">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-sign-out-alt text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Cerrar sesión</span>
    </button>
     </form>
 </ul>
