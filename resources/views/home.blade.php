@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    @if($option=='option1')
        <p>Welcome</p>
        <p>{{$user_name}}</p>
        <p>{{$user_email}}</p>
    @endif

@if($option=='option2')
        <p>------------------------------</p>

    @for($i=0; $i<sizeof($cities_array);  $i++)
            <p>{{$cities_array[$i]}}</p>
        @endfor
@endif


@if($option=='option3')
        <p>------------------------------</p>
        <table>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            @foreach($cities_array as $city)
                <tr>
                    <td>{{$loop->index +1 }}</td>
                    <td>{{$city}}</td>

                    <td>Germany</td>
                </tr>
            @endforeach()
        </table>
@endif

</div>
@endsection

