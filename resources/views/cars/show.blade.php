@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Car {{ $car->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/cars') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/cars/' . $car->id . '/edit') }}" title="Edit Car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('cars' . '/' . $car->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $car->id }}</td>
                                    </tr>
                                    <tr><th> Car Model </th><td> {{ $car->car_model }} </td></tr><tr><th> Body Car </th><td> {{ $car->body_car }} </td></tr><tr><th> Rg Number </th><td> {{ $car->rg_number }} </td></tr><tr><th> Car Color </th><td> {{ $car->car_color }} </td></tr><tr><th> Offtion </th><td> {{ $car->offtion }} </td></tr><tr><th> Vg Number </th><td> {{ $car->vg_number }} </td></tr><tr><th> User Id </th><td> {{ $car->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
