@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/contact/contact.css') }}">
@endsection

@section('content')


    <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
        <symbol id="toko" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z" />
        </symbol>
        <symbol id="call" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
        </symbol>
        <symbol id="postcard" viewBox="0 0 24 24">
            <path
                d="M19 7h-8v6h8V7zm2-4H3c-1.1 0-2 .9-2 2v14c0 1.1.9 1.98 2 1.98h18c1.1 0 2-.88 2-1.98V5c0-1.1-.9-2-2-2zm0 16.01H3V4.98h18v14.03z" />
            <path d="M0 0h24v24H0z" fill="none" />
        </symbol>
        <symbol id="email" viewBox="0 0 24 24">
            <path
                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
            <path d="M0 0h24v24H0z" fill="none" />
        </symbol>
        <symbol id="website" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
                d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
        </symbol>
    </svg>

    <h1>Contacts</h1>

    <section class="accordion js-accordion" id="accordion">

        <h3>Diogo Martins</h3>

        <div>
            <div class="content-contact accordion_inner">
                <ul class="contact-list">
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#email"></use>
                        </svg>martins.diogo01@hotmail.com </li>
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#website"></use>
                        </svg><a href="https://www.linkedin.com/in/martins-de-sousa-diogo/"
                            target="_blank">https://www.linkedin.com/in/martins-de-sousa-diogo/</a></li>
                </ul>

            </div>
        </div>

        <h3>Gabriel Silva</h3>

        <div>
            <div class="content-contact accordion_inner">
                <ul class="contact-list">
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#email"></use>
                        </svg>gabrieloliveirasilva1404@gmail.com</li>
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#website"></use>
                        </svg><a href="https://www.linkedin.com/in/gabriel-silva-webdev/"
                            target="_blank">https://www.linkedin.com/in/gabriel-silva-webdev/</a></li>
                </ul>

            </div>
        </div>

        <h3>Ricardo Valadas</h3>

        <div>
            <div class="content-contact accordion_inner">
                <ul class="contact-list">
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#email"></use>
                        </svg>ricardo.valadas@hotmail.com</li>
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#website"></use>
                        </svg><a href="https://www.linkedin.com/in/ricardovaladas/"
                            target="_blank">https://www.linkedin.com/in/ricardovaladas/</a></li>
                </ul>
            </div>
        </div>

        <h3>Danilo Soares</h3>

        <div>
            <div class="content-contact accordion_inner">
                <ul class="contact-list">
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#email"></use>
                        </svg>danilosoares.lu@gmail.com</li>
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#website"></use>
                        </svg><a href="https://www.linkedin.com/in/soares-danilo/"
                            target="_blank">https://www.linkedin.com/in/soares-danilo/</a></li>
                </ul>

            </div>
        </div>

        <h3>Wildson Alves</h3>

        <div>
            <div class="content-contact accordion_inner">
                <ul class="contact-list">
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#email"></use>
                        </svg>wildsonalves30@gmail.com</li>
                    <li><svg class="icon-svg-use">
                            <use xlink:href="#website"></use>
                        </svg><a href="https://www.linkedin.com/in/wildsonalves/"
                            target="_blank">https://www.linkedin.com/in/wildsonalves/</a></li>
                </ul>
            </div>
        </div>

    </section>


    <p> <strong>SAFE4NET Team ♥</strong> </p>

@endsection
@section('script')
    <script src="{{ URL::asset('js/contactjs/contact.js') }}"></script>
@endsection
