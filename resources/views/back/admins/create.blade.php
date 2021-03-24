@extends('layouts.layout')

@section('title')
    Add Admin
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

    <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <label for="name">Full Name</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="name" id="name"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" name="email" id="email"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input class="form-control" type="password" name="password" id="password"/>
            </div>
        </div><br/>

        <div class="row">
            <div class="col-12">
                <input class="btn btn-primary btn-sm float-right" type="submit" value="Submit"/>
            </div>
        </div>
    </form>
@endsection
