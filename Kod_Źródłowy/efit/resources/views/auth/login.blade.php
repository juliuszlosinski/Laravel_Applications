<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
        <h2 align="center">Logowanie:</h2>
  <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email:')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

</br>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Hasło:')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
</br>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Zapamiętaj mnie') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Zapomniałeś hasła?') }}
                    </a>
                @endif

</br>
                
                <x-button class="ml-3">
                    {{ __('Zaloguj!') }}
                </x-button>

            </br>
<p>Powrót do rejestracji: <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Rejestracja?') }}
                </a>
</p>

                <p><b>Konto Admin:</b></p>
                <p>Emai: admin@wp.pl</p>
                <p>Hasło: 12345678</p>

                <p><b>Konto julek:</b></p>
                <p>Emai: julek@wp.pl</p>
                <p>Hasło: 12345678</p>
            </div>
        </form>
</div>
</div>
</body>
</html>
