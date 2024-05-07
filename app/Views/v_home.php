<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-klaim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('asurance-web') ?>/style/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">E-Klaim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#asurance">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('AuthController/login') ?>" class="btn btn-md btn-danger btn-login px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-jmb">
                            <img src="<?= base_url('asurance-web') ?>//assets/usman-malik-cbXfPEOc1-k-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="text-content">
                            <h1 class="title-jumbotron">Klaim Kendaraan Anda dengan Mudah dan Cepat
                            </h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, doloribus nam id
                                recusandae fugit
                                consequuntur cumque fuga quis illum voluptatum et tempora placeat. Deleniti, ullam
                                provident.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="asurance" id="asurance">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="asurance-text">
                            <h1>Tentang Kami</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum maiores sunt dicta,
                                illo
                                error
                                id.
                                Natus
                                consequuntur mollitia sit sapiente reiciendis veniam veritatis non, praesentium
                                optio
                                perspiciatis
                                nostrum vel neque vero? Unde sequi similique, voluptatum magnam repudiandae delectus
                                necessitatibus
                                impedit voluptates? Adipisci veniam officia dolorem incidunt! Cupiditate tempore
                                optio
                                quae?
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-asurance">
                            <img src="<?= base_url('asurance-web') ?>/assets/about1.jpg" alt="" class="shadow">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="layanan" id="layanan">
            <div class="container px-4 py-5" id="featured-3">
                <h1 class="text-center">Layanan Kami</h1>
                <div class="row">
                    <div class="feature col-4 shadow">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-danger bg-gradient">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                    </div>
                    <div class="feature col-4 shadow">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-danger bg-gradient">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                    </div>
                    <div class="feature col shadow">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-danger bg-gradient">
                            <i class="fa fa-car" aria-hidden="true"></i>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial" id="testi">
            <div class="container">
                <div class="background"></div>
                <h1 class="text-center">Cerita Pengalaman Mereka Tentang Kami</h1>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>/assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Robert</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                                                    delectus laudantium, doloremque expedita quidem laborum nulla
                                                    officia labore quo inventore.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>/assets/user2.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Melisa</h3>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique
                                                    facere, recusandae esse harum, debitis laboriosam nostrum iusto
                                                    necessitatibus architecto, mollitia molestias.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>//assets/user3.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Angela</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>//assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Robert</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="/assets/user2.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Melisa</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src=<?= base_url('asurance-web') ?>/assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Danang</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>/assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Danang</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="<?= base_url('asurance-web') ?>/assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Danang</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card item shadow">
                                        <img src="/assets/user1.png" alt="" class="card-img-top rounded">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <h3 class="card-title">Danang</h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Exercitationem,
                                                    iste?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <div class="container">
        <footer class="py-1 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>