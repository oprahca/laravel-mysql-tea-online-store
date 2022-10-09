@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header fw-bold bg-dark text-white">
        Create Products
    </div>
    <div class="card-body">
        <form method="POST" action="{{  route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="name" class="fw-bold col-lg-2 col-md-6 col-sm-12 col-form-label">Name: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="name" class="form-control" type="text" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label for="price" class="fw-bold col-lg-2 col-md-6 col-sm-12 col-form-label">Price: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image: </label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3 text-start">
                <label for="description" class="form-label fw-bold">Description: </label>
                <textarea name="descroption" rows="3" class="form-control"></textarea>
            </div>
            @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li><small>* {{ $error }}</small></li>
                @endforeach
            </ul>
            @endif
            <button type="submit" class="btn btn-dark px-4">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header bg-dark text-white fw-bold">
        Manage Products
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["products"] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>
                        <button class="edit btn btn-sm btn-outline-dark px-3">
                            <img src="{{ asset('/img/edit.svg') }}" alt="edit" class="img-profile"> Edit
                        </button>
                    </td>
                    <td>
                        <button class="delete btn btn-sm btn-outline-dark px-3">
                            <img src="{{ asset('/img/delete.svg') }}" alt="delete" class="text-white img-profile"> Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection