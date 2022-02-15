<!DOCTYPE html>
<html lang="pl">
    @include('partials/head')
    <body>
        <div id="wszystko">
        @include('partials/gornyPanel')
        @include('partials/lewyPanel')
        <div id="zawartosc">
        <h2 align="center">Dodaj użytkownika:</h2>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ config('app.url')}}/User">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nazwa:')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
</br>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email:')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
</br>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Hasło:')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
</br>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Potwierdź hasło:')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

                <p align="center"><x-button class="ml-4">
                    {{ __('Dodaj!') }}
                </x-button>
</p>
            </div>
        </form>
        </div>
</div>
</body>
</html>
