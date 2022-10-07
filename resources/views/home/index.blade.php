@extends('layouts.app')
@section('title',$viewData['title'])
@section('content')
<div class="row my-4">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea01.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea02.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea03.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea04.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea05.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/tea06.jpg') }}" alt="tea image" class="img-fluid rounded">
    </div>
    <div class="text-center py-4">
        <p><b>Read More</b></p>
    </div>
</div>

@endsection
