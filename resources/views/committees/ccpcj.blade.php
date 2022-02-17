@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="ccpcj-overlay">
        <div class="container text-center">
            <h1>The Commission on Crime Prevention and Criminal Justice</h1>
            <br><br>
            <p style="color:red; font-size: 25px">TOPIC A:</p>
            <p style="font-size: 20px">Money laundering </p>
            <p style="color:red; font-size: 25px">TOPIC B:</p>
            <p style="font-size: 20px">Wildlife trafficking and illegal logging</p>
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
                    <p style="text-align: justify;">The Commission on Crime Prevention and Criminal Justice (CCPCJ)
                        was established by the Economic and Social Council (ECOSOC) resolution 1992/1, upon request
                        of General Assembly (GA) resolution 46/152, as one of its functional commissions. The
                        Commission acts as the principal policymaking body of the United Nations in the field of
                        crime prevention and criminal justice. ECOSOC provided for the CCPCJ's mandates and
                        priorities in resolution 1992/22, which include improving international action to combat
                        national and transnational crime and the efficiency and fairness of criminal justice
                        administration systems. The CCPCJ also offers Member States a forum for exchanging
                        expertise, experience and information in order to develop national and international
                        strategies, and to identify priorities for combating crime.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Background paper</h2>
                        <br>
                        <a href="/assets/background_papers/ccpcj/a.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC A</button></a>
                        <a href="/assets/background_papers/ccpcj/b.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC B</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h2>Contact committee</h2>
                        <p>ccpcj@cadmun.org</p>
                        <a href="mailto:ccpcj@cadmun.org" target="_blank"><button class="btn btn-outline-light"
                                type="button">Send E-mail</button></a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <img src="/assets/img/chairs/ccpcj.jpg" alt=""
                            class="img-fluid rounded mx-auto d-block img-thumbnail">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Director</strong>
                            <h3 class="mb-0">Regina Benitez</h3>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Moderator</strong>
                            <h3 class="mb-0">Miguel Casares</h3>
                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

</main><!-- End #main -->
@endsection
