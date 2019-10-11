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
            <h6 class="m-0 font-weight-bold text-primary">Creating Support Catalogue</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/supportcatalogues/store')}}" method="post">
                @csrf
                <input required type="text" name="support_catalogue_name" class="form-control" placeholder="Support Catalogue Name">
                <br />
                <label>Registration Group </label>
                <select name="registration_group_number" class="form-control" required>
                   @foreach($groups  as $group)
                    <option name="registration_group_number" value="{{$group->id}}">{{$group->reg_group_name}}</option>
                    @endforeach
                </select>
                <br />

                <label>Support Item</label>
                <select name="support_item_number" class="form-control" required>
                    @foreach($units as $units)
                        <option name="support_item_number" value="{{$units->id}}">{{$units->support_item_name}}</option>
                    @endforeach
                </select>
                <br />


                <label>Support Category</label>
                <select name="support_category_number" class="form-control" required>
                    @foreach($supports as $support)
                        <option name="support_cz_number" value="{{$support->id}}">{{$support->support_category_name}}</option>
                    @endforeach
                </select>
                <br />

                <label>Unit</label>
                <select name="unit" class="form-control" required>
                        <option name="unit" value="each">each</option>
                        <option name="unit" value="hourly">hourly</option>
                       <option name="unit" value="daily">each</option>
                       <option name="unit" value="weekly">hourly</option>
                       <option name="unit" value="anually">anually</option>
                       <option name="unit" value="monthly">monthly</option>

                </select>
                <br />
                <button class="btn btn-outline-primary">Add Support Catalogue</button>
            </form>
        </div>
    </div>

@endsection


