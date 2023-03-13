@extends('frontend.layout.app')
@section('content')
    @include('backend.layout.alert')

    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0" style="margin-top:100px;">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                   @foreach($Category->where('parent_id', 0) as $item)
                        <li class="breadcrumb-item">
                            <a href="{{ route('kategori', [$item->slug, 'id' => $item->id]) }}"
                               title="{{ $item->title }}" class="text-white">
                                {{ $item->title }}
                            </a>
                        </li>
                        @foreach($Category->where('parent_id', $item->id) as $itemm)
                        <li class="breadcrumb-item">
                            <a href="{{ route('kategori', [$item->slug, $itemm->slug,'id' => $item->id]) }}"
                               title="{{ $itemm->title }}"
                               class="text-white">
                                {{ $itemm->title }}
                            </a>
                        </li>
                        @endforeach
                    @endforeach
                <li class="breadcrumb-item active" aria-current="page">{{ $Detay->title }}</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-top">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="product-gallery">
                                    <figure class="product-main-image">
                                        <span class="product-label label-sale">Kılıçhan</span>
                                        <img id="product-zoom" src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'thumb')}}" data-zoom-image="{{$Detay->getFirstMediaUrl('page', 'img')}}" alt="{{ $Detay->title }}">
                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure>
                                    <div id="product-zoom-gallery" class="product-image-gallery max-col-6">
                                        <a class="product-gallery-item active" href="#" data-image="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'thumb')}}" data-zoom-image="{{$Detay->getFirstMediaUrl('page', 'img')}}">
                                            <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $Detay->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $Detay->title }} - TB Kitap">
                                        </a>
                                        @foreach($Detay->getMedia('gallery') as $item)
                                            <a class="product-gallery-item" href="#" data-image="{{ $item->getUrl('thumb') }}" data-zoom-image="{{ $item->getUrl('img') }}">
                                                <img src="{{ $item->getUrl('small') }}" alt="{{ $Detay->title }} - TB Kitap">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 bg-white p-5">
                                <div class="product-details ">
                                    <h1 class="product-title">{{ $Detay->title }}</h1>
                                <div>

                            </div>

                            <div class="product-content">
                                {!! $Detay->short  !!}
                            </div>

                        </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
