<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\EwasteCompany;

use App\Models\User;

use App\Models\WasteLocation;

use App\Models\WasteSchedule;

use App\Models\WasteSubscriber;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CompanyController extends Controller
{
    //
    #update Company
#Store Company
	public function storecompany(Request $request)
	{
	   $data = new EwasteCompany();
       $data->company_name = $request->input('company_name');
       $data->company_address = $request->input('company_address');
       $data->company_phone = $request->input('company_phone');
        $data->company_desc = $request->input('company_desc');
       $data->status = 'Active';
       $data->save();

       $user = User::all()->where('email',$request->input('company_address'))->first();

       $pass = 'Password';
       if (!empty($user)) 
       {
       	$det = User::findorfail($user->id);
       	$det->name = $request->input('company_name');
        $det->email = $request->input('company_address');
       
        $det->save();
       }
       else
       {
       	$det = new User();
       	$det->name = $request->input('company_name');
        $det->email = $request->input('company_address');
        $det->password = \Hash::make($pass);
        $det->save();
       }

         $role_r = Role::where('name', '=', 'Wastemanager')->firstOrFail();
         $det->assignRole($role_r); 


       return redirect('create_company')->with('status','Registered');
	}

#update Company
	public function updatecompany(Request $request)
	{
	   $id = $request->input('incident_id');
	   $data = EwasteCompany::findorfail($id);
       $data->company_name = $request->input('company_name');
       $data->company_address = $request->input('company_address');
       $data->company_phone = $request->input('company_phone');
       $data->company_desc = $request->input('company_desc');
       $data->status = 'Active';
       $data->save();

       return back()->with('status','Registered');
	}


	#Create a compnay
	public function createcompany()
	{
		$data = EwasteCompany::all();
	
		return view('admin.settings',compact('data'));
	}



	


	#Create a compnay
	public function getcompany($data)
	{
		$data = EwasteCompany::all()->where('id',$data)->first();

		return $data;
	
		return view('admin.settings',compact('data'));
	}

	public function dropcompany($data)
	{
		$data = EwasteCompany::findorfail($data);
		$data->delete();

		$user = User::all()->where('email',$data->email)->first();
		if (!empty($user)) {
			$datas = User::findorfail($user->id);
		$datas->delete();
		}
		return back()->with('danger','Successfully Dropped');
	}

		#Create a compnay
	public function createlocation()
	{
		$company = EwasteCompany::all()->where('company_name',Auth::user()->name)->first();

		






		if (!empty($company)) {
			$name = $company->id;
			$locations = WasteLocation::all()->where('company_id',$company->company_name);
			$schedules = WasteSchedule::all()->where('company_id',$company->company_name);

	
			return view('admin.settings_location',compact('locations','name','schedules'));
		}

		$name ='0';

	
	
		return view('admin.settings_location',compact('company','name'));
	}


	#Create a compnay
	public function createschedule()
	{
		$data = EwasteCompany::all();

	
		return view('admin.settings',compact('data'));
	}

	#update Company
	public function storelocation(Request $request)
	{
	  
	   $data = new WasteLocation();
       $data->company_id = $request->input('company_id');
       $data->location = $request->input('company_location');
       $data->status = 'Active';
       $data->save();

       return back()->with('status','Registered Successfully');
	}

	#update Company
	public function storeschedule(Request $request)
	{
	  
	   $data = new WasteSchedule();
       $data->company_id = $request->input('company_id');
       $data->day = $request->input('day');
       $data->location = $request->input('location');
       $data->date = $request->input('from').' to '.$request->input('to');
 


       $data->save();

       return back()->with('status','Registered Successfully');
	}

		#update Company
	public function storesubscriber($id)
	{
	   $schedule = WasteSchedule::all()->where('id',$id)->first();

	   $data = new WasteSubscriber();
       $data->user_id = Auth::id();
       $data->company_id = $schedule->company_id;
       $data->day = $schedule->day;
       $data->location = $schedule->location;
       $data->date = $schedule->date;
       $data->description = 'ok';
       $data->save();

       return redirect('home')->with('status','Registered Successfully');
	}







	public function dropschedule($data)
	{
		$data = WasteSchedule::findorfail($data);
		$data->delete();

		return back()->with('danger','Successfully Dropped');
	}

	public function getservice($data)
	{
		$data = WasteSchedule::all()->where('company_id',$data);

		return view('schedule',compact('data'));
		return $data;

		return back()->with('danger','Successfully Dropped');
	}

		#Create a compnay
	public function searchwaste()
	{
		$data = EwasteCompany::all();

	
		return view('search',compact('data'));
	}

	   public function searchlocation(Request $request)
    {
       
        $locations = $request->input('location');

      

        $data = WasteLocation::query();

        if (!empty($locations))
         {
          $data = $data->where('location', 'like', '%'.$locations.'%');
         }

        $data = $data->get();  

        if (empty($data)) {
        	return back()->with('danger','Not Found');
        }


        return view('search',compact('data'));
    }


}
