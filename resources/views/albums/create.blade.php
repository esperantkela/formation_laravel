@extends('layouts.app')
@section('title', 'Créer un album')
@section('content')
<form class='form-group' method="post" action="{{ route('albums.store') }}">
    @csrf
    <h1>Enregigistrement photo</h1>
    <label for="description">Description</label>
    <input id="description" name='description' class="form-control @error('description')is-invalid @enderror" type="text">
    @error('description')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror

    <label for=""></label>
    <input class="form-control" type="file" name="picture">
    <input class="btn btn-primary mt-3" type="submit" value="Enregistrer">
</form>
@endsection
