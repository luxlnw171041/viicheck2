@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">District {{ $district->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/districts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/districts/' . $district->id . '/edit') }}" title="Edit District"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('districts' . '/' . $district->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete District" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $district->id }}</td>
                                    </tr>
                                    <tr><th> District </th><td> {{ $district->district }} </td></tr><tr><th> Amphoe </th><td> {{ $district->amphoe }} </td></tr><tr><th> Province </th><td> {{ $district->province }} </td></tr><tr><th> Zipcode </th><td> {{ $district->zipcode }} </td></tr><tr><th> District Code </th><td> {{ $district->district_code }} </td></tr><tr><th> Amphoe Code </th><td> {{ $district->amphoe_code }} </td></tr><tr><th> Province Code </th><td> {{ $district->province_code }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
