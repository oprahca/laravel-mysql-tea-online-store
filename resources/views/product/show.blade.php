@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/img/' . $viewData['product']->getImage()) }}" alt="image" class="img-fluid rouned-start">
        </div>
        <div class="col-md-8">
            <div class="card-body text-main-gray m-3">
                <h5 class="card-title">
                    {{ $viewData['product']->getName() }}  -  (CAD$ {{ $viewData['product']->getPrice() }})
                </h5>
                <p class="card-text text-muted">
                    {{ $viewData["product"]->getDescription() }}
                </p>
                {{-- <p class="card-text d-flex align-items-end flex-column">
                    <small class="btn btn-outline-secondary px-4">Add to Cart</small>
                </p> --}}
                <p class="card-text">
                    <form method="POST" action="{{ route('cart.add',['id'=> $viewData['product']->getId()]) }}">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text px-3">Quantity</div>
                                    <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-dark text-white px-4" type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection