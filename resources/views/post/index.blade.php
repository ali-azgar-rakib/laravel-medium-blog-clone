<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <x-category-component></x-category-component>
            <div class="text-gray-900 mt-8">
                @forelse($posts as $post)
                    <x-post :post="$post"></x-post>
                @empty
                    <div class="text-grey-900">Post not found!</div>
                @endforelse
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
