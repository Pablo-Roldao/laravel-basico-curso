<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar série</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('seasons.index', $serie->id) }}">{{ $serie->name }}</a>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-success m-1">
                        Editar
                    </a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-1">Deletar</button>
                    </form>
                </div>

            </li>
        @endforeach
    </ul>
</x-layout>
