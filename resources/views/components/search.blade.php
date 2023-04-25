<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="#" method="GET">
            @if (request('categories'))
                <input type="hidden" name="category" value="{{request('categories')}}">
            @endif
            <input type="text" id="search-input" value="{{request('search')}}" name="search" placeholder="Search here.....">
        </form>
    </div>
</div>