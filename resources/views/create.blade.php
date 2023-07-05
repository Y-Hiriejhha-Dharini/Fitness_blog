<x-layouts>
    <section class="px-8 py-7">
        <main class="max-w-lg mx-auto bg-gray-100 border border-gray-200 rounded-xl">
            <form action="/store" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="uppercase block font-bold text-center pt-4 pb-4">Create Post</h2>
                <div class="px-4 py-2">
                    <label for="title" class="block uppercase text-gray-700 font-bold text-sm mb-2">Title</label>
                    <input type="text" name="title" class="w-full border border-gray-100 p-2" value="{{old('title')}}" required>
                    @error('title')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="category_id" class="block uppercase text-gray-700 font-bold text-sm mb-2">Category</label>
                    <select name="category_id" id="category" class="w-full border border-gray-100 p-2">
                        <option>Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="slug" class="block uppercase text-gray-700 font-bold text-sm mb-2">Slug</label>
                    <input type="text" name="slug" class="w-full border border-gray-100 p-2" required>
                    @error('slug')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="img_path" class="block uppercase text-gray-700 font-bold text-sm mb-2">Image</label>
                    <input type="file" name="img_path" class="w-full border border-gray-100 p-2" required>
                    @error('img_path')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="excerpt" class="block uppercase text-gray-700 font-bold text-sm mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="w-full border border-gray-100 p-2" required></textarea>
                    @error('excerpt')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="body" class="block uppercase text-gray-700 font-bold text-sm mb-2">Body</label>
                    <textarea name="body" id="body" class="w-full border border-gray-100 p-2" required></textarea>
                    @error('body')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-6 pt-4 pb-4 mb-4 grid justify-items-center">
                    <button class="bg-blie-400 bg-blue-400 font-semibold hover:bg-blue-200 px-4 py-2 rounded text-sm text-whit uppercase">Publish</button>
                </div>
            </form>
        </main>
    </section>   
</x-layouts>