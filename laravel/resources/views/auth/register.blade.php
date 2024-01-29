<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

            <!-- Voornaam -->
            <div>
                <x-label for="voornaam" :value="__('Voornaam')"/>

                <x-input id="voornaam" class="block mt-1 w-full" type="text" name="voornaam" :value="old('voornaam')" required
                         autofocus/>
            </div>

            <!-- Achternaam -->
            <div>
                <x-label for="achternaam" :value="__('Achternaam')"/>

                <x-input id="achternaam" class="block mt-1 w-full" type="text" name="achternaam" :value="old('achternaam')" required
                         autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <p style="color: grey;">Uw wachtwoord moet minimaal 8 karakters lang zijn en een hoofdletter, kleine letter en cijfer bevatten.</p>
            <br>
            <p style="color: grey;">Tip: Gebruik een wachtwoordmanager. Dan staan al uw wachtwoorden veilig in een digitale kluis en hoeft u maar 1 wachtwoord te onthouden.</p>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
