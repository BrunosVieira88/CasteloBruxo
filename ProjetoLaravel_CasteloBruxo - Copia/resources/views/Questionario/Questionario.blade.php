@extends('cabecalho')
@section('content')  
  @include('navbar')
    <div id="myModal" style="display: none">
        <div class="centro">
                <button id="fecha" onclick="closeModal()">X</button>
                <span id="frase"></span>
        </div>
    </div>    
    <div class="row text-center mt-5 card p-5 some">
        <h1>Bem Vindo Jovem estudante</h1>
        <p>Você esta prestes a entrar em CasteloBruxo, e vai ser escolhido para seu time</p>
        <p>Há 4 times em CasteloBruxo e voce esta prestes a fazer um teste para determinar qual Time mais combina com você</p>
        <p>Está Pronto o teste acaba de começar!</p>
        <button class="btn btn-primary" onclick="openModal(pergunta0)";>Questionario</button>
    </div>
    <script src="/js/questionario.js"></script>
@endsection
