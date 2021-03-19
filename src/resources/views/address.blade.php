<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('img/ayax-logo.svg') }}" alt="ayax">
        <h2>Как-то так</h2>
        <p class="lead">Фильтр подтягивает адреса</p>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Фильтр</span>
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
            <input type="text" class="form-control" placeholder="Адрес с сайта DaData.ru">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Добавить</button>
            </div>
            </div>
        </form>
        </div>
        <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Карта яндекс</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
            <div>Сюда можно вставить яндекс карту</div>
        </div>
        <hr class="mb-4">
      </form>
    </div>
  </div>
    </div>
    <script src="./js/app.js" charset="utf-8"></script>
</body>
</html>
