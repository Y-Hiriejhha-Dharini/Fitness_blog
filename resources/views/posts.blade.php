<x-layouts>
    <!-- Hero Section Begin -->
    <x-slider/>
    <!-- Hero Section End -->
    <div class="col-lg-8 col-md-10 col-6 order-md-3 order-2 flex justify-center">
        <!--  Category -->
        <x-category_dropdown/>
    </div>

    <!-- Categories Section Begin -->
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 mb-6">
        @if ($posts->count())
            <x-main_category_post_item :post="$posts[0]"/>

            @if($posts->count() > 1)
                <div class="lg:grid lg:grid-cols-6">
                    @foreach ($posts->skip(1) as $post)
                        <x-categories_post_item :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3': 'col-span-2'}}"/>
                    @endforeach
                </div> 
            @endif             
            {{ $posts->links() }} 
        @else
            <p class="text-center">No Post to show yet.</p>
        @endif
    </main>
    <x-slide_images/>
    <!-- Categories Section End -->
    <script>
        function select()
            {
                var category = $('select#category').find(':selected').data('value');
                if(category == 'all')
                {
                    var APP_URL = "{{url('/')}}";
                    $.ajax({
                        type :"GET",
                        url : window.location.replace(APP_URL)
                    });
                }else{
                    var APP_URL = "{{url('/')}}";
                    $.ajax({
                        type :"GET",
                        url : window.location.replace(APP_URL+"/?categories="+category+"")
                        
                        // "{{url('/categories/')}}"+category+""

                    });
                }
            }
        // function check()
        // {
        //     if(window.jQuery)
        //     {
        //         alert('yes');
        //     }else{
        //         alert('no');
        //     }
        // }
        
    </script>
</x-layouts>
