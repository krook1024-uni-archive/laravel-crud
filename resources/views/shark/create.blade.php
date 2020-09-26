@extends('common_template')
@section('content')
    <h1>Create a shark</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'sharks', 'enctype' => 'multipart/form-data')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Request::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('shark_level', 'shark Level') }}
        {{ Form::select('shark_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Request::old('shark_level'), array('class' => 'form-control')) }}
    </div>

    <div class="form-file mt-3">
        {{ Form::file('shark_image', ['class' => 'form-file-input']) }}
        <label for="shark_image" , class="form-file-label" for="customFile">
            <span class="form-file-text">Choose file...</span>
            <span class="form-file-button">Browse</span>
        </label>
    </div>

    {{ Form::submit('Create the shark!', array('class' => 'btn btn-primary mt-3')) }}

    {{ Form::close() }}
@endsection
