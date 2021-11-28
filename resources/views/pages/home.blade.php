@extends('layouts.master',['category',$category])
@section('body')
    <div>
        <div class="bg-warning fs-5 px-2">
            Book List
        </div>
        @include('layouts.listTable')
    </div>
@endsection
