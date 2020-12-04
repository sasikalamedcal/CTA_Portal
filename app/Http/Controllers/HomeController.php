<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\CompanyProfile;
use App\Whitelist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
	

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
	    $users=User::where('role','=',2)->count();
		$activeUsers=User::where('role','=',2)->where('status','=',1)->count();
		$inactiveUsers=User::where('role','=',2)->where('status','=',0)->count();
		$ips=Whitelist::count();
		$activeIps=Whitelist::where('status','=',1)->count();
		$inactiveIps=Whitelist::where('status','=',0)->count();
        return view('home',compact('users','activeUsers','inactiveUsers','ips','activeIps','inactiveIps'));
    }
	
	
	public function getProfile()
    {
		$id=Auth::user()->id;
		if(!User::where('id',$id)->exists())
		{
			$company = new User();
			$company->id = $id;
			$company->save(); 	
		}
				
		$user=User::where('id',$id)->first();
		return view('profile', compact('user'));
	
    }
	
	
	public function patchUpdate(Request $request, $id)
    {
	
		$validator = $request->validate([
				    'firstname' => 'required',
					'phone' => 'required|unique:users,phone,'. $id .'id',
					'email' => 'required|unique:users,email,'. $id .'id',
					]);
				
		$user = User::findOrFail($id);
		$user->firstname = $request->firstname;
		$user->lastname = $request->lastname;
		$user->phone = $request->phone;
		$user->email = $request->email;
		$user->address_line = $request->address_line;
		$user->address_line_extended = $request->address_line_extended;
		$user->city = $request->city;
		$user->state = $request->state;
		$user->country = $request->country;
		$user->zipcode = $request->zipcode;
		$user->role = $request->role;
		$user->status = $request->status;
		$user->save(); 
		
  		return redirect('profile')->with('success', 'User has been updated');
    }
	
	
	public function getPassword()
    {
		$id=Auth::user()->id;
		$user=User::findOrFail($id);
        return view('password', compact('user'));
    }
	
	public function patchPassword(Request $request, $id)
    {
		
		$validator = $request->validate([
					 'current_password' => 'required',     
	                 'password'         => 'required|min:8|confirmed',
                     'password_confirmation' => 'required|min:8'
					 
					 //[
      //      'required',
       //     'string',
       //     'min:10',             // must be at least 10 characters in length
        //    'regex:/[a-z]/',      // must contain at least one lowercase letter
         //   'regex:/[A-Z]/',      // must contain at least one uppercase letter
          //  'regex:/[0-9]/',      // must contain at least one digit
          //  'regex:/[@$!%*#?&]/', // must contain a special character
        //],
				]);
				
		$currentPassword=$request->current_password;
		$oldPassword=User::where('id','=',$id)->value('password');
		if(Hash::check($request->current_password,$oldPassword))		
		{
		$user = User::findOrFail($id);
		$user->password = bcrypt($request->password);
		$user->save(); 
		}else
		{
		return redirect('paasword')->with('failure', 'Invalid current password');	
		}
		
  		return redirect('password')->with('success', 'Password has been updated');
    }
	
	
}
