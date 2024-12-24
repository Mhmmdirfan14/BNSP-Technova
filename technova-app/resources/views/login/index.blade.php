<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>login</title>
</head>

<body>
    <div class="main-container">


        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                <p class="text-center small">Enter your username & password to login</p>
            </div>

            <form class="row g-3 needs-validation" action="" method="GET">
                @csrf
                <div class="col-12">
                    <label for="email" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="email">
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <input type="password" name="password" class="form-control" id="password">
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                </div>

                <div class="col-12"><br>
                    <button class="btn-submit w-100" type="submit">Login</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>
                </div>
            </form>


        </div>

    </div>
</body>

</html>
