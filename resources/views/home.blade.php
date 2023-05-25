@extends('layouts.app')


@section('content')
    <div class="container bg-black">
        <div class="row">
            <div class="col">

                @foreach ($trains as $train)
                    <div class="card my-3 bg-secondary text-white">
                        <div class="card-body shadow">
                            <h4 class="card-title"><strong> {{ $train->departure_station }}</strong> <i
                                    class="fa fa-arrow-right" aria-hidden="true"></i> <strong> {{ $train->arrival_station }}
                                </strong></h4>
                            <p class="card-text"><strong> {{ $train->departure_time }}</strong> <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i><strong> {{ $train->arrival_time }}</strong></p>
                            <p class="card-text">{{ $train->company }}</p>

                            @if ($train->cancelled)
                                <span class="badge text-bg-danger">Cancelled</span>
                            @else
                                <span class="badge text-bg-success">On Time</span>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
