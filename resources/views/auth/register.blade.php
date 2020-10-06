<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nama Lengkap') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" placeholder="Masukkan Nama" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('NIK') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="nik" placeholder="Masukkan NIK" :value="old('nik')" required autofocus autocomplete="nik" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" placeholder="Masukkan Email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('kata Sandi') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" placeholder="Masukkan Kata sandi" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Ulang kata Sandi') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Ketik Ulang Kata Sandi" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah Terdaftar.Login') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
