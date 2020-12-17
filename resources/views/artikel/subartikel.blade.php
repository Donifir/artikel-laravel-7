@extends('layouts/app')


@section('tittle')
haloo
@endsection

@section('conten')
<h1>{{ $article->tittle }}</h1>
<p>{{ $article->subject }}</p>

<div class="row mb-1">
<a href="/artikel/{{ $article->id }}/edit" class="btn btn-info btn-small">Edit</a>
                <form action="/artikel/{{ $article->id }}" method="post">
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-small btn-danger">Hapus</button>
                </form>
</div>
@endsection





