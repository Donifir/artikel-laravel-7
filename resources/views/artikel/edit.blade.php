@extends('layouts/app')


@section('tittle')



@section('conten')
<h1 class="judul mt-4">Halaman Edit</h1>



<form action="/artikel/{{ $artikel->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group mt-4">
      <label for="tittle">Judul</label>
      <input type="teks" class="form-control" id="tittle" name="tittle"
        value="{{ old('tittle') ? old('tittle') :$artikel ->tittle }}">
        @error('tittle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <textarea class="form-control" id="subject" name="subject" rows="3" >{{ old('subject') ? old('tittle') :$artikel ->subject }}</textarea>
      @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


  @endsection



