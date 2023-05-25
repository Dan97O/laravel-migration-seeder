@extends('layouts.app')


@section('content')
    <div class="container bg-black">
        <div class="row">
            <div class="col">

                @foreach ($trains as $train)
                    <div class="card my-3 bg-secondary text-white">
                        <div class="card-body shadow">
                            <div class="card-title d-flex justify-content-between">
                                <h4>
                                    <strong> {{ $train->departure_station }}
                                    </strong>
                                    <i class="fa fa-arrow-right" aria-hidden="true">
                                    </i>
                                    <strong>
                                        {{ $train->arrival_station }}
                                    </strong>
                                </h4>
                                <div>
                                    <strong>Train code: </strong>{{ $train->train_code }}
                                </div>
                            </div>
                            <p class="card-text">
                                <strong>
                                    {{ $train->departure_time }}
                                </strong>
                                <i class="fa fa-arrow-right" aria-hidden="true">
                                </i>
                                <strong>
                                    {{ $train->arrival_time }}
                                </strong>
                            </p>
                            <p class="card-text d-flex justify-content-between">
                                <strong>
                                    {{ $train->company }}
                                </strong>
                                <strong>N° Carriages:
                                    {{ $train->number_carriages }}
                                </strong>
                            </p>

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
