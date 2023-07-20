<x-layout title="Editar série '{{ $serie->name }}'" name="{{ $serie->name }}">
    <form action="{{ route('series.update', $serie->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control"
                @isset($serie->name) value="{!! $serie->name !!}" @endisset>
        </div>

        <button type="submit" class="btn btn-dark">Editar</button>
    </form>

</x-layout>
