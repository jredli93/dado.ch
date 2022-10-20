@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.block') }}">
                        @csrf

                        @if (!empty($errors->first()))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{{ $errors->first() }}</strong>
                            </div>
                        @endif
                        @if (Session::has('SuccessMessage'))
                            <br>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{{ Session::get('SuccessMessage') }}</strong>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="fullDate" class="col-md-4 col-form-label text-md-right">Full date(Format: 2021-01-29)</label>

                            <div class="col-md-6">
                                <input id="fullDate" class="form-control" name="fullDate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Time(Format: 15:00:00)</label>

                            <div class="col-md-6">
                                <input id="time" class="form-control" name="time">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Block date
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                    @if($reservations->isNotEmpty())

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{$reservation->date}}</td>
                                <td>{{$reservation->time}}</td>
                                <td>
                                    <div class="modal fade" id="modal-default-{{ $reservation->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- /.modal -->
                                                <form method="POST" action="{{ route('unblock', $reservation->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <p>Do you want to unblock this date?</p>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-primary bg-athena-report athena-btn" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary bg-athena-report athena-btn athena-btn-active">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <a href="" data-toggle="modal" data-target="#modal-default-{{ $reservation->id }}">
                                        <button class="btn btn-primary bg-athena-report btn-block athena-btn athena-btn-active"><i class="fa fa-trash"></i> Unblock</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="text-center">
                            <p>There is no blocked dates!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
