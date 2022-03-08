<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register as Photographer') }}
        </h2>
    </x-slot>

    <div>
    <x-auth-card>
        <x-slot name="logo"></x-slot>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('photographer-register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" readonly :value="__(Auth::user()->name)" required autofocus />
            </div>

            <!-- Bio -->
            <div>
                <x-label for="bio" :value="__('Bio')" />
                <x-textarea id="bio" name="bio" class="block mt-1 w-full">  {{ __(old('bio')) }} </x-textarea>
            </div>

            <!-- Mobile -->
            <div>
                <x-label for="mobile" :value="__('Mobile')" />
                <x-input id="mobile" class="block mt-1 w-full" type="text" name="mobile"  :value="old('mobile')" required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>


        </form>
    </x-auth-card>


    </div>
</x-app-layout>