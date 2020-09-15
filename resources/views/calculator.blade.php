<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase font-weight-bold">CALCULATE SITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/calculator">Kalkulator</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Penghitung Bangun Ruang
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/tabung">Tabung</a></li>
                        <li><a class="dropdown-item" href="/bola">Bola</a></li>
                        <li><a class="dropdown-item" href="/kerucut">Kerucut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </nav>
<!-- NAVBAR END -->

    <div class="container justify-content-center mt-5 col-4">
        <h3 class="text-center text-uppercase font-weight-light mb-3">Calculator</h3>
        <form method="POST" action="/calculate">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="number" name="first" class="form-control rounded-0"/>
                <select class="form-select" name="operator" required>
                    <option selected>CHOOSE</option>
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multiply">x</option>
                    <option value="divide">÷</option>
                </select>
                <input type="number" name="second" class="form-control rounded-0"/>
            </div>
            <div class="input-group justify-content-center">
                <a class="btn btn-danger mt-3" href="/calculator">Reset</a>
                <button type="submit" class="btn btn-success mt-3">Submit Answer</button>
            </div>

            @if(session('info'))
            <div class="alert alert-success mt-3">
                    <h5 class="text-center">{{ session('info') }}</h5>        
            </div>
            @endif

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>