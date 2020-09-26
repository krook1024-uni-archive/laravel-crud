@extends('common_template')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="card">
                @if($shark->image)
                    <img src="{{ $shark->image->image_path }}" class="card-img-top" alt="{{ $shark->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $shark->name }}</h5>
                    <p class="card-text">
                        <strong>Email:</strong> {{ $shark->email }}<br>
                        <strong>Level:</strong> {{ $shark->shark_level }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
