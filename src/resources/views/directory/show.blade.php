
@extends('main-layout')

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('img/ayax-logo.svg') }}" alt="ayax">
            <h2>{{ __('title.main') }}</h2>
            <p class="lead">{{ __('title.description') }}</p>
        </div>
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">{{ __('filter.title') }}</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckLocality">
                <label class="form-check-label" for="flexSwitchCheckLocality">{{ __('filter.locality') }}</label>
            </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDistrict">
                <label class="form-check-label" for="flexSwitchCheckDistrict">{{ __('filter.district') }}</label>
            </div>
            </li>
        </ul>
        <form class="card p-2">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="{{ __('filter.place') }}">
            <div class="input-group-append">
                <button class="btn btn-secondary" id="searchFilter">{{ __('filter.find') }}</button>
            </div>
            </div>
        </form>
        </div>
        <div class="col-md-8 order-md-1">
    <h4 class="mb-3">{{ __('table.title') }}</h4>
    <form class="needs-validation" novalidate="">
        <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('table.locality') }}</th>
                <th scope="col">{{ __('table.district') }}</th>
                <th scope="col">{{ __('table.region') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directories as $directory)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{ $directory->name }}</td>
                        <td class="col-md-4">
                            {{ $directory->districts->implode('name', ', ') }}
                        </td>
                        <td class="col-md-4">{{ $directory->region->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <hr class="mb-4">
    </form>
    </div>
@endsection

