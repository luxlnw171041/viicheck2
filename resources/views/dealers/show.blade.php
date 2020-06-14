@extends('theme.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dealer {{ $dealer->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/dealers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/dealers/' . $dealer->id . '/edit') }}" title="Edit Dealer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('dealers' . '/' . $dealer->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Dealer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $dealer->id }}</td>
                                    </tr>
                                    <tr><th> Name Dealers </th><td> {{ $dealer->name_dealers }} </td></tr><tr><th> Province </th><td> {{ $dealer->province }} </td></tr><tr><th> Dealers </th><td> {{ $dealer->dealers }} </td></tr><tr><th> Isuzu All </th><td> {{ $dealer->isuzu_all }} </td></tr><tr><th> Pickup And Multipurpose </th><td> {{ $dealer->pickup_and_multipurpose }} </td></tr><tr><th> Paint And Body </th><td> {{ $dealer->Paint_and_body }} </td></tr><tr><th> Location </th><td> {{ $dealer->location }} </td></tr><tr><th> Latitude </th><td> {{ $dealer->latitude }} </td></tr><tr><th> Longitude </th><td> {{ $dealer->longitude }} </td></tr><tr><th> Image </th><td> {{ $dealer->image }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
