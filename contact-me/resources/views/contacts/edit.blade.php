@extends('layout')

@section('content')
<form action="{{ route('contacts.update', $contact) }}" method="POST" onsubmit="return validateForm();">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $contact->name }}"><br>
    <input type="email" name="email" value="{{ $contact->email }}"><br>
    <input type="text" name="phone" value="{{ $contact->phone }}"><br>
    <button type="submit" class="save123">Update</button>
</form>
@endsection
