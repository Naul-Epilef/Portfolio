@extends('default.layout')

@section('content')
<div class="rulesOfThree">
    <h1>Regra de três</h1>
    <br>
    <div class="inputsGroup">
        <input type="tel" id="n1" placeholder="0" onkeyup="updateResult()">
        <input type="tel" id="n2" placeholder="0" onkeyup="updateResult()">
        <input type="tel" id="n3" placeholder="0" onkeyup="updateResult()">
        <input type="tel" id="n4" placeholder="0" disabled >
    </div>
    <div class="textParagaph">
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ url(mix("calculator/css/rulesOfThree.css")) }}">
@endsection

@section('scripts')
<script src="{{ url(mix("calculator/js/rulesOfThree.js")) }}"></script>
@endsection
