<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logosji" src="{{ asset('assets/images/logosji.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('class-list') }}">Daftar Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="bendera" src="{{ asset('assets/images/indonesia.png') }}" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/indonesia.png') }}" alt="Indonesia" class="dropdown-flag"> Indonesia</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/images/jepang.jpg') }}" alt="Jepang" class="dropdown-flag"> Jepang</a></li>
                        <!-- Tambahkan bendera lain sesuai kebutuhan -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <h1>Class List</h1>
        <div class="container text-start">
            <div class="row">
              <div class="col-md-4 mb-3 " >
                {{-- <div class="card p-3" style="max-width: 540px;">
                  <div class="row g-0" >
                    <div class="col-md-4">
                      <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8" >
                      <div class="card-body">
                        <h5 class="card-title">Adit</h5>
                        <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                      </div>
                    </div>
                  </div>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div> --}}

                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/images/adit.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
              </div>
    
              <div class="col-md-4 mb-3">
                <div class="card p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Adit</h5>
                        <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                      </div>
                    </div>
                  </div>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
              </div>
    
              <div class="col-md-4 mb-3">
                <div class="card p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('assets/images/adit.jpg') }}" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Adit</h5>
                        <p class="card-text"><small class="text-body-secondary">adit@gmail.com</small></p>
                      </div>
                    </div>
                  </div>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                </div>
              </div>
    
            </div>
          </div>
    </section>
    
</body>
</html>