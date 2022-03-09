@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="habitat-overlay">
        <div class="container text-center">
            <h1>United Nations Human Settlements Programme (UN-Habitat)</h1>
            <br><br>
            <p style="color:red; font-size: 25px">TOPIC A:</p>
            <p style="font-size: 20px">Drastically Reducing Maritime Pollution, including plastics</p>
            <p style="color:red; font-size: 25px">TOPIC B:</p>
            <p style="font-size: 20px">Pollution Caused By The Food Industry</p>
        </div>
    </div>

    <div class="container py-4">
        <section id="des">

            <div class="pb-3 mb-4 border-bottom">
                <p style="font-size: 30px; text-align: center; background-color:#ef42f5; ">PINK DIVISION (6TH GRADE)
                </p>
            </div>

            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid py-5 bg-dark">
                    <h1 class="display-5 fw-bold">Description</h1>
                    <p style="text-align: justify;">The UN-Habitat’s vision of “a better quality of life for all in
                        an urbanizing world” is bold and ambitious. UN-Habitat works with partners to build
                        inclusive, safe, resilient and sustainable cities and communities. UN-Habitat promotes
                        urbanization as a positive transformative force for people and communities, reducing
                        inequality, discrimination and poverty. UN-Habitat works in over 90 countries to promote
                        transformative change in cities and human settlements through knowledge, policy advice,
                        technical assistance and collaborative action.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Background paper</h2>
                        <br>
                        <a href="/assets/background_papers/habitat/a.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC A</button></a>
                        <a href="/assets/background_papers/habitat/b.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC B</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h2>Contact committee</h2>
                        <p>habitat@cadmun.org</p>
                        <a href="mailto:habitat@cadmun.org" target="_blank"><button class="btn btn-outline-light"
                                type="button">Send E-mail</button></a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <img src="/assets/img/chairs/habitat.jpg" alt=""
                            class="img-fluid rounded mx-auto d-block img-thumbnail">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">

                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Director</strong>
                            <h3 class="mb-0">Esteban Ruelas</h3>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">

                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Moderator</strong>
                            <h3 class="mb-0">Barbie Antunez</h3>
                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

</main><!-- End #main -->
@endsection
