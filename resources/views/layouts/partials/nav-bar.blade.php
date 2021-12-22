
<div class="main-nav two">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img src="assets/images/logo.png" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">

<li class="nav-item">
<a href="/" class="nav-link">Home</a>
</li>
<li class="nav-item">
<a href="{{ route('services') }}" class="nav-link">Services</a>
</li>
<li class="nav-item">
<a href="{{ route('shop') }}" class="nav-link">Shop</a>
</li>
<li class="nav-item">
    <a href="{{ route('about-us') }}" class="nav-link">About Us Sample Pull</a>
    </li>
</ul>
<div class="side-nav two">
<div class="nav-search">
<i id="search-btn" class="bx bx-search-alt"></i>
<div id="search-overlay" class="block">
<div class="centered">
<div id="search-box">
<i id="close-btn" class="bx bx-x"></i>
<form>
<input type="text" class="form-control" placeholder="Search..." />
<button type="submit" class="btn">Search</button>
</form>
</div>
</div>
</div>
</div>
<a class="cart" href="cart.html">
<i class='bx bx-cart'></i>
<span>1</span>
</a>
@auth
<a class="common-btn two nav-btn" href="#">Book Now</a>
@else
<a class="common-btn two nav-btn" href="{{ route('login') }}">Login/Signup</a>
@endauth
</div>
</div>
</nav>
</div>
</div>
</div>