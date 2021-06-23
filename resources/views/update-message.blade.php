@extends('loyauts.app')


@section('title-block')
Update mess
@endsection


@section('content')
<h1>Update mess</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="email" value="{{ $data->email }}" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="subject" value="{{ $data->subject }}" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Text</label>
        <textarea name="message" id="message" placeholder="write text" class="form-control">{{ $data->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>

</form>
@endsection