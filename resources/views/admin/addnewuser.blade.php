@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                @if($user ?? '')
                <h5 class="card-title">Edit New User</h5>
                @else
                <h5 class="card-title">Add New User</h5>
                @endif
                <br>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success col-lg-8">
                        <p>{{ $message }}</p>
                    </div>
                @elseif($message = Session::get('error'))
                    <div class="alert alert-danger col-lg-8">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @if($user ?? '')
                <form action="{{ url('admin/updatenewuser') }}" method="post">
                    @csrf
                @else
                <form action="{{ url('admin/createuser') }}" method="post">
                @endif    
                    @csrf
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-label" for="fname">First Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="fname" name="fname" value="{{ $user->firstname ?? '' }}">
                            </div>
                            @error('fname')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="lname">Last Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="lname" name="lname" value="{{ $user->lastname ?? '' }}">
                            </div>
                            @error('lname')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="email" name="email" value="{{ $user->email ?? '' }}">
                            </div>
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" value="">
                            </div>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone number</label>
                            <div class="form-control-wrap">
                                <input type="phone" class="form-control form-control-lg" id="phone" name="phone" value="{{ $user->phonenumber ?? '' }}">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $user->id ?? '' }}">
                        <div class="form-group">
                            @if($user ?? '')
                            <input type="submit" value="Update" name="submit" class="btn btn-primary">
                            @else
                            <input type="submit" value="Saved" name="submit" class="btn btn-primary">
                            @endif
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection