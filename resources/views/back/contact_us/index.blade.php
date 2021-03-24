@extends('layouts.layout')

@section('title')
    Contact Us Forms
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th style="width: 10%">Date</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <td>{{ $form->name }}</td>
                            <td>{{ $form->email }}</td>
                            <td>{{ $form->phone }}</td>
                            <td>{{ $form->subject }}</td>
                            <td>{{ date('Y-m-d', strtotime($form->created_at)) }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('contact_us.show', $form->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
