<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    .carousel-item img {
      height: 450px;
      /* Set your desired height here */
      object-fit: cover;
      /* This property ensures the image covers the specified dimensions */
    }
  </style>
  <title>Document</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container">
      <a class="navbar-brand text-primary fw-bolder fs-3" href="#">PELITA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="fitur-navbar collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
          <li class="nav-item">
            <a class="nav-link active fw-semibold" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="#">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi Kesehatan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Inkes</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Panduan Gizi</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Kebijakan & Program</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Statistik Stunting</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Kalkulator Stunting</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Kampanye & Acara</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="#">Forum & Komunitas</a>
          </li>
        </ul>
        <div class="login-regis">
          <a class="btn btn-dark" href="/login">Login</a>
          <a class="btn btn-primary" type="submit">Register</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>
              Some representative placeholder content for the second slide.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>
              Some representative placeholder content for the third slide.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- About -->
    <div class="about text-center">
      <h3>About</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Berita Terkini -->
    <div class="about text-center">
      <h3>Berita Terkini</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Informasi Layanan Kesehatan -->
    <div class="about text-center">
      <h3>Informasi Layanan Kesehatan</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Panduan Gizi Balita -->
    <div class="about text-center">
      <h3>Panduan Gizi Balita</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Kebijakan & Program Kesehatan -->
    <div class="about text-center">
      <h3>Kebijakan & Program Kesehatan</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Forum & Komunitas -->
    <div class="about text-center">
      <h3>Forum & Komunitas</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
    <!-- Kampanye & Acara Kesehatan Balita -->
    <div class="about text-center">
      <h3>Kampanye & Acara Kesehatan Balita</h3>
    </div>
    <div class="d-flex justify-content-evenly mb-5">
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
      <div class="card" style="width: 18rem">
        <img src="https://casf.com.au/wp-content/uploads/2022/01/silver_grey.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <button type="button" class="btn btn-info">View More</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>