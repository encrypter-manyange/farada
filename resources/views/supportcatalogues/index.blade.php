@extends('layouts.master')
@section('content')
    @if(Session::has('status'))
        <div class="row" style="margin-bottom: 1%;">
            <div class="col-md-12">
                <p class=" text text-center alert alert-success">{{Session::get('status')}}</p>
            </div>
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Support Catalogues</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>  <th>#</th>
                        <th>Catalogue Name</th>
                        <th>Support Item Number</th>
                        <th>Support Category Number</th>
                        <th>Registration Group Number</th>
                        <th>Unit</th>
                        <th>Date Created</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Catalogue Name</th>
                        <th>Support Item </th>
                        <th>Support Category</th>
                        <th>Registration Group</th>
                        <th>Unit</th>
                        <th>Date Created</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $count = 1; ?>
                    @foreach($catalogues as $catalogue)
                        <tr>
                            <td>{{$count}}</td>
                            <td><a href="supportcatalogues/showone/{{$catalogue->id}}">{{$catalogue->support_catalogue_name}}</a></td>
                            <td>{{$catalogue->SupportItem->support_item_name}}</td>
                            <td>{{$catalogue->SupportCategory->support_category_name}}</td>
                            <td>{{$catalogue->RegistrationGroup->reg_group_name}}</td>
                            <td>{{$catalogue->unit}}</td>
                            <td>{{$catalogue->created_at}}</td>
                        </tr>
                        <?php $count += 1; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection


