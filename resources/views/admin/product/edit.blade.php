@extends('layouts.admin')
@section('title',$viewData['title'])
@section('content')
<div class="text-start">
    <a class="btn btn-outline-secondary px-4 mb-3 text-start" href="{{ route('admin.product.index') }}">Go back Product</a>
</div>
<div class="card mb-4">
    <div class="card-header fw-bold bg-dark text-white">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert0danger list-unstyled">
            @foreach($errors->all as $error)
            <li>* {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.product.update',['id'=>$viewData['product']->getId()]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="name" class="fw-bold col-lg-2 col-md-6 col-sm-12 col-form-label">Name: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="text" class="form-control" name="name" value="{{ $viewData['product']->getName() }}">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label for="price" class="fw-bold col-lg-2 col-md-6 col-sm-12 col-form-label">Price: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="text" name="price" value="{{ $viewData['product']->getPrice() }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label  class="col-lg-2 col-md-6 col-sm-12 col-form-label fw-bold">Image: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description: </label>
                <textarea name="description" rows="3" class="form-control">{{ $viewData['product']->getDescription() }}</textarea>
            </div>
            <button type="submit" class="btn btn-dark px-4">Update</button>
            <button type="reset" class="btn btn-dark px-4">Clear</button>
        </form>
    </div>
</div>
    
@endsection