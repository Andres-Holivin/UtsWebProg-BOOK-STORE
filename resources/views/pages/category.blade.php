@extends('layouts.master',['category',$category])
@section('body')
    <div class="bg-warning fs-5 px-2">
            {{$categoryName->name}}
    </div>
    @include('layouts.listTable')
@endsection
