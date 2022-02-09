<!-- ======= Contact Section ======= -->
@include('sweetalert::alert')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Tec Milenio #201, El Nayar, 34194 Durango, Dgo.</p>
                    </div>

                    <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Open Hours:</h4>
                        <p>
                            Monday-Friday:<br>
                            07:30 AM – 15:30 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>secretariat@cadmun.org</p>
                        <p>advisor@cadmun.org</p>
                        <p>secretary.general@cadmun.orgg</p>
                        <p>vice.secretary.general@cadmun.org</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+52 618 145 3398</p>
                        <p>+52 618 166 1245</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="" method="post" action="{{ route('contact.store') }}" id="contact-form" role="form"
                    class="php-email-form">

                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                                name="name" id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                name="email" id="email">

                            @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label>Subject</label>
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                            name="subject" id="subject">

                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group mt-3">
                        <label>Message</label>
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message"
                            id="message" rows="8"></textarea>

                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" style="padding-top:30px;">
        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.7276845678975!2d-104.6658752156166!3d23.97961823067113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc7f2c3ad6fe9%3A0x3060412e9e5b29cd!2sColegio%20Americano%20Campus%20Campestre!5e0!3m2!1sen!2smx!4v1642019858246!5m2!1sen!2smx"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section><!-- End Contact Section -->
