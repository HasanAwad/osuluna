@extends('layouts.layout')

@section('title')
    Application Form
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <label for="business_name">Family Business Name</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="business_name">{{ $form->family_business_name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="applicant_name">Applicant Name</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="applicant_name">{{ $form->applicant_full_name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="industry">Industry</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="industry">{{ $form->industry->name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="sector">Business Sector</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="sector">{{ $form->bSectore->name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="generation">Business Generation</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="generation">{{ $form->bGeneration->name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="legal_form">Business Legal Form</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="legal_form">{{ $form->legalForm->name }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="establishment">Establishment Year</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control" id="establishment">{{ $form->business_year_establishment }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>Number of Family Members</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control">{{ $form->nb_family_members }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>Number of Business Owners</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control">{{ $form->nb_of_business_owner }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>Email</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control">{{ $form->email }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>Phone</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control">{{ $form->phone_number }}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>Full Address</label>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="form-control">{{ $form->full_address }}
        </div>
    </div>
@endsection
