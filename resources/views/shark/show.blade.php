@extends('common_template')
@section('content')
    <div class="card mx-auto" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $shark->name }}</h5>
            <p class="card-text">
                <strong>Email:</strong> {{ $shark->email }}<br>
                <strong>Level:</strong> {{ $shark->shark_level }}
            </p>
        </div>
    </div>
@endsection
