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
        <!-- Inner container -->
        <div class="d-md-flex align-items-md-start">
            <!-- Right content -->
            <div class="flex-fill overflow-auto">
                <!-- Cards layout -->
                <div class="card card-body">
                    <div class="media flex-column flex-sm-row">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <a href="#">
                                <img src="{{ asset('images/excel.png') }}" class="rounded" width="44" height="44" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold">
                                <a href="#">Upload Excel File</a>
                            </h6>
                            <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Excel Document </label>
                                        <div class="col-lg-10">
                                            <input type="file" name="select_file" id="select_file"  required />
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save<i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="ml-sm-3 mt-2 mt-sm-0">
                            <span class="text-muted">Sample File Download <a href="#">Click Here</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /right content -->
        </div>
        <!-- /inner container -->
    </div>
    <!-- /content area -->
</div>
@endsection
