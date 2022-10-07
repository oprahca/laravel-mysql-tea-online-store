@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/img/' . $viewData['product']['image']) }}" alt="image" class="img-fluid rouned-start">
        </div>
        <div class="col-md-8">
            <div class="card-body text-main-gray m-3">
                <h5 class="card-title">
                    {{ $viewData['product']['name'] }}  -  (CAD$ {{ $viewData['product']['price'] }})
                </h5>
                <p class="card-text text-muted">
                    {{ $viewData["product"]['description'] }}
                </p>
                <p class="card-text d-flex align-items-end flex-column">
                    <small class="btn btn-outline-secondary px-4">Add to Cart</small>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection