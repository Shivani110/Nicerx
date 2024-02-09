@extends('admin_layout.master')

@section('content')

  <div class = "nk-content">
    <table class="table table hover">
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        @foreach($users as $user)
          <tr id="data{{$user->id}}">
            <td>{{ $i++ }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a href="{{ url('admin/addnewuser/'.$user->id) }}" class="btn btn-primary">Edit</a>
              <button type="button" class="btn btn-danger" onclick="deleteUser({{ $user->id }})">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection