<!--User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/users/store')}}" method="post">
                @csrf
            <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Fullname" name="fullname" class="form-control"/>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Email Address" name="email" class="form-control"/>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <select name="role_id" id="" class="form-control">
                                <option value="">--Select User's Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <select name="company_id" id="" class="form-control">
                                <option value="">--Select User's Company (Optional)</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="password" placeholder="***************" name="password" class="form-control"/>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save User</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--Roles Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/roles/store')}}" method="post">
                @csrf
            <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Role Name" name="role_name" class="form-control"/>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Role</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!--Roles Modal -->
<div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/companies/store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Company Name" name="company_name" class="form-control"/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Company</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!--Roles Modal -->
<div class="modal fade" id="addregistrationgroupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/registrationgroups/store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Registration Group Number" name="reg_group_number" class="form-control"/>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Registration Group Name" name="reg_group_name" class="form-control"/>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Role</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="addsupportcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Support Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/supportcategories/store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Support Category Number" name="support_category_number" class="form-control"/>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Support Category Name" name="support_category_name" class="form-control"/>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Support Category</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="addsupportcatalogueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/roles/store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Role Name" name="role_name" class="form-control"/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Role</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addsupportcatalogueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/roles/store')}}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Role Name" name="role_name" class="form-control"/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Role</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="addsupportitemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Creating Support Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/supportitems/store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Support Item Number" name="support_item_number" required class="form-control"/>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <input type="text" placeholder="Enter Support Item Name" name="support_item_name" required class="form-control"/>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%">
                        <div class="col-md-12">
                            <label>Support Item Description</label>
                            <textarea name="support_item_description" class="form-control" placeholder="Support Item Description" required>

                            </textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Support Item</button>
                </div>
            </form>
        </div>
    </div>
</div>


