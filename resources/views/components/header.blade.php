<header class="header">
    <div class="header__top">
        <div class="container flex justify-end">
            <div class="row flex-1 pt-2 pb-2">
                    {{-- <a href="./signin.html" class="primary-btn">Subscribe</a>
                    <form action="/ping" method="get">
                        <div class="w-full p-3">
                            <div class="relative"> 
                                <input name="email" type="text" class="bg-white h-14 w-full px-4 pr-20 rounded-md focus:outline-none hover:cursor-pointer" name="">
                                    @error('email')
                                        <p class="text-sm text-red-500 font-semibold">{{$message}}</p>
                                    @enderror
                                <button class="h-10 rounded bg-black absolute top-2 text-sm right-2 px-3 text-white hover:bg-gray-900 ">Subscribe Now</button> </div>
                            </div>
                        </div>
                    </form> --}}
                <div class="col-2">
                    <div class="header__search">
                        <i class="fa fa-search search-switch"></i>
                    </div>
                </div>
                <div class="mx-auto my-2">
                    @guest
                        <a href="/register/view" class="text-blue-500 pl-8">Register</a>
                        <a href="/login/view" class="text-blue-500 pl-6">Login</a>
                    @else
                        <div class="row mx-auto">
                            <a name="user" class="text-blue-500 pl-4 my-2 mx-3">Welcome, {{auth()->user()->name}}</a>
                            <a href={{url('/create')}} class=" hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Create New Post</a>
                                <form action="/logout" method="POST" class="flex items-center pl-3">
                                    @csrf
                                    <button class=" text-blue-700  hover:bg-blue-500 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Log Out</button>
                                </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__btn">
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__logo">
                    <a href="/"><img src="/img/logo2.png" width="150" height="130" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__social">
                    <a href="https://web.facebook.com/fittness_blog"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/fittness_blog"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/fittness_blog"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.instagram.com/fittness_blog/"><i class="fa fa-instagram"></i></a>
                    <a href="https://mail.google.com/fittness_blog"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>