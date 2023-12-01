<!DOCTYPE html>
<html lang="en">
    @include('components/header')
<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://i.pinimg.com/736x/05/88/05/058805a0c84412f9049a40ab1a9889e2.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action='change-pass' method="POST">
                @csrf
                <h1 align-style="center" text-style= class="lead fw-normal mb-0 me-3">Enter New Password</h1>
               
                <br>
                <br>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  

                  <div class="form-outline mb-4">
                    <input type="number" id="form3Example3" class="form-control form-control-lg"
                      placeholder="Enter OTP" name="password"/>
                    <label class="form-label" for="form3Example3"> OTP</label>
                  </div>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter New Password" name="password"/>
                  <label class="form-label" for="form3Example3">New Password</label>
                </div>
            
                <div class="form-outline mb-4">
                  <input type="password_confirmation" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter Confirmation Password" name="password_confirmation"/>
                  <label class="form-label" for="form3Example3">Confirm New Password</label>
                </div>               
                <div class="d-flex justify-content-between align-items-center">
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Confirm</button>
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
  
</body>
</html>