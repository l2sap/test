@extends('loyauts.app')


@section('title-block')
Contact page
@endsection


@section('content')
<h1>Contact page</h1>

<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Text</label>
        <textarea name="message" id="message" placeholder="write text" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Save</button>

</form>
@endsection