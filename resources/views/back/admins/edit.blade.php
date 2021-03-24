@extends('layouts.layout')

@section('title')
    Edit Admin
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

    <form action="{{ route('admins.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-12">
                <label for="name">Full Name</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="name" id="name" value="{{ $admin->name }}" />
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <input class="btn btn-primary btn-sm float-right" type="submit" value="Submit"/>
            </div>
        </div>
    </form>
@endsection
