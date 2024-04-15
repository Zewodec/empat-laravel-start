@extends('master')

@section('content')

    <form style="margin: 64px; display: flex; flex-direction: column; gap: 30px;" method="POST" target="/add-blog">
        @csrf
        <input type="text" name="text" placeholder="Content">
        <input type="text" name="imageURL" placeholder="Image URL">
        <button style="height: 30px; color: #18181b;" type="submit">Add Blog</button>

    </form>

@endsection
