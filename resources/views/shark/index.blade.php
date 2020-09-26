@extends('common_template')
@section('content')
    <h1>All the sharks</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark Level</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($sharks as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->shark_level }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td class="d-flex">
                    <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                    <a class="btn btn-small btn-success mr-3" href="{{ URL::to('sharks/' . $value->id) }}">Show this
                        shark</a>

                    <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                    <a class="btn btn-small btn-info mr-3" href="{{ URL::to('sharks/' . $value->id . '/edit') }}">Edit this
                        shark</a>

                    <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(['url' => 'sharks/' . $value->id]) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this shark', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
