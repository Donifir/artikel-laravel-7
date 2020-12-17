@extends('layouts/app')

@section('conten')
<h1>Artikel</h1>
<a href="/artikel/create" class="btn btn-primary mb-4" >Buat Artikel</a>


    @foreach ($artikel ->chunk(3) as $artiChunk)
    <div class="row">
        @foreach ($artiChunk as $arti  )
        <div class="col card mb-1 ml-1 mr-1">
            <div class="card-body">
                <h2>  {{ $arti -> tittle }} </h2>
                <p>  {{ $arti ['subject'] }} </p>
                <a href="/artikel/{{ $arti->slug }}" class="btn btn-info btn-sm stretched-link">Baca</a>

            </div>
        </div>

        @endforeach

</div>


    @endforeach

    <div>
        {{ $artikel -> links() }}
    </div>
@endsection



