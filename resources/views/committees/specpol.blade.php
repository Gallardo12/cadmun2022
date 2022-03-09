@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="specpol-overlay">
        <div class="container text-center">
            <h1>Special Political and Decolonization Committee</h1>
            <br><br>
            <p style="color:red; font-size: 25px">TOPIC A:</p>
            <p style="font-size: 20px">The decolonization of Western Sahara </p>
            <p style="color:red; font-size: 25px">TOPIC B:</p>
            <p style="font-size: 20px">Reviewing the ongoing crisis in Kashmir</p>
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
                    <p style="text-align: justify;">The Special Political and Decolonization Committee (Fourth
                        Committee) considers a broad range of issues covering a cluster of five
                        decolonization-related agenda items, the effects of atomic radiation, questions relating to
                        information, a comprehensive review of the question of peacekeeping operations as well as a
                        review of special political missions, the United Nations Relief and Works Agency for
                        Palestinian Refugees in the Near East (UNRWA), Israeli Practices and settlement activities
                        affecting the rights of the Palestinian people and other Arabs of the occupied territories,
                        and International cooperation in the peaceful uses of outer space. In addition to these
                        annual items, the Committee also considers the items on Assistance in mine action, and
                        University for peace biennially and triennially respectively, both of which will be before
                        it at the 76th session of the General Assembly.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Background paper</h2>
                        <br>
                        <a href="/assets/background_papers/specpol/a.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC A</button></a>
                        <a href="/assets/background_papers/specpol/b.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC B</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h2>Contact committee</h2>
                        <p>specpol@cadmun.org</p>
                        <a href="mailto:specpol@cadmun.org" target="_blank"><button class="btn btn-outline-light"
                                type="button">Send E-mail</button></a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <img src="/assets/img/chairs/specpol.jpg" alt=""
                            class="img-fluid rounded mx-auto d-block img-thumbnail">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Director</strong>
                            <h3 class="mb-0">Emilio Aguilar</h3>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Moderator</strong>
                            <h3 class="mb-0">Francia Gamero</h3>
                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

</main><!-- End #main -->
@endsection
