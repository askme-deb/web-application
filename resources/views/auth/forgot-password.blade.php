<x-guest-layout>
  
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="text-center">
            <h4 class="text-body-highlight">Forgot your password?</h4>
            <p class="text-body-tertiary mb-5">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
            <form method="POST" action="{{ route('password.email') }}" class="d-flex align-items-center mb-5 needs-validation"  novalidate>
                @csrf      
               
                    <input class="form-control flex-1" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
                    <div class="invalid-feedback">Please provide a valid Email.</div>
                
                    <x-reset-password-button>
                        {{ __('Send') }}
                    </x-reset-password-button>
                 
            </form>
          <div class="row">
                <x-input-error :messages="$errors->get('email')" class="mt-2" /> 
                </div> 
          </div>
        <!-- Email Address -->
</x-guest-layout>
