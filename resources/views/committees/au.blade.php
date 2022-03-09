@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="au-overlay">
        <div class="container text-center">
            <h1>African Union</h1>
            <br><br>
            <p style="color:red; font-size: 25px">TOPIC A:</p>
            <p style="font-size: 20px">Maleducation of children and consequent child labor</p>
            <p style="color:red; font-size: 25px">TOPIC B:</p>
            <p style="font-size: 20px">Hunger and poverty in the AU</p>
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
                    <p style="text-align: justify;">The African Union (AU) was officially launched in July 2002 in
                        Durban, South Africa, following a decision in September 1999 by its predecessor, the OAU to
                        create a new continental organisation to build on its work. The decision to re-launch
                        Africa’s pan-African organisation was the outcome of a consensus by African leaders that in
                        order to realise Africa’s potential, there was a need to refocus attention from the fight
                        for decolonisation and ridding the continent of apartheid, which had been the focus of the
                        OAU, towards increased cooperation and integration of African states to drive Africa’s
                        growth and economic development.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Background paper</h2>
                        <br>
                        <a href="/assets/background_papers/au/a.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC A</button></a>
                        <a href="/assets/background_papers/au/b.pdf" target="_blank"><button
                                class="btn btn-outline-light" type="button">View PDF for TOPIC B</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-dark border rounded-3">
                        <h2>Contact committee</h2>
                        <p>african.union@cadmun.org</p>
                        <a href="	mailto:african.union@cadmun.org" target="_blank"><button class="btn btn-outline-light"
                                type="button">Send E-mail</button></a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <img src="/assets/img/chairs/au.jpg" alt=""
                            class="img-fluid rounded mx-auto d-block img-thumbnail">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Director</strong>
                            <h3 class="mb-0">Fairuz Deras</h3>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" style="text-align: center">
                            <br>
                            <br>
                            <strong class="d-inline-block mb-2 text-primary" style="font-size: 30px">Moderator</strong>
                            <h3 class="mb-0">Uriel Rodríguez</h3>
                        </div>

                    </div>
                </div>



            </div>
        </section>
    </div>

</main><!-- End #main -->
@endsection
