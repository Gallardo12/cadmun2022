@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="hr-overlay">
        <div class="container text-center">
            <h1>Human Rights</h1>
            <br><br>
            <p style="color:red; font-size: 25px">TOPIC A:</p>
            <p style="font-size: 20px">Advancing International Human Rights to Protect against Discrimination Based
                on Sexual Orientation and Gender Identity</p>
            <p style="color:red; font-size: 25px">TOPIC B:</p>
            <p style="font-size: 20px">The Impacts of Unilateral Coercive Measures on the Protection and Enjoyment
                of Human Rights</p>
        </div>
    </div>

    <div class="container py-4">
        <section id="des">

            <div class="pb-3 mb-4 border-bottom">
                <p style="font-size: 30px; text-align: center; background-color:#eff542; color: black; ">YELLOW
                    DIVISION
                    (7TH
                    GRADE - 9TH GRADE)</p>
            </div>

            <div class="p-5 mb-4 bg-dark rounded-3">
                <div class="container-fluid py-5 bg-dark">
                    <h1 class="display-5 fw-bold">Description</h1>
                    <p style="text-align: justify;">The Council was created by the United Nations General Assembly
                        on 15 March 2006. The Human Rights Council is an inter-governmental body within the United
                        Nations system responsible for strengthening the promotion and protection of human rights
                        around the globe and for addressing situations of human rights violations and make
                        recommendations on them. It has the ability to discuss all thematic human rights issues and
                        situations that require its attention throughout the year. It meets at the UN Office at
                        Geneva.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Background paper</h2>
                        <br>
                        <a href="/assets/background_papers/hr/a.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC A</button></a>
                        <a href="/assets/background_papers/test.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC B</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h2>Contact committee</h2>
                        <p>human.rights@cadmun.org</p>
                        <a href="mailto:human.rights@cadmun.org" target="_blank"><button class="btn btn-outline-light"
                                type="button">Send E-mail</button></a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <img src="/assets/img/chairs/hr.jpg" alt=""
                            class="img-fluid rounded mx-auto d-block img-thumbnail">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Director</strong>
                            <h3 class="mb-0">Ana Paola Mancinas</h3>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Moderator</strong>
                            <h3 class="mb-0">Ariel Majul</h3>
                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

</main><!-- End #main -->
@endsection
