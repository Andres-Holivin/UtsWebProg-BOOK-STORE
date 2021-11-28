<div  class="text-center">
    <div class="text-center bg-warning fs-5">
        Category
    </div>
    <div style="display: flex; flex-direction: column; ">
        @foreach ($name as $item)
            <a style="text-decoration: none;" class="py-1" href='/Category/{{$item->id}}'>{{$item->name}}</a>
        @endforeach        
    </div>
</div>
