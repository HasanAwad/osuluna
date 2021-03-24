@extends('layouts.layout')

@section('title')
    Events
    <a href="{{ route('events.create') }}" class="btn btn-sm btn-primary float-right">Add Event</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>English Summary</th>
                        <th>Arabic Summary</th>
                        <th style="width: 10%">Start Date</th>
                        <th style="width: 10%">End Date</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->title_en }} - {{ $event->title_ar }}</td>
                            <td>{{ $event->summary_en }}</td>
                            <td>{{ $event->summary_ar }}</td>
                            <td>{{ date('Y-m-d', strtotime($event->start_date)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($event->end_date)) }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('events.edit', $event->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                </div>

                                <div class="d-inline-block">
                                    <form action="{{ route('events.destroy', [$event->id]) }}" method="post" id="deleteForm">
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
