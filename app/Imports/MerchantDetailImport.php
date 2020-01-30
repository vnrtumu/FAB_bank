<?php

namespace App\Imports;

// use App\Bulk;
use App\MerchantDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class MerchantDetailImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MerchantDetails([
            'merchant_name'     => $row['merchant_name'],
            'floor'             => $row['floor'],
            'street_number'     => $row['street_number'], 
            'route'             => $row['route'], 
            'locality'          => $row['locality'], 
            'city'              => $row['city'],
            'state_emirate_code'=> $row['state_emirate_code'], 
            'country'           => $row['country'], 
            'postal_code'       => $row['postal_code'], 
            'address'           => $row['address'], 
            'icon_logo'         => $row['icon_logo'],
            'phone_number'      => $row['phone_number'], 
            'name'              => $row['name'], 
            'rating'            => $row['rating'], 
            'reviews'           => $row['reviews'], 
            'type'              => $row['type'], 
            'vicinity'          => $row['vicinity'], 
            'website'           => $row['website'], 
            'stock_price'       => $row['stock_price'], 
            'founded'           => $row['founded'], 
            'ceo'               => $row['ceo'], 
            'founders'          => $row['founders'], 
            'owned_by'          => $row['owned_by'], 
            'industry'          => $row['industry'], 
            'headquarters'      => $row['headquarters'], 
            'products'          => $row['products'], 
            'services'          => $row['services'], 
            'twitter_handle'    => $row['twitter_handle'],
        ]);
    }
}
