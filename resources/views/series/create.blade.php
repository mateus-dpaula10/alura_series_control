<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf   

        <div class="row mb-3">
            <div class="col-md-8">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" value="{{ old('nome') }}">
            </div>

            <div class="col-6 col-md-2">
                <label class="form-label" for="seasonsQty">Nº Temporadas:</label>
                <input class="form-control" type="text" id="seasonsQty" name="seasonsQty" value="{{ old('seasonsQty') }}">
            </div>

            <div class="col-6 col-md-2">
                <label class="form-label" for="episodesPerSeason">Eps / Temporada:</label>
                <input class="form-control" type="text" id="episodesPerSeason" name="episodesPerSeason" value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>