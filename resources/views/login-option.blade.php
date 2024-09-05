
{{-- @extends('layouts.app')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        /* .video-container {
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
}

#background-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
} */

    </style>
</head>
<body style="background-color: rgb(40, 116, 116)">
    {{-- <div class="video-container">
        <video autoplay muted loop id="background-video">
            <source src="https://th.bing.com/th?&id=OVP.eSnibXmf_EH2hFbekMMfrgEsDh&w=254&h=142&c=7&pid=2.1&rs=1" type="video/mp4">
        </video>
    </div> --}}
    <div class="container mt-5">
        <img src="{{ asset('storage/foto/logo-removebg-preview.png') }}" class="lg" alt="" style="margin-left: 68vh">
        <h2 class="text-center mb-4 text-light">Login Sebagai</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-grid gap-3">
                    <a href="/logn" class="btn btn-secondary btn-lg">Login sebagai Pembeli</a>
                    <a href="/login" class="btn btn-secondary btn-lg">Login sebagai Penjual</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>


{{-- @endsection --}}
