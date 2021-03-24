@extends('layouts.layout')

@section('title')
    Admins
    <a href="{{ route('admins.create') }}" class="btn btn-sm btn-primary float-right">Add Admin</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('admins.edit', $admin->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                </div>

                                <div class="d-inline-block">
                                    <form action="{{ route('admins.destroy', [$admin->id]) }}" method="post" id="deleteForm">
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
