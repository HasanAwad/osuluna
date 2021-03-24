@extends('layouts.layout')

@section('title')
    Mediation Centers Forms
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <label for="name">Full Name</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="name">{{ $form->full_name }}
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
            <label for="country">Country</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="country">{{ $form->country }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="city">City</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="city">{{ $form->city }}
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
            <label for="description">Case Description</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="description">{{ $form->case_description }}
        </div>
    </div>
@endsection
