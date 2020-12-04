<?php

namespace App\Http\Controllers;


use App\Loa;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use DB;


class LOAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$dob= date("d/m/Y", strtotime($request->dob));
	    if($request->loa=="Yes")
        {
            $data = [
				'title' => $request->title,
				'forename' => $request->forename,
				'surname'  => $request->surname,
				'email'  => $request->email,
				'phone'  => $request->phone,
				'mobile'  => $request->mobile,
				'dob'  => $dob,				
				'address_line_1'  => $request->address_line_1,
				'address_line_2'  => $request->address_line_2,
				'town'  => $request->town,
				'county'  => $request->county,
				'postcode'  => $request->postcode,
				'lead_id' => $request->fld_leadsource,				
				'reminder_scheme'  => $request->reminder_scheme,
				'message_template_id'  => $request->message_template_id,				
				'is_esign'  => $request->is_esign,
				'esign_template_id'  => $request->esign_template_id,
				'esign_document_name'  => 'LOA Request',
			];
			
			
			 /* $response = Curl::to('https://casetoanswer.fastdox.co.uk/api/v2/document-request/create')
				->withHeader('Authorization: 931562c0-d0c1-11ea-9876-cd469a6d8f22')
				->withData($data)
                ->post();
				
			  $json = json_decode($response);
			  
			
				if($response)
				{*/
					$datas=$request->get('data');	
					
					
					/*if($data['lender']=="Others"){$lender=$data['lender_others']; $lender_others=1;}else{$lender=$data['lender']; $lender_others=0;}
					if($data['account']=="Others"){$account=$data['account_others'];$account_others=1;}else{$account=$data['account'];$account_others=0;}*/

						
					$user = new Loa();
					$user->title = $request->title;
					$user->forename = $request->forename;
					$user->surname = $request->surname;
					$user->email = $request->email;
					$user->phone = $request->phone;
					$user->mobile = $request->mobile;
					$user->dob = $dob;
					$user->address_line_1 = $request->address_line_1;
					$user->address_line_2 = $request->address_line_2;
					$user->town = $request->town;
					$user->county = $request->county;
					$user->postcode = $request->postcode;
					$user->cta= $request->fld_happytobereferredtocta_1918;
					$user->comments= $request->cf_vtcmloa_comments;
					$user->leadsource= $request->fld_leadsource;
					$user->save(); 

					$data = [
						'publicid'=>"87f45e8269a779fd3dc0e9dc1201264f",
						'assigned_user_id' => '19x1',	
					   'potentialname' =>  $request->title.' '.$request->forename.' '.$request->surname,
					   'cf_potentials_client1dob'  =>  $request->dob,	
					   'cf_potentials_client1emailaddress'  => $request->email,
					   'cf_potentials_client1contactnumber'  => $request->phone,
					   'cf_potentials_client2contactnumber'  => $user->id,
					   'cf_potentials_client1address'  => $request->address_line_1.','.$request->address_line_2.','.$request->town.','.$request->county.','.$request->country,
					   'cf_potentials_numberofclientsfinancialdependants'  => $request->postcode,				
					   'cf_potentials_happytobereferredtocta'  => $request->cta,
					   //'cf_potentials_leadsource2'  => 'Goodwin Barrett',
					   'leadsource'  => '',
					   //'related_to'  => $lender, 
					   'cf_potentials_creditorname' => '',
					   'cf_potentials_accounttype'  => '',
					   'sales_stage'  => "New",
					   'pipeline'     => "LOA",
					   //'cf_potentials_opportunityidwebformtest'=>$request->loa,
					   'cf_potentials_opportunityidwebformtest'=>"LOA",
					   'cf_potentials_comments'  => $request->comments,
				   ];
				   
							   
				/* $response = Curl::to('https://anthonycasetoanswercom.od2.vtiger.com/modules/Webforms/capture.php')
				   ->withHeader('enctype: multipart/form-data')
				   ->withData($data)
				   ->post();*/
					
					//$datas =DB::table('loas')->latest()->get();

					/*DB::table('oppurtunities')
					->insert(['title' => $user->title, 'forename'=>$user->forename, 'surname'=>$user->surname, 'dob'=>$user->dob, 'postcode'=>$user->postcode,'address_line_1'=>$user->address_line_1, 'address_line_2'=>$user->address_line_2, 'town'=>$user->town, 'county'=>$user->county,'email'=>$user->email,'mobile'=>$user->mobile, 'phone'=>$user->phone,'cta'=>$user->cta,'comments'=>$user->comments,'leadsource'=>$user->leadsource,'lender'=>$user->lender,'account'=>$user->account,'contact_id'=>$user->id,
				   'status'=>$user->status,
				   'created_at'=>$user->created_at, 'updated_at' => $user->updated_at]);*/
					if($response)
					{
					return redirect('LOA')->with('success', 'LOA has been Created Successfully');
					}

        }
        else
		{
			$datas=$request->get('data');	
			
				
			foreach($datas as $data)
			{
			
				if($data['lender']=="Others"){$lender=$data['lender_others']; $lender_others=1;}else{$lender=$data['lender']; $lender_others=0;}
				if($data['account']=="Others"){$account=$data['account_others'];$account_others=1;}else{$account=$data['account'];$account_others=0;}
				
				$leadsource=Leadsource::where('lead_id','=',$request->fld_leadsource)->value('lead_source');
			
			
		 $data = [
		 		'publicid'=>"87f45e8269a779fd3dc0e9dc1201264f",
		 		'assigned_user_id' => '19x1',	
				'potentialname' =>  $request->title.' '.$request->forename.' '.$request->surname,
				'cf_potentials_client1dob'  =>  $request->dob,	
				'cf_potentials_client1emailaddress'  => $request->email,
				'cf_potentials_client1contactnumber'  => $request->phone,
				'cf_potentials_client2contactnumber'  =>  $request->mobile,
				'cf_potentials_client1address'  => $request->address_line_1.','.$request->address_line_2.','.$request->town.','.$request->county.','.$request->country,
				'cf_potentials_numberofclientsfinancialdependants'  => $request->postcode,				
				'cf_potentials_happytobereferredtocta'  => $request->cta,
				//'cf_potentials_leadsource2'  => 'Goodwin Barrett',
				'leadsource'  => '',
				//'related_to'  => $lender, 
				'cf_potentials_creditorname' => $lender,
				'cf_potentials_accounttype'  => $account,
				'sales_stage'  => "New",
				'pipeline'     => "LOA",
				//'cf_potentials_opportunityidwebformtest'=>$request->loa,
				'cf_potentials_opportunityidwebformtest'=>"LOA",
				'cf_potentials_comments'  => $request->comments,
			];
			
						
		  /*$response = Curl::to('https://anthonycasetoanswercom.od2.vtiger.com/modules/Webforms/capture.php')
			->withHeader('enctype: multipart/form-data')
			->withData($data)
			->post();*/
			}
		
					$datas=$request->get('data');	
					foreach($datas as $data)
					{
					if($data['lender']=="Others"){$lender=$data['lender_others']; $lender_others=1;}else{$lender=$data['lender']; $lender_others=0;}
					if($data['account']=="Others"){$account=$data['account_others'];$account_others=1;}else{$account=$data['account'];$account_others=0;}
						
					$user = new Loa();
					$user->case_ref = $request->case_ref;
					$user->title = $request->title;
					$user->forename = $request->forename;
					$user->surname = $request->surname;
					$user->email = $request->email;
					$user->phone = $request->phone;
					$user->mobile = $request->mobile;
					$user->dob = $dob;
					$user->address_line_1 = $request->address_line_1;
					$user->address_line_2 = $request->address_line_2;
					$user->town = $request->town;
					$user->county = $request->county;
					$user->postcode = $request->postcode;
					$user->cta= $request->fld_happytobereferredtocta_1918;
					$user->comments= $request->cf_vtcmloa_comments;
					$user->leadsource= $request->fld_leadsource;	
					$user->reminder_scheme = $request->reminder_scheme;
					$user->message_template_id = $request->message_template_id;
					$user->is_esign = $request->is_esign;
					$user->esign_template_id = $request->esign_template_id;
					$user->esign_document_name = "LOA Request";
					$user->status = 0;
					$user->fastdox_id = 0;
					$user->lender=$lender;
				    $user->lender_others=$lender_others;
					$user->account=$account;
					$user->account_others=$account_others;
					$user->is_loa=0;
					$user->is_download=0;
					$user->is_vtiger=1;
					$user->save(); 	
					}
				
			
		     return redirect('LOA')->with('success', 'LOA has been Created Successfully');
		}
		
        
     // return redirect('cases')->with('success', 'Case has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tax  $tax
     * @return \Illuminate\Http\Response
     */
	 
		
	
	
	
}

