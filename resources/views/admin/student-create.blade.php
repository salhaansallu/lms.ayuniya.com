<x-app-layout>
    <form action="">
        <div class="head mt-5">Create New Student</div>
        <div class="flex gap-5 mt-5">
            <div class="w-2/4">
                <x-input-label for="name" :value="__('First Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="'Error'" />
            </div>

            <div class="w-2/4">
                <x-input-label for="name" :value="__('Last Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="'Error'" />
            </div>
        </div>

        <div class="flex gap-5 mt-5">
            <div class="w-2/4">
                <x-input-label for="name" :value="__('Email Address')" />
                <x-text-input id="name" name="name" type="email" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="'Error'" />
            </div>

            <div class="w-2/4">
                <x-input-label for="name" :value="__('Phone Number')" />
                <x-text-input id="name" name="name" type="number" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="'Error'" />
            </div>
        </div>

        <div class="subjects mt-5">
            <x-input-label for="name" class="mb-3" :value="__('Select Subjects')" />

            <div class="flex gap-3">
                <x-text-input id="name" name="name" type="checkbox" class="mt-1" required /> <x-input-label for="name" class="mt-1" :value="__('Maths')" />
            </div>
            <div class="flex gap-3">
                <x-text-input id="name" name="name" type="checkbox" class="mt-1" required /> <x-input-label for="name" class="mt-1" :value="__('Maths')" />
            </div>
            <div class="flex gap-3">
                <x-text-input id="name" name="name" type="checkbox" class="mt-1" required /> <x-input-label for="name" class="mt-1" :value="__('Maths')" />
            </div>
            <div class="flex gap-3">
                <x-text-input id="name" name="name" type="checkbox" class="mt-1" required /> <x-input-label for="name" class="mt-1" :value="__('Maths')" />
            </div>
            <div class="flex gap-3">
                <x-text-input id="name" name="name" type="checkbox" class="mt-1" required /> <x-input-label for="name" class="mt-1" :value="__('Maths')" />
            </div>
        </div>

        <x-primary-button class="mt-4 publish_btn px-7">{{ __('Save') }}</x-primary-button>
    </form>
</x-app-layout>
