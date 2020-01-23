@extends('layout')

@section('main-container')

{{-- {{ dd($MerchantDetails) }} --}}
    <!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- 2 columns form -->
				<div class="card">
					<div class="card-header header-elements-inline">
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Merchant Details</legend>
					</div>
					<div class="card-body">
                        <form action="{{ route('update',  $MerchantDetails->id) }}" enctype="multipart/form-data" method="post">
                         @method('patch') @csrf
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Merchant Name:</label>
											<div class="col-lg-9">
												<input type="text" value="{{ $MerchantDetails->merchant_name }}" name="merchant_name" class="form-control" placeholder="Eugene Kopyov">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Rating</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" value="{{ $MerchantDetails->merchant_name }}" name="rating" placeholder="Enter the Rating">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Reviews</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->reviews}}" name="reviews" placeholder="Enter the Reviews">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Type</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->type}}" name="type" placeholder="Enter The Type">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Vicinity</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->vicinity}}" name="vicinity" placeholder="Enter vicinity">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Stock Price</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->stock_price}}" name="stock_price" placeholder="Enter Stock Price">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Founded By</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->founded}}" name="founded" placeholder="Enter Founded By">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">CEO</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->ceo}}" name="ceo" placeholder="Enter CEO">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Founders</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->founders}}" name="founders" placeholder="Enter Founders">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Owned By</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->owned_by}}" name="owned_by" placeholder="Enter Owned By">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Industry</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->industry}}" name="industry" placeholder="Enter Industry">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Headquaters</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->headquarters}}" name="headquarters"  placeholder="Enter Headquaters">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Products</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->products}}" name="products"  placeholder="Enter Products">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Services</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->services}}" name="services"  placeholder="Enter Services">
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Name</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Name"  value="{{ $MerchantDetails->name}}" name="name"  class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Logo</label>
											<div class="col-lg-9">
                                                <input type="file" class="form-input-styled"  name="icon" data-fouc>
                                                <input type="hidden" name="icon_logo" id="icon">{{ $MerchantDetails->icon_logo }}</textarea>
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Floor</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->floor}}" name="floor"  placeholder="Enter Floor">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Street Number</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->street_number}}" name="street_number"  placeholder="Enter Street Number">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Locality</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->locality}}" name="locality"  placeholder="Enter Locality">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">City</label>
											<div class="col-lg-9">
												<input type="text" class="form-control"  value="{{ $MerchantDetails->city}}" name="city"  placeholder="Enter City">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">State / Emirate Code</label>
											<div class="col-lg-9">
                                                <input type="text" class="form-control"  value="{{ $MerchantDetails->state_emirate_code}}" name="state_emirate_code"  placeholder="Enter State / Emirate Code">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Country</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter the Country"  value="{{ $MerchantDetails->country}}" name="country"  class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Postal Code</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter the Postal Code"  value="{{ $MerchantDetails->postal_code}}" name="postal_code"  class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Phone #</label>
											<div class="col-lg-9">
												<input type="text" placeholder="+99-99-9999-9999"  value="{{ $MerchantDetails->phone_number}}" name="phone_number"  class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Address</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter the Address"  value="{{ $MerchantDetails->address}}" name="address"  class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Route</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter The Ruote"  value="{{ $MerchantDetails->route}}" name="route"  class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Website</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter The Website"  value="{{ $MerchantDetails->website}}" name="website"  class="form-control">
											</div>
                                        </div>

                                        <div class="form-group row">
											<label class="col-lg-3 col-form-label">Route</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Enter The Route"  value="{{ $MerchantDetails->route}}" name="route"  class="form-control">
											</div>
										</div>

									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Update The Details <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /2 columns form -->
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
@endsection
