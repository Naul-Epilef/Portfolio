@extends('default.layout')

@section('content')
{{-- <div class="Class"> --}}

<section id="WhoAmI">
    <div class="widthDefault">
        <div class="WhoAmI">
            <img src="https://i.redd.it/j3kyc6z4kzd61.jpg" width="200" alt="Imagem minha">
            <p>Olá, eu me chamo <br><strong>Luan Felipe</strong><br>Seja bem vindo <br> ao meu domínio</p>
        </div>
    </div>
</section>
<section id="Projects">
    <div class="widthDefault">
        <div class="ProjectsGroup">
            <div class="Project"></div>
            <div class="Project"></div>
            <div class="Project"></div>
        </div>
    </div>
</section>
<section id="Services">
    <div class="widthDefault">
        <div class="ServicesGroup">
            <div class="Service"></div>
            <div class="Service"></div>
            <div class="Service"></div>
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
        <form class="ContactForm">
            <input type="text" id="name" placeholder="Nome">
            <input type="text" id="email" placeholder="E-mail">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
        </form>
    </div>
</section>
{{-- </div> --}}

@endsection

@section('styles')
<link rel="stylesheet" href="{{ url(mix("site/css/style.css")) }}">
@endsection
