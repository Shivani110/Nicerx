@extends('admin_layout.master')

@section('content')

<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title">Exclude State</h5>
                <br>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success col-lg-6">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form id="myform" method="post">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-label" for="state">Select State</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" multiple="multiple" id="state" name="state[]">
                                <?php
                                    if($excludeState->state ?? ''){
                                        $state = json_decode($excludeState->state);
                                        foreach($statearray as $key => $value){
                                            if(in_array($value,$state)){ ?> 
                                                <option selected value="{{ $value }}">{{ $key }}</option>
                                    <?php   }else{ ?>
                                                <option value="{{ $value }}">{{ $key }}</option>
                                    <?php   }
                                        }
                                    }else{
                                        foreach($statearray as $key => $value){ ?>
                                            <option value="{{ $value }}">{{ $key }}</option>
                                <?php   }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" name="submit" value="Save" onclick="excludeState()" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection