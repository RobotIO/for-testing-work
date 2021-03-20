
@extends('app')

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
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </li>
        </ul>
        <form class="card p-2">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="{{ __('filter.place') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">{{ __('filter.add') }}</button>
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
                <th scope="col">{{ __('table.region') }}</th>
                <th scope="col">{{ __('table.district') }}</th>
                <th scope="col">{{ __('table.locality') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        </div>
        <hr class="mb-4">
    </form>
    </div>
@endsection

