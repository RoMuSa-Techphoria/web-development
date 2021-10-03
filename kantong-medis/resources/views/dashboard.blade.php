<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <title>Kantong Medis</title>
</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Kenalin, Kantong Medis</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Kesehatan tertolong menjadi optimis</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="explore.html"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                                style="text-decoration: none">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                    <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_4FGi6N.json" speed="1"
                        style="width: 100%" loop autoplay></lottie-player>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <div class="container p-4">

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Feature</h2>
                    <p>Our feature</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/images/medicine.png') }}" class="img-fluid" alt="">
                            <h3>Obat-obatan</h3>
                            <p>Temukan obat-obatan yang kamu cari tanpa harus keluar rumah.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ asset('assets/images/vaccine.png') }}" class="img-fluid" alt="">
                            <h3>Vaksin</h3>
                            <p>Temukan lokasi pelayanan kesehatan yang menyediakan vaksin kebutuhanmu.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <img src="{{ asset('assets/images/covidtest.png') }}" class="img-fluid" alt="">
                            <h3>Tes Covid-19.</h3>
                            <p>Temukan lokasi pelayanan kesehatan yang menyediakan test Covid-19 yang kamu butuhkan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Team</h2>
                    <p>Our hard working team</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/refaldy.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Refaldy Bagas Riyanto</h4>
                                <span>Developer</span>
                                <p>"Dengan Kantong Medis masyarakat dapat mencari lokasi tempat yang menyediakan vaksin
                                    Covid-19."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/thingkilia.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Thingkilia Finnatia Husin</h4>
                                <span>Developer</span>
                                <p>"Masyarakat dapat dengan mudah mencari ketersedian obat-obatan yang dibutuhkan tanpa
                                    harus keluar rumah."</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/marcellino.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Marcellino</h4>
                                <span>Developer</span>
                                <p>"Masyarakat yang masih bingung mencari lokasi tempat yang menyediakan test Covid-19
                                    dapat dengan mudah menemukannya di Kantong Medis"</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

    </div>

    <footer class="footer p-4">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 text-center">Copyright &copy; Kantong Medis {{ date('Y') }}</div>
            </div>
        </div>
    </footer>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
