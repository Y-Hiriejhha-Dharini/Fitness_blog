<x-layouts>
    <section class="px-8 py-7">
        <main class="max-w-lg mx-auto bg-gray-100 border border-gray-200 rounded-xl">
            <form action="/register/create" method="POST">
                @csrf
                <h2 class="uppercase block font-bold text-center pt-4 pb-4">Register Form</h2>
                <div class="px-4 py-2">
                    <label for="name" class="block uppercase text-gray-700 font-bold text-sm mb-2">Name</label>
                    <input type="text" name="name" class="w-full border border-gray-100 p-2" value="{{old('name')}}" required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="username" class="block uppercase text-gray-700 font-bold text-sm mb-2">Username</label>
                    <input type="text" name="username" class="w-full border border-gray-100 p-2"value="{{old('username')}}"  required>
                    @error('username')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="email" class="block uppercase text-gray-700 font-bold text-sm mb-2">Email</label>
                    <input type="text" name="email" class="w-full border border-gray-100 p-2" value="{{old('email')}}" required>
                    @error('email')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-4 py-2">
                    <label for="password" class="block uppercase text-gray-700 font-bold text-sm mb-2">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-100 p-2" required>
                    @error('password')
                        <p class="text-red-600 text-sm mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="px-6 pt-4 pb-4 mb-4 grid justify-items-center">
                    <button class="bg-blie-400 bg-blue-400 font-semibold hover:bg-blue-200 px-4 py-2 rounded text-sm text-whit uppercase">Submit</button>
                </div>
            </form>
        </main>
    </section>   
</x-layouts>