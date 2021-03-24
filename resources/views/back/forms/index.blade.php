@extends('layouts.layout')

@section('title')
    Application Forms
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Family Business</th>
                        <th>Applicant Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <td>{{ $form->family_business_name }}</td>
                            <td>{{ $form->applicant_full_name }}</td>
                            <td>{{ $form->phone_number }}</td>
                            <td>{{ $form->email }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('application_forms.show', $form->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
