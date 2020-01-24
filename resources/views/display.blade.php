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
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $k = 1; ?>
                    @foreach ($merchants as $merchant)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $merchant->merchant_name }}</td>
                            <td>{{ $merchant->address }}</td>
                            <td>{{ $merchant->phone_number }}</td>
                            <td>{{ $merchant->website }}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('merchantEdit', $merchant->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                            <a href="{{ route('singleMerchant', $merchant->id) }}" class="dropdown-item"><i class="icon-eye2"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $k++; ?>
                    @endforeach
                </tbody>
            </table>
            <div class="card-header header-elements-inline">
                {{-- <h5 class="card-title">All Bookmarks</h5> --}}
                <div class="header-elements">
                    <div class="list-icons">
                        <p>To Check the Logfile please click this button</p>
                        <a href="{{ route('logdata') }}" class="list-icons-item">
                            <button class="btn text-light" style="background-color: #11b5a6">Log Data</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /style combinations -->

    </div>
    <!-- /content area -->
</div>

@endsection
