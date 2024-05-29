<x-app-layout>
    <form action="">
        <div class="head mt-5">Create New Student</div>
        
        <div class="w-full mt-5">
            <x-input-label for="name" :value="__('Subject Title')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus/>
            <x-input-error class="mt-2" :messages="'Error'" />
        </div>

        <div class="w-full mt-5">
            <x-input-label for="name" :value="__('Image Thumbnail')" />
            <x-text-input id="name" name="name" type="file" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="'Error'" />
        </div>

        <x-primary-button class="mt-4 publish_btn px-7">{{ __('Save') }}</x-primary-button>
    </form>
</x-app-layout>