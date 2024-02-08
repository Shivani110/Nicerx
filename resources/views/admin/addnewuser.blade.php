@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title">Add New User</h5>
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
                <form action="{{ url('admin/createuser') }}" method="post">
                    @csrf
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" id="name" name="name" value="">
                            </div>
                                @error('name')
                                {{ $message }}
                                @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" value="">
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
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password">
                            </div>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Saved" name="submit" class="btn btn-primary">
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection