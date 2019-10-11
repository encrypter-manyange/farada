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
            <h6 class="m-0 font-weight-bold text-primary">Support Categories::{{$category->support_category_name}}</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/supportcategories/edit')}}" method="post">
                @csrf
                <input type="hidden" value="{{$category->id}}" name="id">
              <input required type="text" value="{{$category->support_category_name}}" name="support_category_name" class="form-control" placeholder="Support Category Name"><br />
              <input required type="text" value="{{$category->support_category_number}}" name="support_category_number" class="form-control" placeholder="Support Category Number">
              <br />
                <label>Status</label>
                @if($category->isActive==1)
                    <input type="text" value="Active" disabled class="form-control">
                @else
                    <input type="text" value="Disabled" disabled class="form-control">
                @endif

                <br />
                <select name="isActive" class="form-control" required>
                     @if($category->isActive==1)
                        <option name="isActive" value="1">Enable</option>
                        <option name="isActive" value="0">Disable</option>
                    @else
                        <option name="isActive" value="0">Disable</option>
                        <option name="isActive" value="1">Enable</option>
                    @endif

                </select>
                <br />
                <button class="btn btn-outline-primary">Change Category Details</button>
            </form>
        </div>
    </div>

@endsection


