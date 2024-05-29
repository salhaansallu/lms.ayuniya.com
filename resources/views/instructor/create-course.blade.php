<x-app-layout>
<style>
    body {
        background-color: #ececec;
    }
</style>
    <div class="assignments mt-6">
        <div class="head"><span>Create Course</span></div>

        <div class="course_content mt-7">
            <div class="ctnt">
                <x-input-label :value="__('Course Title')" />
                <x-text-input type="text" class="mt-1 block w-full" required autofocus placeholder="Course Title" />
                <x-input-error class="mt-2" :messages="'Title required'" />
            </div>

            <div class="ctnt mt-7">
                <x-input-label :value="__('Course Thumbnail')" />
                <x-text-input type="file" class="mt-1 block w-full" required/>
                <x-input-error class="mt-2" :messages="'Invalid file type'" />
            </div>

            <div class="ctnt mt-7">
                <x-input-label :value="__('Course Content')" />
                <div id="editorjs" class="bg-white mt-1"></div>
                <x-input-error class="mt-2" :messages="'Content required'" />
            </div>

            <div class="ctnt mt-7">
                <x-primary-button class="publish_btn">{{ __('Publish') }}</x-primary-button>
            </div>
        </div>
    </div>
</x-app-layout>
