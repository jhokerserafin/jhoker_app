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
    <h2>Sign Up</h2>
    <ul>
    <li>
    <a href="/">Home</a>
    </li>
    <li>
    <span>Sign Up</span>
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
    <h2>Sign Up</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">

             
                    <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">

             
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">

             
                    <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">

                    <input id="password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
    <div class="form-group">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
    <label class="form-check-label" for="defaultCheck7">
    Accept <a href="#">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
    </label>
    </div>
    </div>
    <button type="submit" class="btn common-btn two">Sign Up</button>
    <h4>Have any account? <a href="{{route('login')}}">Sign In</a></h4>
    </form>
    </div>
    </div>
    </div>
    

@endsection
