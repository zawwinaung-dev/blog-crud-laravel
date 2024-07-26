@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 600px">
        <h1>Edit Article</h1>

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
            <input type="text" name="title" value="{{ $article->title}}" placeholder="Title" class="form-control mb-2">
            <textarea name="body" placeholder="Body" class="form-control mb-2">{{ $article->body }}</textarea>
            <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}"
                        @selected($category->id == $article->category_id)>
                        {{ $category->name}}
                    </option>
                @endforeach
            </select>
            <button class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection