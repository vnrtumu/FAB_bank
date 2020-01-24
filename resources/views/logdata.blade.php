@extends('layout')

@section('main-container')

<!-- Page header -->
<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->


<div class="page-content pt-0">

     <!-- Content area -->
     <div class="content">
        <!-- Style combinations -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">All Bookmarks</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="{{ route('index') }}" class="list-icons-item">
                            <button class="btn text-light" style="background-color: #11b5a6">Add New Data</button>
                        </a>

                    </div>
                </div>
            </div>
            <table class="table datatable-basic table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>S. No</th>
                        <th>Merchant Name</th>
                    </tr>
                </thead>
                <tbody id="filterData">
                    <tr>
                        <th>S. No</th>
                        <th>Merchant Name</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /style combinations -->

    </div>
    <!-- /content area -->
</div>

@endsection
