<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantDetails extends Model
{
    protected $table = 'merchant_details';
    protected $fillable = ['merchant_name', 'floor', 'street_number', 'route', 'locality', 'city', 'state_emirate_code', 'country', 'postal_code', 'address', 'icon_logo', 'phone_number', 'name', 'rating', 'reviews', 'type', 'vicinity', 'website', 'stock_price', 'founded', 'ceo', 'founders', 'owned_by', 'industry', 'headquarters', 'products', 'services', 'twitter_handle'];
}
