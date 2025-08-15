@extends('layout')

@section('content')
<form action="{{ route('contacts.store') }}" method="POST" onsubmit="return validateForm();">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <button type="submit" class="save123">Save</button>
</form>
@endsection
