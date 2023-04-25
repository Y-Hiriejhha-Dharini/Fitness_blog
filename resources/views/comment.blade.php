                    <!--Comment section-->
                    <section class="col-span-8 col-start-5 space-y-4 mb-4">
                        @auth
                            <x-panel>
                                <!--Comment writing section-->
                                <form action="/post/{{$post->slug}}/comment" method="post" >
                                    @csrf
                                    
                                    <header class="flex items-center">
                                        <img src="/images/lary-avatar.svg" width="50" height="50" class="rounded-full" alt="">
                                        <h6 class="ml-5">Type your Comment here</h6>
                                    </header>
                                    <div class="mt-2">
                                        <textarea name="comment" id="comment" rows="5" placeholder="Type your comment" required class="w-full focus:outline-none focus:ring font-semibold text-sm"></textarea>
                                        @error('comment')
                                            <p class="text-red-500 text-sm font-semibold">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="flex justify-end mt-4 border-t border-gray-100 pt-6">
                                        <x-submit_button>Post</x-submit_button>
                                    </div>
                                </form>
                            </x-panel>
                        @else
                            <div>
                                <a href="/login/create" class="hover:underline">Login</a> or <a href="/register/view" class="hover:underline">Register</a> for place a comment
                            </div>
                        @endauth
                        
                        @foreach ($post->comment as $comment)
                            <x-comment :comment="$comment"/>
                        @endforeach
                    </section>