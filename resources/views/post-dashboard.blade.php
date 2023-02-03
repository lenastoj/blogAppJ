@extends('layout.default')
@section('content')
<div class="container my-5">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Delete post</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php $i = 1; ?>
      @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->user->name }}</td>
        <td>
          <a href="{{ 'delete/' . $post->id }}"  class="btn btn-primary">Delete</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@stop