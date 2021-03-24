@extends('layouts.layout')

@section('title')
    Edit Article
@endsection

@section('content')
    <br/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="title_en">English Title</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="title_en" id="title_en" value="{{ $article->title_en }}"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="title_ar">Arabic Title</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="title_ar" id="title_ar" value="{{ $article->title_ar }}"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="text_en">English Text</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="text_en" id="text_en">{{ $article->text_en }}</textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="text_ar">Arabic Text</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="text_ar" id="text_ar">{{ $article->text_ar }}</textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-2">
                <label for="image">Image</label>
            </div>

            <div class="col-10">
                <input type="file" name="image" id="image">
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <input class="btn btn-primary btn-sm float-right" type="submit" value="Submit"/>
            </div>
        </div>
    </form>
@endsection
