<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">Welcome To Our Website</h1>
                <p class="text-muted">We are glad to have you here. Explore our services and offerings.</p>
                <a href="#" class="btn btn-success mt-3">See More →</a>
            </div>
            <div class="col-md-6 text-center">
                <!-- Gambar baru yang kamu upload -->
                <img src="{{ asset('front/images/testimonials/potosaya.jpg') }}?v={{ time() }}" alt="Foto Profil" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="mt-5">
            <h4 class="text-success">OUR SERVICES</h4>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>01. Digital Marketing</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-6">
                    <h5>02. Web Design</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
