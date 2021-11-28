<div class='p-4 py-4 fs-5' style="display:flex; flex-direction: column; gap:10px">
    <div>Title : {{$bookDetail->title}}</div>
    <div>Author : {{$bookDetail->author}}</div>
    <div>Publisher : {{$bookDetail->publisher}}</div>
    <div>Year : {{$bookDetail->year}}</div>
    <div>
        <div >Description : </div>
        <div>{{$bookDetail->description}}</div>
    </div>
</div>