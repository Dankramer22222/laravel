@extends('layout')
@section('title')Галерея@endsection
@section('main content')
    <div class="carousel-caption text-start">
        <h1>Example headline.</h1>
        <p>Some representative placeholder content for the first slide of the carousel.</p>
        <p><a class="btn btn-lg btn-primary" href="#">Загрузить фото</a></p>
    </div>
    <div class="carousel-caption text-end">
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <rect width="100%" height="100%" fill="#777"></rect>


@endsection

