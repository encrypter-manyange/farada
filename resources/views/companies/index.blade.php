@extends('layouts.master')
@section('content')
<!-- DataTales Example -->
@if(Session::has('status'))
<div class="row" style="margin-bottom: 1%;">
    <div class="col-md-12">
        <p class=" text text-center alert alert-success">{{Session::get('status')}}</p>
    </div>
</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Companies</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $count = 1; ?>
                @foreach($companies as $company)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->created_at}}</td>
                    <td>{{$company->updated_at}}</td>
                </tr>
                <?php $count += 1; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection


