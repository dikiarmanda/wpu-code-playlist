@extends('layouts.main')

@section('container')
  <h1 class="mb-3 text-center">{{ $title }}</h1>

  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts">
          @if (request('author'))
            <input name="author" type="hidden" value="{{ request('author') }}">
          @endif
          @if (request('category'))
            <input name="category" type="hidden" value="{{ request('category') }}">
          @endif
          <div class="input-group mb-3">
            <input class="form-control" name="search" type="text" value="{{ request('search') }}"
              placeholder="search">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @if ($posts->count())
    <div class="card mb-3">
      @if ($post[0]->image)
        <div style="max-height: 350px; overflow: hidden;">
          <img class="card-img-top" src="{{ asset('storage/' . $post[0]->image) }}" alt="{{ $post[0]->category->name }}">
        </div>
      @else
        <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}"
          alt="{{ $post[0]->category->name }}">
      @endif
      <div class="card-body text-center">
        <h5 class="card-title">
          <a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
        </h5>
        <p>
          <small class="text-muted">
            By. <a class="text-decoration-none"
              href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
            <a class="text-decoration-none"
              href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a class="btn btn-primary" href="/post/{{ $posts[0]->slug }}">Read more</a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute bg-dark px-3 py-2">
                <a class="text-decoration-none text-white"
                  href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
              </div>
              @if ($post->image)
                <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}"
                  alt="{{ $post->category->name }}">
              @else
                <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                  alt="{{ $post->category->name }}">
              @endif
              <div class="card-body">
                <h5 class="card-title"><a class="text-decoration-none"
                    href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                <p>
                  <small class="text-muted">
                    By. <a class="text-decoration-none"
                      href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in
                    {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a class="btn btn-primary" href="/post/{{ $post->slug }}">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="fs-4 text-center">No post found.</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
@endsection
