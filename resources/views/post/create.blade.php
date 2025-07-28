<x-app-layout>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="text-gray-900 mt-8">

                <div class="bg-white border mb-8 border-gray-200 rounded-lg shadow-sm flex">
                    <div class="p-12 flex-1">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <x-input-label id='image' value="Image" />
                                <x-text-input id='image' name='image' class="block mt-1 w-full" type="file"
                                    :value="old('image')" autofocus />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="old('title')" autofocus autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div class="my-4">
                                <x-input-label id="category" value="Category" />
                                <select name="category_id" id="category"
                                    class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option disabled selected>Select a option</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach

                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for='description' value="Description" />
                                <x-textarea id="description" class="block mt-1 w-full" name='description' rows='3'
                                    :value="old('description')" autofocus></x-textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <div>
                                <x-primary-button class="mt-4">Submit</x-primary-button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
