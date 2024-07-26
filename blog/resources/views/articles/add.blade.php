@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 600px">
        <h1>New Article</h1>

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-2">
            <textarea name="body" placeholder="Body" class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection