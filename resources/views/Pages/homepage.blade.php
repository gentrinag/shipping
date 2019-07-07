@extends('layouts.app')

@section('content')
    <h1>test</h1>

    @if(count($services)>0)
        <ul class="ul_class">
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection