@props(['path' => ''])

<a href="{{ $path ? $path : url()->previous() }}" class="inline-block text-black ml-4 mb-4 hover:text-laravel flex items-center">
    <x-icon name="backarrow" />
    Back
</a>