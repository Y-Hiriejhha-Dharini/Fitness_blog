@props(['post'])
<article
{{$attributes->merge(['class'=>'m-2 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
<div class="py-6 px-5">
    <div>
        <img src="{{$post->img_path}}" height="50%" alt="Blog Post illustration" class="rounded-xl">
    </div>

    <div class="mt-8 flex flex-col justify-between">
        <header>
            <div class="space-x-2">
                <x-category_button :category="$post->Category"/>
            </div>

            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="post/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <span class="mt-2 block text-gray-400 text-xs">
                    Published <time>{{$post->created_at->diffForHumans()}}</time>
                </span>
            </div>
        </header>

        <div class="text-sm mt-4">
            <p>
                {{$post->excerpt}}
            </p>

        </div>

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="/img/icon2.png" width="50" alt="Lary avatar">
                <h5 class="font-bold ml-2">
                    <a href="/?authors={{$post->author->username}}" >{{$post->author->name}}</a>
                </h5>
            </div>

            <div>
                <a href="post/{{$post->slug}}"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-2"
                >
                    Read More
                </a>
            </div>
        </footer>
    </div>
</div>
</article>