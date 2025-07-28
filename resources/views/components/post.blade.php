<div class="bg-white border mb-8 border-gray-200 rounded-lg shadow-sm flex">
    <div class="p-5 flex-1">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                {{ $post->title }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Str::words($post->description, 20) }}</p>
        <a href="#" class="">
            <x-primary-button>
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />

                </svg>
            </x-primary-button>
        </a>
    </div>
    <a href="#">
        <img class="rounded-r-lg w-50 h-60"
            src="{{ Storage::disk('public')->exists($post->image) ? Storage::disk('public')->url($post->image) : 'https://flowbite.com/docs/images/blog/image-1.jpg' }}  "
            alt="" />
    </a>
</div>
