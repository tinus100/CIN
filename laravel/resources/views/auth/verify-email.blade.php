<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Bedankt voor het inloggen! Voor we kunnen beginnen moet u uw email adres verifiëren door op de link te klikken in de e-mail die we naar u verstuurd hebben? Als u geen e-mail ontvangen heeft, dan zenden we u er graag nog een.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Een nieuwe verificatie link is gestuurd naar het email adres die u opgegeven heeft bij de registratie.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Stuur Nieuwe Verificatie Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log uit') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
