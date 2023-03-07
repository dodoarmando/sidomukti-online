    @extends('layouts.blog')

    @section('main')
        <div class="container">
            <!-- Content here -->
            <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                    @foreach ($posts as $post)
                        {{ $post->title }}
                        <img src="{{ Storage::url('') . $post->image }}" alt="thumb" class="img-fluid" />
                        {{ $post->body }}
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
