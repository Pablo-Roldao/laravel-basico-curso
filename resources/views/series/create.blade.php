<x-layout title="Nova série">
    <form action="{{ route('series.store')  }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="mb-2 col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" autofocus>
            </div>

            <div class="mb-2 col-2">
                <label for="seasonsQty" class="form-label">Temporadas:</label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control">
            </div>

            <div class="mb-2 col-2">
                <label for="episodesPerSeason" class="form-label">Nome:</label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control">
            </div>
        </div>
    
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>
