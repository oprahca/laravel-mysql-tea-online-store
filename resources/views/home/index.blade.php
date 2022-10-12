@extends('layouts.app')
@section('title',$viewData['title'])
@section('content')
<div class="row my-4">
    <div class="col-lg-12">
        <img src="{{ asset('img/coverindex.jpg') }}" alt="index" class="img-fluid" />
    </div>
    
    <div class="text-center py-4 col-md-12 col-lg-10 offset-md-1 mt-4">
        <h2 class="text-main-green"><b>Convenient Environmental Friendly</b></h2>
        <p class="text-main-gray">Three Leafs Tea was born to connect Taiwan's artisan tea masters with modern tea lovers around the world. Whether new or accustomed to Taiwanese tea, there is something for everyone! Our premium, whole-leaf teas come in loose form as well as biodegradable pyramid teabags. We offer classic oolong varieties including our bestselling Oriental Beauty, as well as some gorgeously fragrant floral and herbal blends.</p>
    </div>
</div>

@endsection
