@extends('layout.default')
@section('content')
<div class="container my-5">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Registration date</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php $i = 1; ?>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@stop