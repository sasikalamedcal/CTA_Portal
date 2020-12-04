@extends('layouts.app')

@section('content')
                                

                                <form action="{{ url('loas/store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                                	
                                	
                                    <div class="row">
                                    	<div class="col-sm-6">
                                         <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Title *</label>
                                                <div class="col-sm-12">
                                                    <select name="title" data-label="salutationtype" class="form-control" required="">
                                                       <option value=""></option>
                                                        <option value="Dr">Dr</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Prof">Prof</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">First Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="forename" maxlength="40" data-label="" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        
                                      </div>
                                      
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Last Name *</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="surname" maxlength="80" data-label="" value="" required="">  
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Date Of Birth *</label>
                                                <div class="col-sm-12">
                                                    <input type="date" class="form-control" name="dob" 
                                                    maxlength="data-label=&quot;&quot;" value="" required="required">
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Postcode *</label>
                                                <div class="col-sm-12">
													<input type="text" id="lookup_field" class="form-control" name="postcode" maxlength="30" data-label="" 
                                                    value="" required="required">  
                                                  
                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address Line 1 * </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="address_line_1"  
                                                    value="" required="required">  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Address Line 2 </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="address_line_2"  
                                                    value="">  
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Town *</label>
                                                <div class="col-sm-12">
													<input type="text" id="lookup_field" class="form-control" name="town" data-label="" 
                                                    value="" required="required">  
                                                </div>                                            
                                             </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">County  </label>
                                                <div class="col-sm-12">
                                                <input type="text" id="output_field" class="form-control" name="county"  
                                                    value="">  
                                                </div>
                                            </div>
                                        </div>
                                      </div>  
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Email Address </label>
                                                <div class="col-sm-12">
												<input type="email" class="form-control" name="email" data-label="Primary Email" value=""/>                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Phone Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="tel" class="form-control" name="phone" maxlength="11" 
                                                    pattern="^(\(?0|\+44)((( ?\(?([12356789]))( ?\(?\d\)?){9})|( ?\(?(1\d\d|500|800)( ?\(?\d\)?){6}))( ?#\(?\d{3,4}\)?)?$" 
                                                    value="" required="required"> 
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label">Mobile Number *</label>
                                                <div class="col-sm-12">
                                                	<input type="tel" class="form-control" name="mobile" min="10" maxlength="11" 
                                                    pattern="^(\(?0|\+44)((( ?\(?([12356789]))( ?\(?\d\)?){9})|( ?\(?(1\d\d|500|800)( ?\(?\d\)?){6}))( ?#\(?\d{3,4}\)?)?$" value="" required=""> 
                                                </div>
                                            </div>
                                         </div>   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Happy to be referred to CTA?</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="fld_happytobereferredtocta_1918" 
                                                    data-label="label:Happy+to+be+referred+to+CTA%3F">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                    <input type="hidden" class="form-control" name="leadsource" data-label="leadsource"  
                                                    value="Aims Legal &amp; Bank Charge">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                      </div>    
                                      
                                      <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Comments </label>
                                                <div class="col-sm-12">
                                                   <textarea rows="2" cols="" class="form-control" name="cf_vtcmloa_comments"></textarea>
                                                   <input type="hidden" name="cf_leads_username" maxlength="100" data-label="" 
                                                   value="Casetoanswer UK">                                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Lead Source *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="fld_leadsource" required>
                                                       <option value="">Please Select Lead Source</option>
                                                    	                                                        <option value="146">Aims Legal</option>
                                                                                                                <option value="147">Bank Charges</option>
                                                                                                                <option value="145">Goodwin Barrett</option>
                                                                                                                <option value="148">FMS Data</option>
                                                                                                                <option value="149">JPS Data</option>
                                                                                                                <option value="150">Fuse Data</option>
                                                                                                                <option value="151">Star Advice Group</option>
                                                                                                                <option value="152">Undisclosed</option>
                                                                                                                <option value="164">Impakt Claims</option>
                                                                                                            </select>
                                                    
                                                  
												</div>
                                            </div>
                                        </div>
                                      </div>  
                                      
                                      <div class="row">
                                      
                                         <div class="col-sm-12">
                                           
                                          
                                      		
                                            <table class="table table table-bordered" id="order">
					                    <thead>
					                        <tr>
                                                <th>Lender</th>
					                            <th>Account Type</th>
                                                <th></th>
					                        </tr>
					                    </thead>
					                    <tbody>
                                        
                                        
					                        <tr id="rowcount">
                                               <!-- <td><span id='sn'>1</span></td>-->
                                                <td>
                                                <select id="lender" class="form-control" name="data[1][lender]">
                                                    	<option value="">Please Select Lender</option>
                                                                                                                <option value="Bank of Scotland"> Bank of Scotland </option>
                                                                                                                <option value="Barclaycard"> Barclaycard </option>
                                                                                                                <option value="Canada Square Operations"> Canada Square Operations </option>
                                                                                                                <option value="Capital One"> Capital One </option>
                                                                                                                <option value="Halifax"> Halifax </option>
                                                                                                                <option value="HSBC"> HSBC </option>
                                                                                                                <option value="Lloyds Bank"> Lloyds Bank </option>
                                                                                                                <option value="M&amp;S Bank"> M&amp;S Bank </option>
                                                                                                                <option value="MBNA Ltd"> MBNA Ltd </option>
                                                                                                                <option value="Natwest"> Natwest </option>
                                                                                                                <option value="Royal Bank of Scotland"> Royal Bank of Scotland </option>
                                                                                                                <option value="Santander"> Santander </option>
                                                                                                                <option value="Tesco Bank"> Tesco Bank </option>
                                                                                                                <option value="Barclays"> Barclays </option>
                                                                                                                <option value="Northern Rock / NRAM"> Northern Rock / NRAM </option>
                                                                                                                <option value="TSB Bank"> TSB Bank </option>
                                                                                                                <option value="Yorkshire Bank"> Yorkshire Bank </option>
                                                                                                                <option value="Clydesdale Bank"> Clydesdale Bank </option>
                                                                                                                <option value="Black Horse Personal Finance"> Black Horse Personal Finance </option>
                                                                                                                <option value="Bank of Ireland UK"> Bank of Ireland UK </option>
                                                                                                                <option value="AiB (Allied Irish Bank)"> AiB (Allied Irish Bank) </option>
                                                                                                                <option value="Paragon"> Paragon </option>
                                                                                                                <option value="Co-Operative Bank"> Co-Operative Bank </option>
                                                                                                                <option value="Ulster Bank"> Ulster Bank </option>
                                                                                                                <option value="Investec"> Investec </option>
                                                                                                                <option value="Welcome Finance"> Welcome Finance </option>
                                                                                                                <option value="AQUA"> AQUA </option>
                                                                                                                <option value="Vanquis"> Vanquis </option>
                                                                                                                <option value="American Express"> American Express </option>
                                                                                                                <option value="Nationwide"> Nationwide </option>
                                                                                                                <option value="First Direct"> First Direct </option>
                                                                                                                <option value="Metro Bank"> Metro Bank </option>
                                                                                                                <option value="Abbey National"> Abbey National </option>
                                                                                                                <option value="Accord Mortgages"> Accord Mortgages </option>
                                                                                                                <option value="ACF Car Finance"> ACF Car Finance </option>
                                                                                                                <option value="Alliance and Leicester"> Alliance and Leicester </option>
                                                                                                                <option value="Argos Storecard"> Argos Storecard </option>
                                                                                                                <option value="Barclays Partner Finance"> Barclays Partner Finance </option>
                                                                                                                <option value="Birmingham Midshires"> Birmingham Midshires </option>
                                                                                                                <option value="Bradford &amp; Bingley"> Bradford &amp; Bingley </option>
                                                                                                                <option value="Britannia (Co-op.)"> Britannia (Co-op.) </option>
                                                                                                                <option value="Cahoot"> Cahoot </option>
                                                                                                                <option value="Capital Bank"> Capital Bank </option>
                                                                                                                <option value="Capital Home Loans"> Capital Home Loans </option>
                                                                                                                <option value="Central Capital Limited"> Central Capital Limited </option>
                                                                                                                <option value="Cheltenham &amp; Gloucester"> Cheltenham &amp; Gloucester </option>
                                                                                                                <option value="CitiFinancial"> CitiFinancial </option>
                                                                                                                <option value="Creation Finance"> Creation Finance </option>
                                                                                                                <option value="Clydesdale Financial Services"> Clydesdale Financial Services </option>
                                                                                                                <option value="Danske Bank"> Danske Bank </option>
                                                                                                                <option value="Direct Auto Finance"> Direct Auto Finance </option>
                                                                                                                <option value="Direct Line"> Direct Line </option>
                                                                                                                <option value="EGG"> EGG </option>
                                                                                                                <option value="First Plus"> First Plus </option>
                                                                                                                <option value="First Response Finance Limited"> First Response Finance Limited </option>
                                                                                                                <option value="First Trust Bank"> First Trust Bank </option>
                                                                                                                <option value="Frizzell Bank"> Frizzell Bank </option>
                                                                                                                <option value="Future Mortgages Limited"> Future Mortgages Limited </option>
                                                                                                                <option value="GE Money Home Lending"> GE Money Home Lending </option>
                                                                                                                <option value="HFC Bank / Beneficial Finance"> HFC Bank / Beneficial Finance </option>
                                                                                                                <option value="Intelligent Finance"> Intelligent Finance </option>
                                                                                                                <option value="JD Williams Catalogue"> JD Williams Catalogue </option>
                                                                                                                <option value="Littlewoods - Shop Direct Group Ltd"> Littlewoods - Shop Direct Group Ltd </option>
                                                                                                                <option value="Liverpool Victoria Friendly Society"> Liverpool Victoria Friendly Society </option>
                                                                                                                <option value="Loans Direct"> Loans Direct </option>
                                                                                                                <option value="Loans.Co.Uk"> Loans.Co.Uk </option>
                                                                                                                <option value="Lombard Direct"> Lombard Direct </option>
                                                                                                                <option value="Marbles"> Marbles </option>
                                                                                                                <option value="Mint"> Mint </option>
                                                                                                                <option value="Monument"> Monument </option>
                                                                                                                <option value="MotoNovo Finance"> MotoNovo Finance </option>
                                                                                                                <option value="Norton Finance"> Norton Finance </option>
                                                                                                                <option value="Norwich and Peterborough Building Society"> Norwich and Peterborough Building Society </option>
                                                                                                                <option value="Ocean Finance and Mortgages Limited"> Ocean Finance and Mortgages Limited </option>
                                                                                                                <option value="Opus"> Opus </option>
                                                                                                                <option value="Prudential Bank Plc"> Prudential Bank Plc </option>
                                                                                                                <option value="Sainsburys Bank"> Sainsburys Bank </option>
                                                                                                                <option value="Santander Consumer Finance (vehicle finance)"> Santander Consumer Finance (vehicle finance) </option>
                                                                                                                <option value="Santander Store Cards"> Santander Store Cards </option>
                                                                                                                <option value="Shop Direct Group Ltd"> Shop Direct Group Ltd </option>
                                                                                                                <option value="Standard Chartered Bank"> Standard Chartered Bank </option>
                                                                                                                <option value="Style Financial Services"> Style Financial Services </option>
                                                                                                                <option value="Very - Shop Direct Group Ltd"> Very - Shop Direct Group Ltd </option>
                                                                                                                <option value="Yes Car Credit"> Yes Car Credit </option>
                                                                                                                <option value="Yes Loans Uk"> Yes Loans Uk </option>
                                                                                                                <option value="Yorkshire Building Society"> Yorkshire Building Society </option>
                                                                                                                <option value="CT Capital"> CT Capital </option>
                                                                                                            </select> 
                                                 </td>
                                                <td>
                                                  <select class="form-control col-sm-12" name="data[1][account]" id="account"> 
                                                    	<option value="">Please Select Account Type</option>
                                                                                                                <option value="Personal Loan"> Personal Loan </option>
                                                                                                                <option value="Credit Card"> Credit Card </option>
                                                                                                                <option value="Store Card"> Store Card </option>
                                                                                                                <option value="Car Finance"> Car Finance </option>
                                                                                                                <option value="Catalogue"> Catalogue </option>
                                                                                                                <option value="Mortgage"> Mortgage </option>
                                                                                                            </select>
                                                    
                                                </td>
                                                <td></td>
                                            </tr>
                                
                                            <tr class="order-list"></tr>
                                            <tr>
                                            <td colspan="7">
                                          	 <a class="demo-delete-row btn btn-success addmore" id="addmore" >Add new</a>
                                            </td>
                                           </tr>
                                           
										</tbody>
					                </table>
                                    
                                           
                                    
                                         </div>
                                      	
                                      </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-sm-12 col-form-label"> Eligible for Plevin & LOA Out?</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control" name="loa">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                      
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label class="col-sm-12 col-form-label">  </label>
                                            <div class="col-sm-12">
                                               <input type="hidden" name="cf_leads_ipaddress" maxlength="100" data-label="" value="" required="">
                                               <input type="submit" class="btn btn-primary" id="vtigerFormSubmitBtn" value="Submit"></button>
                                            </div>
                                            </div>
                                        </div>
                                      </div>      
                                      
                                  
                                        
                                        </form>

                                       
                                        </div>
                                    </div>
                                    <!-- Basic Form Inputs card end -->
            
                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page body end -->
                                        </div>
