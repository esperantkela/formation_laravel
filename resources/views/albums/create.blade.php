@extends('layouts.app')
@section('title', 'Créer un album')
@section('content')
<div class="row col-4 offset-md-4">
    <form class='form-group' method="post" action="{{ route('albums.store') }}">
        @csrf
        <h3>Enregistrement photo</h3>
        <label for="description">Description</label>
        <textarea name="description" class="form-control @error('description')is-invalid @enderror" cols="30" rows="5">{{ old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback">{{ $message}}</span>
        @enderror

        <label for=""></label>
        <input class="form-control" type="file" name="picture">
        <input class="btn btn-primary mt-3" type="submit" value="Enregistrer">
    </form>
</div>
@endsection
