<?php

namespace App\Exports;

use App\MerchantDetails;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MerchantExport implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return [
            'S. No',
            'Merchant Name',
            'Floor',
            'Street Number', 
            'Route', 
            'Locality', 
            'City',
            'State/Emirate Code', 
            'Country', 
            'Postal Code', 
            'Address', 
            'Icon Logo',
            'Phone Number', 
            'Name', 
            'Rating', 
            'Reviews', 
            'Type', 
            'Vicinity', 
            'Website', 
            'Stock Price', 
            'Founded', 
            'CEO', 
            'Founders', 
            'Owned By', 
            'Industry', 
            'Headquarters', 
            'Products', 
            'Services', 
            'Twitter Handle',
        ];
    }
    public function collection()
    {
        return MerchantDetails::all()->except('created_at', 'updated_at',);
    }
}

// php artisan make:export MerchantDetailExport --model=Bulk//