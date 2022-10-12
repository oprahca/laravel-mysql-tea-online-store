@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-3 col-lg-4 mb-2">
        <div class="card">
            <a href="{{ route('product.show', ['id'=>$product->getId()]) }}">
                <img src="{{ asset('/storage/'.$product->getImage()) }}" alt="image" class="card-img-top img-card">
            </a>
            <div class="card-body text-center bg-light">
                <a href="{{ route('product.show', ['id'=>$product->getId()]) }}" class="product-name">{{ $product->getName() }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection