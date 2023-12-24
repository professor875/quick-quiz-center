
<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open"
         class=" cursor-pointer hover:bg-gray-800 px-4 text-red-500 uppercase py-3 text-xl rounded-xl">
        {{ $name }} <span class="text-red-500 text-2xl font-bold">|</span>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top"
         style="display: none;"
         @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-gray-900 dark:bg-gray-900">
            {{ $slot }}
        </div>
    </div>
</div>
