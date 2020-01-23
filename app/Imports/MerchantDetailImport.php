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
        ]);
    }
}
