<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />
  
  <form method="POST" action="{{ route('login') }}" class="needs-validation"  novalidate>
      @csrf
      <div class="text-center mb-7">
          <h3 class="text-body-highlight">Sign In</h3>
          <p class="text-body-tertiary">Get access to your account</p>
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
          <div class="form-icon-container">
              <input class="form-control form-icon-input" 
              id="email" 
              type="email" 
              name="email" 
              value="{{ old('email') }}" 
              required 
              autofocus 
              autocomplete="username" 
              placeholder="name@example.com" 
              />
              <span class="fas fa-user text-body fs-9 form-icon"></span>
              <div class="invalid-feedback">Please provide a valid Email.</div>
            </div>
        </div>
        <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
          <div class="form-icon-container">
              <input class="form-control form-icon-input" 
              id="password" 
              type="password" 
              name="password"
              required autocomplete="current-password"
              placeholder="Password"
               />
              <span class="fas fa-key text-body fs-9 form-icon"></span>
              <div class="invalid-feedback">Please provide valid Password.</div>
            </div>
        </div>
        <div class="row flex-between-center mb-7">
          <div class="col-auto">
            <div class="form-check mb-0">
              <input class="form-check-input" id="remember_me" type="checkbox" name="remember" />
              <label class="form-check-label mb-0" for="basic-checkbox">{{ __('Remember me') }}</label>
          </div>
          </div>

          @if (Route::has('password.request'))
           <div class="col-auto">
              <a class="fs-9 fw-semibold" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
           </div>
         @endif
        </div>

        <x-primary-button class="ms-3">
          {{ __('Log in') }}
        </x-primary-button>
  </form>
  
</x-guest-layout>
