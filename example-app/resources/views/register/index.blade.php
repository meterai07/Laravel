@extends ('layouts.main')

@section ('container')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <form class="shadow p-3 mb-5 bg-white rounded">
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          
              <div class="form-floating">
                <input type="name" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="username" username="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="confirmPassword" placeholder="Password">
                <label for="confirmPassword">Confirm Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
              <small class="d-block text-center mt-2">Already have an account? <a href="/login">Login Now!</a></small>
            </form>
            <p class="mt-5 mb-3 text-muted text-center">raftech&copy; 2022–2023</p>

        </main>
    </div>
</div>


@endsection