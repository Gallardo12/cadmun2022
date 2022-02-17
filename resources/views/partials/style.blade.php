<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<!-- Favicons -->
<link href="assets/img/CADMUN_transparent_logo.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<style>
    .dropdown-menu {
        width: 100%;
    }

    .scrollable-menu {
        height: auto;
        max-height: 350px;
        overflow-x: hidden;
    }

</style>

<style>
    .card-block .btn-outline-primary {
        width: 100%;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        bottom: 0;
        left: 0;
        position: absolute;
    }

    .card {
        margin: 20px 0;
    }

    /* Flip Cards CSS */
    .card-container {
        perspective: 700px;
    }

    .card-flip {
        position: relative;
        width: 100%;
        transform-style: preserve-3d;
        height: auto;
        transition: all 0.5s ease-out;
        background: dimgrey;
        border: none;
    }

    .card-flip div {
        backface-visibility: hidden;
        transform-style: preserve-3d;
        height: 100%;
        width: 100%;
        border: none;
    }

    .card-flip .front {
        position: relative;
        z-index: 1;
    }

    .card-flip .back {
        position: absolute;
        z-index: 0;
        transform: rotateY(-180deg);
    }

    .card-container:hover .card-flip {
        transform: rotateY(180deg);
    }

</style>
