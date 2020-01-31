<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;
use App\Imports\MerchantImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\MerchantDetails;
use App\Imports\MerchantDetailImport;
use App\Exports\MerchantExport;

class MerchantController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function display()
    {
        $merchants = DB::table('merchant_details')
                    ->select('merchant_details.*')
                    ->get();
        return view('display', compact('merchants'));
    }

    public function store(Request $request)
    {
        $file = $request->file('select_file');
        $merchants = Excel::toArray(new MerchantImport, $file);
        $merchantDetailes  = Excel::toArray(new MerchantDetailImport, $file);
        $logArray = [];
        $logArray2= [];
        foreach ($merchants as $row) {
            for ($i = 0; $i < count($row); $i++) {
                $duplicate =  DB::table('merchants')
                            ->where( 'merchant_name', 'LIKE', '%'.$row[$i]['merchant_name'].'%' )
                            ->get();
                if(count($duplicate) > 0){
                    for ($j = 0; $j < count($duplicate); $j++) {
                        array_push($logArray,  $duplicate[$j]->merchant_name);
                    }
                }else {
                    Merchant::create([
                        'merchant_name' => $row[$i]['merchant_name']
                    ]);
                }

                $duplicateDetails =  DB::table('merchant_details')
                            ->where( 'merchant_name', 'LIKE', '%'.$row[$i]['merchant_name'].'%' )
                            ->get();
                if(count($duplicateDetails) > 0){
                    for ($j = 0; $j < count($duplicateDetails); $j++) {
                        array_push($logArray2,  $duplicateDetails[$j]->merchant_name);
                    }
                }else {
                    MerchantDetails::create([
                        'merchant_name' => $row[$i]['merchant_name']
                    ]);
                }
            }
        }
        return redirect(route('display'));
    }

    public function show(MerchantDetails $MerchantDetails)
    {
        $merchants = DB::table('merchant_details')
            ->where('merchant_details.id', '=', $MerchantDetails->id)
            ->get();
        return view('singleMerchant', compact('merchants'));
    }

    public function edit(MerchantDetails $MerchantDetails)
    {
        return view('merchantEdit', compact('MerchantDetails'));
    }

    public function update(Request $request, MerchantDetails $MerchantDetails)
    {
        $merchantInput  = $request->except('icon', '_token', '_method');
        $image = $request->icon;
        if (!$image) {
            $departmentInput['icon_logo'] = $request->icon_logo;
        } else {
            $merchantInput  = $request->except('icon', '_token', '_method');
            $image = $request->icon;
            if ($image) {
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/icons');
                $image->move($destinationPath, $name);
                $merchantInput['icon_logo'] = $name;
            }
        }
        MerchantDetails::where('id', '=', $MerchantDetails->id)->update($merchantInput);
        return redirect(route('display'));
    }

    public function completeData()
    {
        return view('completeData');
    }

    public function importAllData(Request $request)
    {
        $file = $request->file('select_file');
        $merchantDetailes  = Excel::toArray(new MerchantDetailImport, $file);
        $logArray = [];
        foreach ($merchantDetailes as $row) {
            for ($i = 0; $i < count($row); $i++) {
                $duplicateDetails =  DB::table('merchant_details')
                            ->where( 'merchant_name', 'LIKE', '%'.$row[$i]['merchant_name'].'%' )
                            ->get();
                if(count($duplicateDetails) > 0){
                    $updateDetails =  DB::table('merchant_details')
                            ->where( 'merchant_name', 'LIKE', '%'.$row[$i]['merchant_name'].'%' )
                            ->update([
                                'floor'             => $row[$i]['floor'],
                                'street_number'     => $row[$i]['street_number'], 
                                'route'             => $row[$i]['route'], 
                                'locality'          => $row[$i]['locality'], 
                                'city'              => $row[$i]['city'],
                                'state_emirate_code'=> $row[$i]['state_emirate_code'], 
                                'country'           => $row[$i]['country'], 
                                'postal_code'       => $row[$i]['postal_code'], 
                                'address'           => $row[$i]['address'], 
                                'icon_logo'         => $row[$i]['icon_logo'],
                                'phone_number'      => $row[$i]['phone_number'], 
                                'name'              => $row[$i]['name'], 
                                'rating'            => $row[$i]['rating'], 
                                'reviews'           => $row[$i]['reviews'], 
                                'type'              => $row[$i]['type'], 
                                'vicinity'          => $row[$i]['vicinity'], 
                                'website'           => $row[$i]['website'], 
                                'stock_price'       => $row[$i]['stock_price'], 
                                'founded'           => $row[$i]['founded'], 
                                'ceo'               => $row[$i]['ceo'], 
                                'founders'          => $row[$i]['founders'], 
                                'owned_by'          => $row[$i]['owned_by'], 
                                'industry'          => $row[$i]['industry'], 
                                'headquarters'      => $row[$i]['headquarters'], 
                                'products'          => $row[$i]['products'], 
                                'services'          => $row[$i]['services'], 
                                'twitter_handle'    => $row[$i]['twitter_handle'],
                            ]);
                }
            }
        }
        return redirect(route('display'));
    }

    public function logdata()
    {
        return view('logdata');
    }

    public function exportExcel()
    {
        return  Excel::download(new MerchantExport, 'merchants.xlsx');
    }
}
