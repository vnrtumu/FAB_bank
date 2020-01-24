<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Merchant;
use App\Imports\MerchantImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\MerchantDetails;
use App\Imports\MerchantDetailImport;

class MerchantController extends Controller
{
    public function displayAllMerchants()
    {
        $merchants = DB::table('merchant_details')
                    ->select('merchant_details.*')
                    ->get();
        return response()->json(['success' => $merchants]);
    }


    public function import(Request $request)
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
        return response()->json(['success' => "Data Updated SuccessFully", 'logdata' => $logArray]);
    }


    public function showSingleMerchant(Request $request)
    {
        $merchants = DB::table('merchant_details')
            ->where('merchant_details.id', '=', $request->merchant_id)
            ->get();
        $merchants[0]->path = "";
        return response()->json(['success' => $merchants]);
    }

    public function updateMerchantDetails(Request $request)
    {
        $merchantInput  = $request->except('icon_logo');
        $image = $request->icon_logo;
        if (strlen($image ) < 600) {
            $departmentInput['icon_logo'] = $request->icon_logo;
        } else {
            $merchantInput  = $request->except('icon', '_token', '_method');
            $image = $request->icon;
            if ($image) {
                $image = str_replace('data:image/png;base64,', '', $image);
                $image = str_replace(' ', '+', $image);
                $imageName = rand(0,1000).time().'.png';
                \File::put(public_path('images/icons'). '/' . $imageName, base64_decode($image));
                $merchantInput['icon_logo'] = $imageName;
            }
        }
        MerchantDetails::where('id', '=', $request->id)->update($merchantInput);
        return response()->json(['success' => "Data Updated SuccessFully"]);
    }


}
