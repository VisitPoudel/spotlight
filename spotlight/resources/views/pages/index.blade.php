@extends("master")

@section("content")
<div class="banner">
    <img src={{asset('images/banner.webp')}} class="banner-img">
    <div class="banner-slogan">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quam et quidem, repellat quibusdam quasi blanditiis officiis
    </div>
    <div class="banner-dark">

    </div>
</div>
<div class="row" style="padding: 25px;">
    <div class="d-flex justify-content-between p-3">
        <h3>Lost Posts</h3>
        <button type="button" class="btn btn-outline-primary">View More</button>
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
</div>
<hr style="margin: 0 25px;">
<div class="row" style="padding: 25px;">
    <div class="d-flex justify-content-between p-3">
        <h3>Found Posts</h3>
        <button type="button" class="btn btn-outline-primary">View More</button>
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
    <div class="col-4">
        @include("components.card")
    </div>
</div>
@endsection