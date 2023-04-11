<x-layout title="Castelo Bruxo">

    @isset($retorno)
        <div class="container">
            <h1>Personagens Filtrados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Time</th>
                        <th>Descrição</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($retorno as $personagem)
                        <tr>
                            <td>{{ $personagem->nome }}</td>
                            <td>{{ $personagem->idade }}</td>
                            <td>{{ $personagem->time }}</td>
                            <td>{{ $personagem->descricao }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endisset

        <a href="/">Listar personagens</a>
</x-layout>


