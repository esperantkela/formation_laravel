@extends('layouts.app')
@section('title', 'Détail de l\'album')
@section('content')
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
                <small class="text-muted">Date de création : {{ $album->created_at->format('d/m/Y') }}</small>
            </div>
            <a href="{{ route('albums.delete',  $album->id) }}" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>
@endsection
