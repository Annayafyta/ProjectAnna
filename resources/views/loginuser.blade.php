
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">

</head>
<body style="background-color: rgb(40, 116, 116)">
    <div class="container mt-5 text-light">
        <img src="{{ asset('storage/foto/logo-removebg-preview.png') }}" class="lg" alt="" style="margin-left: 68vh">
        <h2 class="text-center mb-4">Login sebagai Pembeli</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- action="{{ route('login') }}" --}}
                <form method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><a href="/hom">Login</a></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>


