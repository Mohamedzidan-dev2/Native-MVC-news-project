<?php require_once"includes/header.php";?>


<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Register</h3>
            <div id="Register_user"></div>
            <form  class="website-register">
                    <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2" style=" margin-right: 304px; color: black; font-weight: bold;">Name:</label>
                    <input type="text" id="name" name="name" class="form-control " placeholder="Name"/>
                    <div class="errname" style="color: red; margin-right: 183px;"></div>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2" style=" margin-right: 304px; color: black; font-weight: bold;">Email:</label>
                    <input type="email" name="email" id="email" class="form-control " placeholder="Email" />
                    <div class="erremail" style="color: red; margin-right: 183px;"></div>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2" style=" margin-right: 304px; color: black; font-weight: bold;">Password:</label>
                    <input type="password" name="password" id="password" class="form-control "  placeholder="Password" style="font: size 0.75em;;"/>
                    <div class="errpass" style="color: red; margin-right: 155px;"></div>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2" style=" margin-right: 304px; color: black; font-weight: bold;">Gender:</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="0" id="first_option2" >choose Your Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                    <div class="errgender" style="color: red; margin-right: 155px;"></div>
                    </div>
          

                    <input class="btn btn-primary btn-lg btn-block" value="Register" type="submit">
            </form>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>






























<?php require_once"includes/footer.php";?>