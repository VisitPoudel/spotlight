@extends("master")

@section("content")
    <div class="row" style="padding: 25px;">
        <div class="d-flex justify-content-between p-3">
            <h3>Lost Posts</h3>
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