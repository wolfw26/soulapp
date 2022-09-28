<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Merriweather:wght@400;700;900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,800;1,400&family=Nunito:wght@300&family=Open+Sans:wght@300;400&family=Oswald:wght@200;300;600&family=Poppins:wght@300;400;500;600;700&family=Rancho&display=swap" rel="stylesheet">

    <title>Welcome</title>
</head>

<body>
    <div class="container-fluid m-0 p-1">
        <nav class="navbar navbar-expand-lg   fixed-top ">
            <!-- <div class="container-fluid"> -->
            <a class="navbar-brand d-flex mr-3" href="#">
                <img src=" {{ asset('storage/img/home.png') }} " alt="">
                <h3 class=" judul">SOUL</h3> <i class=" text-primary"> House</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </nav>
        <div class="container-fluid mt-5 pt-5 header-konten" style=" height: 100vh  ;">
            {{-- <img src="{{ asset('storage/img/house.png') }}" alt=""> --}}
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h1 class="judul">SOUL HOUSE</h1>
                        <h3>SOUL HOUSE <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ab eos rem sed modi impedit earum fuga. Nam obcaecati distinctio iusto saepe maiores amet vitae odit tempore sed reiciendis. Vel!</p></h3>
                        <button class="btn btn-outline-primary float-right">Cek Kamar</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- konten --}}
        <div class="container-fluid konten">
            <h3 class="text-center judul">Kamar Penginapan</h3>
            <div class="row align-content-center pt-7">
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 01</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 02</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 03</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 04</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 05</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card" style="width: 25rem; height:500px">
                        <img src="{{ asset('storage/img/house.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kamar No. 06</h5>
                            <p class="card-text">Some quick example text to build on the Kamar No. and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- //Konten --}}
        {{-- harga --}}
        <div class="container-fluid mt-3 p-3">
            <h2 class="text-center m-2">Harga</h2>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead class=" bg-gradient-gray">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Tipe</th>
                                <th class="text-center">Harian</th>
                                <th class="text-center">Bulanan</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th>1</th>
                                <td>001</td>
                                <td>Penginapan</td>
                                <td>-</td>
                                <td>ya</td>
                                <td>2.000.000</td>
                                <td>ready</td>
                            </tr>
                            <tr class="text-center">
                                <th>2</th>
                                <td>002</td>
                                <td>Penginapan</td>
                                <td>ya</td>
                                <td>-</td>
                                <td>100.000</td>
                                <td>ready</td>
                            </tr>
                            <tr class="text-center">
                                <th>3</th>
                                <td>003</td>
                                <td>Penginapan</td>
                                <td>ya</td>
                                <td>-</td>
                                <td>100.000</td>
                                <td>ready</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid m-0 p-3 footer">
            <div class="row">
                <div class="col-4">
                    <h3 class=" text-center">Kontak</h3>
                    <span>soulhouse@example.com</span> <br>
                    <span>#09887688767</span> <br>
                    <span>+628799846766</span> <br>
                    <span>
                        <i>Jl.-------</i>
                        <p>Gg.-=======</p>
                        <p>No.100</p>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
