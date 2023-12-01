<!DOCTYPE html>
<html lang="en">
    @include('components/header')
<body>
<div class = 'container'>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://i.pinimg.com/736x/05/88/05/058805a0c84412f9049a40ab1a9889e2.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action='forgot-password' method="POST">
                @if ($errors-> any())
                  <div class= "alert alert-danger">
                    @foreach($errors->all() as $err)
                    <li> {{ $err }} </li>
                    @endforeach
                  </div>
                @endif
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Enter Email</p>
                </div>
                 <br>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input value = "{{old('email')}}" input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email"/>
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
    
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Send OTP</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    
      
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
    </div>
</body>
</html>