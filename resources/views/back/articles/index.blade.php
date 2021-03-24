@extends('layouts.layout')

@section('title')
    Articles
    <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary float-right">Add Article</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="width: 10%">Created At</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title_en }} - {{ $article->title_ar }}</td>
                            <td>{{ date('Y-m-d', strtotime($article->created_at)) }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('articles.edit', $article->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                </div>

                                <div class="d-inline-block">
                                    <form action="{{ route('articles.destroy', [$article->id]) }}" method="post" id="deleteForm">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        {!! method_field('delete') !!}
                                        {!! csrf_field() !!}
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
