@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
    <h1 class="h2">Categories</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive small col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table-striped table-sm table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="/dashboard/categories/{{ $category->slug }}" class="badge text-bg-info"><i
                  class="bi bi-eye"></i></a>
              <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge text-bg-warning"><i
                  class="bi bi-pencil-square"></i></a>
              <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="badge text-bg-danger border-0" onclick="return confirm('Are you sure?')">
                  <i class="bi bi-x-circle"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
