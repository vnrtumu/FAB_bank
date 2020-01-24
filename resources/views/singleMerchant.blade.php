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
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-8">
						<!-- Support tickets -->
						<div class="card">
							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th style="width: 50px">S. No</th>
											<th style="width: 300px;">Title</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach ($merchants as $merchant)
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">1</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Merchant Name</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->merchant_name}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">2</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Floor</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->floor}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">3</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Street Number</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->street_number}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">4</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Route</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->route}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">5</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Locality</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->locality}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">6</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> City</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->city}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">7</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> State/Emirate Code   </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->state_emirate_code}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">8</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Country </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->country}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">9</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Postal Code </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->postal_code}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">10</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Address</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->address}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">11</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Icon/Logo   </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">
                                            <img src="{{ asset('images/icons/'.$merchant->icon_logo) }} " height="200" width="300">

                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">12</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Phone Number </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->phone_number}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">13</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Name</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->name}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">14</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Rating</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->rating}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">15</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Reviews</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->reviews}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">16</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Type</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->type}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">17</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Vicinity</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->vicinity}}</div></td>
                                    </tr><tr>
                                        <td class="text-center"><h6 class="mb-0">18</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Website</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->website}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">19</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Stock Price </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->stock_price}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">20</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Founded</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->founded}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">21</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> CEO </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->ceo}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">22</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Founders</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->founders}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">23</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Owned By  </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->owned_by}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">24</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Industry</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->industry}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">25</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Headquarters</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->headquarters}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">26</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Products  </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->products}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">27</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Services</a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->services}}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h6 class="mb-0">28</h6></td>
                                        <td><div class="d-flex align-items-center">
                                            <a href="#" class="text-default font-weight-semibold letter-icon-title"> Twitter Handle   </a>
                                        </div></td>
                                        <td><div class="font-weight-semibold">{{ $merchant->twitter_handle}}</div></td>
                                    </tr>
                                    @endforeach


									</tbody>
								</table>
							</div>
						</div>
						<!-- /support tickets -->
					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->
</div>
@endsection
