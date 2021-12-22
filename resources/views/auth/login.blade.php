@extends('layouts.master')

@section('content')



<div class="page-title-wrap">
    <div class="page-title-area title-img-six">
    <div class="title-shape">
    <img src="assets/images/title/title-shape1.png" alt="Shape">
    </div>
    <div class="d-table">
    <div class="d-table-cell">
    <div class="title-content">
    <h2>Sign In</h2>
    <ul>
    <li>
    <a href="index.html">Home</a>
    </li>
    <li>
    <span>Sign In</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    
<div class="user-area ptb-100">
    <div class="container">
    <div class="user-item">
    <div class="user-shape">
    <img src="assets/images/contact-shape1.png" alt="Shape">
    <img src="assets/images/contact-shape2.png" alt="Shape">
    </div>
    <h2>Sign In</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
    <input type="Password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
     <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
    <label class="form-check-label" for="defaultCheck7">
    Accept <a href="terms-conditions.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
    </label>
    </div>
    </div>
    <button type="submit" class="btn common-btn two">Sign In</button>
    <h4>Didn't have any account? <a href="{{route('register')}}">Sign Up</a></h4>
    </form>
    </div>
    </div>
    </div>

@endsection
