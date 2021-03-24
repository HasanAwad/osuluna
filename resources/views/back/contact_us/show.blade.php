@extends('layouts.layout')

@section('title')
    Contact Forms
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <label for="name">Full Name</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="name">{{ $form->name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="email">{{ $form->email }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="phone">Phone</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="phone">{{ $form->phone }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="subject">Subject</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="subject">{{ $form->subject }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="message">Message</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="message">{{ $form->message }}
        </div>
    </div>
@endsection
