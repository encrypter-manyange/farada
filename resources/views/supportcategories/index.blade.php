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
            <h6 class="m-0 font-weight-bold text-primary">Support Categories</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Number</th>
                        <th>Date Created</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Number</th>
                        <th>Date Created</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $count = 1; ?>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$count}}</td>
                            <td><a href="supportcategories/showone/{{$category->id}}">{{$category->support_category_number}}</a></td>
                            <td>{{$category->support_category_name}}</td>
                            <td>{{$category->created_at}}</td>
                        </tr>a
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


