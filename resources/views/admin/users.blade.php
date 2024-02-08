@extends('admin_layout.master')

@section('content')

<div class = "nk-content">
   <table class="table table hover">
  
      <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        @foreach($users as $user)
            <tr id="data{{$user->id}}">
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    
      </tbody>
   </table>
</div>

@endsection