@extends('layouts.blog')

@section('main')
    @foreach ($posts as $post)
        <a href="{{ route('slug', $post->slug) }}">
            <img src="{{ Storage::url('') . $post->image }}" alt="thumb" class="img-fluid" />

            {{ $post->title }}

            {!! $post->excerpt !!}
    @endforeach
@endsection
