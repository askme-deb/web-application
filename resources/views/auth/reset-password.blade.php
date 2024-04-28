<x-guest-layout>
        <div class="text-center mb-6">
            <h4 class="text-body-highlight">Reset new password</h4>
            <form method="POST" action="{{ route('password.store') }}" class="mt-5 needs-validation"  novalidate>
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">        
                <input class="form-control mb-2" id="password" type="email" placeholder="Type your Email" name="email" value="{{ old('email', $request->email) }}" required autocomplete="username" />
                <div class="invalid-feedback">Please provide a valid Email.</div>
                <input class="form-control mb-2" id="password" type="password" placeholder="Type new password" name="password" required autocomplete="new-password" />
                <div class="invalid-feedback">Please provide valid Password.</div>
                <input class="form-control mb-4" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Cofirm new password" />
                <div class="invalid-feedback">Please provide valid Confirm password.</div>
                {{-- <button class="btn btn-primary w-100" type="submit">Set Password</button> --}}
                <x-primary-button>
                    {{ __('Set Password') }}
                </x-primary-button>
            </form>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


</x-guest-layout>
