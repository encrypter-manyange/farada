@extends('layouts.master')
@section('content')
    @if(Session::has('status'))
        <div class="row" style="margin-bottom: 1%;">
            <div class="col-md-12">
                <p class=" text text-center alert alert-success">{{Session::get('status')}}</p>
            </div>
        </div>
    @endif


{{--    form--}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registration Groups::{{$group->reg_group_name}}</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/registrationgroups/edit')}}" method="post">
                @csrf
                <input type="hidden" value="{{$group->id}}" name="id">
              <input required type="text" value="{{$group->reg_group_name}}" name="reg_group_name" class="form-control" placeholder="Registration Group Name"><br />
              <input required type="text" value="{{$group->reg_group_number}}" name="reg_group_number" class="form-control" placeholder="Registration Group Number">
              <br />
                <label>Status</label>
                @if($group->isActive==1)
                    <input type="text" value="Active" disabled class="form-control">
                @else
                    <input type="text" value="Disabled" disabled class="form-control">
                @endif

                <br />
                <select name="isActive" class="form-control" required>
                     @if($group->isActive==1)
                        <option name="isActive" value="1">Enable</option>
                        <option name="isActive" value="0">Disable</option>
                    @else
                        <option name="isActive" value="0">Disable</option>
                        <option name="isActive" value="1">Enable</option>
                    @endif

                </select>
                <br />
                <button class="btn btn-outline-primary">Change Group Details</button>
            </form>
        </div>
    </div>

@endsection


