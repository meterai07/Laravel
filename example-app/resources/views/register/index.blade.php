@extends ('layouts.main')

@section ('container')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <form class="shadow p-3 mb-5 bg-white rounded" method="post" action="/register">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
              <div class="form-floating">
                <input type="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>

                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror

              </div>
              <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
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