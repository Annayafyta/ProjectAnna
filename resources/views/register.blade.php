<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
</head>
<body>
     <div class="card mt-5">
                    <div class="card-header text-center">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">
                            @csrf
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block mt-3 w-100">Masuk</button>
                        </form>
                    </div>
                </div>
</body>
</html>
{{-- <script src="{{ asset('asset/bootstrap-5.3.3-dist/js/bootstrap.min.js')}}"></script> --}}
<script src="bootstrap/js/bootstrap.min.js"></script>

