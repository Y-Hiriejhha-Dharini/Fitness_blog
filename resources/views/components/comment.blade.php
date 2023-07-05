@props(['comment'])
<x-panel class="bg-gray-100">
    <article class="flex  space-x-4 mb-4">
        <div class="pr-3 flex-shrink-0">
            <img src="/img/icon.png" alt="" width="50" height="50" class="rounded">
        </div>
        <div>
            <header class="mb-4">
                <strong>{{$comment->author->name}}</strong>
                <p>Published on <time>{{$comment->created_at->format('F j, Y g:i a')}}</time> </p>
            </header>
            <p>{{$comment->comment}}</p>
        </div>
    </article>
</x-panel>