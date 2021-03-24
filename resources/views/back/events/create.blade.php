@extends('layouts.layout')

@section('title')
    Add Event
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

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="title_en">English Title</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="title_en" id="title_en"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="title_ar">Arabic Title</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="title_ar" id="title_ar"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="description_en">English Description</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="description_en" id="description_en"></textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="description_ar">Arabic Description</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="description_ar" id="description_ar"></textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="summary_en">English Summary</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="summary_en" id="summary_en"></textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="summary_ar">Arabic Summary</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="summary_ar" id="summary_ar"></textarea>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-6">
                <label for="start_date">Start Date</label>
            </div>
            <div class="col-6">
                <label for=end_date">End Date</label>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <input type="date" name="start_date" id="start_date" class="form-control">
            </div>
            <div class="col-6">
                <input type="date" name="end_date" id="end_date" class="form-control">
            </div>
        </div> <br/>

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
