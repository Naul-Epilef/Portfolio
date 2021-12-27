@extends('default.layout')

@section('content')
<section id="listCalcs">
    <div class="widthDefault">
        <h1>CALCULADORAS</h1>
        <ul>
            <li><a href="{{ route("calculators.rulesOfThree") }}" class="listCalc">Regra de três</a></li>
        </ul>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ url(mix("calculator/css/index.css")) }}">
@endsection
