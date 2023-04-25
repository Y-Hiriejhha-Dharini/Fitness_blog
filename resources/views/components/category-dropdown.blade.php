<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    @props(['categories','currentcategory'])

    <select onchange="select()" id="category" class="max-h-54 overflow-auto flex-2 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
        <option>{{isset($currentcategory)? $currentcategory->name : 'Category'}}</option>
        <option data-value="all">All</option>
        @foreach ($categories as $category)
            <option data-value="{{$category->slug}}&{{http_build_query(request()->except('category','page'))}}" class="{{isset($currentcategory) && $currentcategory->id == $category->id ? 'bg-blue-500 text-white' : ''}}">{{ucwords($category->name)}}</option>
        @endforeach
    </select>
    <x-icon/>
</div>