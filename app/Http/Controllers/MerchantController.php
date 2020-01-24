<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;
use App\Imports\MerchantImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\MerchantDetails;
use App\Imports\MerchantDetailImport;

class MerchantController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function display()
    {
        $merchants = DB::table('merchant_details')
                    ->select('merchant_details.*',)
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
                    array_push($logArray,  $duplicate[0]->merchant_name);
                }else {
                    Merchant::create([
                        'merchant_name' => $row[$i]['merchant_name']
                    ]);
                }

                $duplicateDetails =  DB::table('merchant_details')
                            ->where( 'merchant_name', 'LIKE', '%'.$row[$i]['merchant_name'].'%' )
                            ->get();
                if(count($duplicate) > 0){
                    array_push($logArray2,  $duplicateDetails[0]->merchant_name);
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

    public function logdata()
    {
        return view('logdata');
    }
}
