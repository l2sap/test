@extends('loyauts.app')


@section('title-block')
{{ $data->subject }}
@endsection


@section('content')
<h1>{{ $data->subject }}</h1>
<div class="alert alert-info">
    <p>{{ $data->email }}</p>
    <p><small>{{ $data->created_at }}</small></p>
    <p>{{ $data->message }}</p>
    <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-warning">Update</button></a>
    <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
</div>
@endsection