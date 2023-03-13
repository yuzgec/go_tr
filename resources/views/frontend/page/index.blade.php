@extends('frontend.layout.app')
@section('content')

    <div class="page-content" style="margin-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3 mb-lg-0 mt-5">
                    <h2 class="title text-white">{{ $Detay->title }}</h2>
                    {!!  $Detay->desc !!}
                </div>
            </div>
            <div class="mb-5"></div>
        </div>
@endsection
