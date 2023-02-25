@extends('layouts.app')
@section('title', 'Bienvenue')
@section('content')
<a class="btn btn-primary mb-2" href="{{ route('albums.create') }}">AJouter une photo</a>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @if(count($albums) > 0)
    @foreach ($albums as $album)
    <div class="col">
        <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
                <p class="card-text">{{ $album->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href='{{ route('albums.show', $album->id) }}'  class="btn btn-sm btn-outline-secondary">Voir</a>
                        <a href="{{ route('albums.edit', $album->id ) }}" type="button" class="btn btn-sm btn-outline-secondary">Editer</a>
                    </div>
                    <small class="text-muted">{{ $album->created_at->format('d/m/Y') }}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        @else
        <p class="text-danger">Pas de data</p>
    @endif
</div>
@endsection
