<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/donation.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <title></title>
</head>

<body>

    @include('partials.navbar')

    @include('partials.carousel')

    @include('partials.news')

    <h6 class="text-center donate-save" style="color:green;">Donate & Save Life</h6>
    <h2 class="text-center">Help us build a Jewish community of meaning & purpose</h2>

    <div class="container mt-4">
        <div class="card-container">
            <div class="card" data-aos="fade-up">
                <div class="card-body text-center">
                    <div class="icon-circle">
                        <i class='bx bx-donate-heart'></i>
                    </div>
                    <h5 class="card-title">Donate</h5>
                    <p class="card-text">Your gift is someone else's lifeline. Help us build meaning and purpose.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-body text-center">
                    <div class="icon-circle">
                        <i class='bx bx-group'></i>
                    </div>
                    <h5 class="card-title">Volunteer</h5>
                    <p class="card-text">Bring your unique skills, passions, relationships, and experiences.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="600">
                <div class="card-body text-center">
                    <div class="icon-circle">
                        <i class='bx bx-calendar-event'></i>
                    </div>
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">Learn from experts, mentors, and new friends.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="700">
                <div class="card-body text-center">
                    <div class="icon-circle">
                        <i class='bx bx-news'></i>
                    </div>
                    <h5 class="card-title">Stay Informed</h5>
                    <p class="card-text">Organization Blog</p>
                </div>
            </div>
        </div>
    </div>

    <h6 class="text-center donate-save" style="color:blue;">Donate & Save Life</h6>
    <h2 class="text-center">Help us build a Jewish community of meaning & purpose</h2>

    <!-- New long card -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card custom-card" data-aos="fade-right" data-aos-delay="500">
                            <img src="img/gambar1.jpg" class="card-img" alt="Custom Card Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card custom-card" data-aos="fade-right" data-aos-delay="600">
                            <img src="img/gambar1.jpg" class="card-img" alt="Custom Card Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card custom-card" data-aos="fade-left" data-aos-delay="700">
                            <img src="img/gambar1.jpg" class="card-img" alt="Custom Card Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card custom-card" data-aos="fade-left" data-aos-delay="800">
                            <img src="img/gambar1.jpg" class="card-img" alt="Custom Card Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="background-item">
        <div class="text-hello">
            <h3 class="my-4">Change Lives with Your Gift: Donate Now <Br> to and </Br></h3>
            <p>Your donation to the local food bank ensures families in need <Br>have a warm meal this holiday season. Every dollar counts,</Br></p>
            <button class="btn btn-primary ml-3">need help? contact</button>
        </div>
        <div class="img-container">
            <img src="img/gambar1.jpg" alt="">
        </div>
    </div>






    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+VV0A5ZWy5xKt4KGS2l9KKUtiKV8y" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>

    </script>
    <script src="js/donation.js"></script>
</body>

</html>
