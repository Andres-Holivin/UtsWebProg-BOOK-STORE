@extends('layouts.master',['category',$category])
@section('body')
    <div class="px-4 bg-warning fs-5">
        Contact
    </div>
    <div class='p-4 py-4 fs-5' style="display:flex; flex-direction: column; gap:10px">
        <div class="fs-3 fw-bold ">Store address :</div>
        <div>Jalan Pembangunan Raya</div>
        <div>Kompleks Pertokoan Emerald Blok III/12</div>
        <div>Bintaro,  Tangerang Selatan</div>
        <div>Indonesia</div>
        <div class="fs-2 fw-bold">Open Daily</div>
        <div>08.00 - 20.00</div>
        <div class="fs-2 fw-bold">Contact</div>
        <div>Phone : 021-08899776655</div>
        <div>Email : happybookstore@happy.com</div>
    </div>
@endsection