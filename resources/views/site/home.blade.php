@extends('default.layout')

@section('content')
{{-- <div class="Class"> --}}

<section id="WhoAmI">
    <div class="widthDefault">
        <div class="WhoAmI">
            <img src="https://i.redd.it/j3kyc6z4kzd61.jpg" width="200" alt="Imagem minha">
            <div class='container'>
                <span>Olá pessoa!</span>
                <span>Eu me chamo <strong>Luan Felipe</strong></span>
                <p class='Welcome'>Seja bem vindo ao meu domínio</p>
            </div>
        </div>
    </div>
</section>
<section id="Projects">
    <div class="widthDefault">
        <div class="ProjectsGroup">
            <div class="Project">
                <img src="https://w.wallhaven.cc/full/ne/wallhaven-ne2qwr.jpg" alt="FOREST">
                <div class="container">
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur id dui posuere blandit.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
            <div class="Project">
                <img src="https://www.nicepng.com/png/full/332-3323835_artworki-drew-a-disturbed-looking-kirby-for-your.png" alt="Kirby">
                <div class="container">
                    <p>Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
            <div class="Project">
                <img src="https://i.pinimg.com/originals/1b/84/a6/1b84a683cc4ade821b5425a7c8ed8964.jpg" alt="INFANCIA NA AREA">
                <div class="container">
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis volutpat.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Services">
    <div class="widthDefault">
        <div class="ServicesGroup">
            <div class="Service">
                <img src="https://w.wallhaven.cc/full/ne/wallhaven-ne2qwr.jpg" alt="FOREST">
                <div class="container">
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur id dui posuere blandit.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
            <div class="Service">
                <img src="https://www.nicepng.com/png/full/332-3323835_artworki-drew-a-disturbed-looking-kirby-for-your.png" alt="Kirby">
                <div class="container">
                    <p>Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
            <div class="Service">
                <img src="https://i.pinimg.com/originals/1b/84/a6/1b84a683cc4ade821b5425a7c8ed8964.jpg" alt="INFANCIA NA AREA">
                <div class="container">
                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis volutpat.</p>
                    <a href="{{ url("/") }}">Ver Mais...</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Skills">
    <div class="widthDefault">
        <div class="SkillGroup">
            <div class="Skill">
                <p>PHP</p>
                <div class="BackgroundLoad">
                    <div class="Load phpColor"><span>50% /</span>&nbsp<i class="fas fa-infinity"></i></div>
                </div>
            </div>
            <div class="Skill">
                <p>Laravel</p>
                <div class="BackgroundLoad">
                    <div class="Load laravelColor"><span>50% /</span>&nbsp<i class="fas fa-infinity"></i></div>
                </div>
            </div>
            <div class="Skill">
                <p>CSS</p>
                <div class="BackgroundLoad">
                    <div class="Load cssColor"><span>50% /</span>&nbsp<i class="fas fa-infinity"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Contact">
    <div class="widthDefault">
        <div class="Contact">
            <span>&lt;adicione seu email&gt;</span>
            <span>&lt;número&gt;</span>
        </div>
    </div>
</section>
{{-- </div> --}}

@endsection

@section('styles')
<link rel="stylesheet" href="{{ url(mix("site/css/style.css")) }}">
@endsection

@section('scripts')
<script src="{{ url(mix("site/js/home.js")) }}"></script>
@endsection
