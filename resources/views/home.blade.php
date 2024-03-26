<x-layout>


    <div class="container py-md-5">
      <div class="row align-items-center">
        <div class="col-lg-7 py-3 py-md-5">
          <h1 class="display-5 py-2">Want To Secure Placement?</h1>
          {{-- <p class="lead text-muted">Are you a fresh graduate? Are you tired of getting rejected from job interviews due to lack of experience? Sign Up with us and get ready for the simulated industrial experience.</p> --}}


          <iframe width="560" height="315" src="https://www.youtube.com/embed/caEJfM97zkE?si=PX_m_yi8z4tCM8n9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          {{-- <a href="https://www.youtube.com/watch?v=3sU2ZVzJVq0" target="_blank" class="btn btn-warning btn-sm">Learn More</a> --}}
        </div>
        <div class="col-lg-5 pl-lg-5 pb-3 py-lg-5">
          <form action="/register" method="POST" id="registration-form">
            @csrf 
            <div class="form-group">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <input value="{{old('username')}}" name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
              
              @error('username')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror

            </div>

            <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <input value="{{old('email')}}" name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />

              @error('email')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror

            </div>

            <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />

              @error('password')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror


            </div>

            <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
              <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />

              @error('password_confirmation')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror

            </div>

            <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for JobSuccess</button>
          </form>
        </div>
      </div>
    </div>




</x-layout>
