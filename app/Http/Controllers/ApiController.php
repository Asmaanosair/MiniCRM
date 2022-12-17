<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function company(Request $request){
        $query=Company::latest('revenue');
            if($request->name!=''){
                $query->whereLike('name',$request->name);
               }
        $company=$query->paginate(10);
         return response()->json($company);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function employee($id){
        $company=Company::find($id);
        $employee=Employee::where('company_id',$id)->paginate(10);
        return response()->json(['employee'=>$employee,'company'=>$company]);
    }
}
