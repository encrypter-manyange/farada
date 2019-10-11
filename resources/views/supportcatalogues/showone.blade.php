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
            <h6 class="m-0 font-weight-bold text-primary">Support Catalogues::{{$catalogue->support_catalogue_name}}</h6>
        </div>
        <div class="card-body">
            <form action="{{url('/supportcatalogues/edit')}}" method="post">
                @csrf
                <input type="hidden" value="{{$catalogue->id}}" name="id">
                <br />
                <input required type="text" value="{{$catalogue->support_catalogue_name}}"  class="form-control" placeholder="Support catalogue name" name="support_catalogue_name">
                <br />

                <label>Support Items</label>
                <input required type="text" disabled value="{{$catalogue->SupportItem->support_item_name}}"  class="form-control" placeholder="Support Category number">
                <br />
                <select name="support_item_id" class="form-control" required>
                    @foreach($items as $item)
                        <option name="support_item_id" value="{{$item->id}}">{{$item->support_item_name}}</option>
                    @endforeach

                </select>



                <br />
                <label>Registration Group</label>
                <input required type="text" disabled value="{{$catalogue->RegistrationGroup->reg_group_name}}"  class="form-control">
                <br />
                <select name="registration_group_id" class="form-control" required>
                    @foreach($groups as $group)
                        <option name="registration_group_id" value="{{$group->id}}">{{$group->reg_group_name}}</option>
                    @endforeach

                </select>



                <br />
                <label>Support Category</label>
                <input required type="text" disabled value="{{$catalogue->support_catagory_number}}"  class="form-control" placeholder="Support Category number">
                <br />
                <select name="support_category_id" class="form-control" required>
                       @foreach($categories as $category)
                        <option name="support_category_id" value="{{$category->id}}">{{$category->support_category_name}}</option>
                      @endforeach

                </select>


                <br />
                <label>Status</label>
                @if($catalogue->isActive==1)
                    <input type="text" value="Active" disabled class="form-control">
                @else
                    <input type="text" value="Disabled" disabled class="form-control">
                @endif
                <br />

                <select name="isActive" class="form-control" required>
                     @if($catalogue->isActive==1)
                        <option name="isActive" value="1">Enable</option>
                        <option name="isActive" value="0">Disable</option>
                    @else
                        <option name="isActive" value="0">Disable</option>
                        <option name="isActive" value="1">Enable</option>
                    @endif

                </select>
                <br />
                <button class="btn btn-outline-primary">Change Catalogue Details</button>
            </form>
        </div>
    </div>

@endsection


