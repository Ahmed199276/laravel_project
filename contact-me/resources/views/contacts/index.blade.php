@extends('layout')

@section('content')
<a href="{{ route('contacts.create') }}" class="save123">Add Contact</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>
            <a href="{{ route('contacts.edit', $contact) }}" class="save123">update</a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete123">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
