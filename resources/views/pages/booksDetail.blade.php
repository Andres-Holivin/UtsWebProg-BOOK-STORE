@extends('layouts.master',['category',$category])
@section('body')
    <div>
        <div class="bg-warning fs-5 px-2">
            Book Detail
        </div>
        @include('layouts.detail')
    </div>
@endsection
