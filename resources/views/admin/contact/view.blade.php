@extends('layouts.default') 
@section('content')
<section id="tabs-with-icons">
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <!-- <div class="card-header">
                            <h4 class="card-title">Basic Tabs</h4>
                        </div> -->
                <div class="card-content">
                    <div class="card-body">
                            <div class="card-header p-0">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"> <a class="nav-link active" id="cxrm-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" aria-expanded="true">Information </a>
                                    </li>
                                    <li class="nav-item" id="contact-hyperlink" style="display: block;"> <a class="nav-link" id="cxrm-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" aria-expanded="false">
                                                    Contacts</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" id="cxrm-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3" aria-expanded="false">
                                                    Accounting</a>
                                    </li>
                                </ul>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0" style="margin-top:8px;">
                                        <li>
                                            <a data-action="collapse"> <i class="ft-info"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload"> <i class="ft-aperture"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload" data-toggle="modal" data-keyboard="false" data-target="#editAddress"> <i class="ft-edit"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--newcode-->
                            <div class="card-content">
                                <div class="card-body px-0">
                                    <div class="tab-content p-0">

                                            <div class="radio_button-type">
                                                <div class="row p-2">
                                                        <div class="form-check mr-1" id="individualChecked">
                                                            <input class="form-check-input" type="radio" name="contact-type" id="exampleRadios1" value="Individual" checked>
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Individual
                                                            </label>
                                                        </div>
                                                        <div class="form-check" id="companyChecked">
                                                            <input class="form-check-input " type="radio" name="contact-type" id="exampleRadios2" value="Company">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Company
                                                            </label>
                                                        </div>                                                        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="individual-row" class="col_custom-head row">
                                                            <div class="col-md-6">
                                                                <div class="media d-flex mx-0 my-1 user-text">
                                                                    <div class="align-left p-0 mr-2">
                                                                        <a href="#" class="profile-image">
                                                                            <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120" alt="Card image">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body text-left text-dark">
                                                                        <div class="row">
                                                                            <div class="col-md-3 pr-md-0">
                                                                                <div class="form-group">
                                                                                    <select id="" name="priority" class="form-control">
                                                                                        <option value="low">Mr</option>
                                                                                        <option value="medium">Mrs</option>
                                                                                        <option value="high">Other</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9 px-1">
                                                                                <div class="form-group">
                                                                                    <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="form-group">
                                                                                    <label>Job Position</label>
                                                                                    <input type="name" placeholder="Desinger" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <div class="form-group">
                                                                                    <label>Business/Ref info</label>
                                                                                    <input type="name" placeholder="" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Tag</label>
                                                                                    <input type="name" placeholder="" name="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                   
                                                          <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="address_info">
                                                                    <div class="right-edit-btn">
                                                                           <a href="#"><i class="ft-edit"></i></a>
                                                                    </div>
                                                                    <ul class="col_bx">
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                             <label>Address</label>
                                                                             <p>Almack House, 28King street london SW1Y 5EN United Kingdom </p>
                                                                         </div>
                                                                     </li>
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">John.smith@gmail.com</a>

                                                                         </div>
                                                                     </li>
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">+44 (10) 747998 2435</a>
                                                                            
                                                                         </div>
                                                                     </li>
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">+44 (10) 1707 562 487</a>
                                                                            
                                                                         </div>
                                                                     </li>

                                                                    </ul>
                                                                </div>
                                                                </div>

                                                            </div>
                                                              
                                                          </div>

                                                        </div>

                                                          <div id="company-row" class="col_custom-head row" style="display: none;">
                                                            <div class="col-md-6">
                                                                <div class="media d-flex mx-0 my-1 user-text">
                                                                    <div class="align-left p-0 mr-2">
                                                                        <a href="#" class="profile-image">
                                                                            <img src="http://digita.vhostevents.com/app-assets/images/portrait/small/avatar-s-1.png" class="rounded-squre img-border height-120" alt="Card image">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body text-left text-dark">
                                                                        <div class="row">
                                                                            <div class="col-md-3 pr-md-0">
                                                                                <div class="form-group">
                                                                                    <select id="" name="priority" class="form-control">
                                                                                        <option value="low">Mr</option>
                                                                                        <option value="medium">Mrs</option>
                                                                                        <option value="high">Other</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9 px-1">
                                                                                <div class="form-group">
                                                                                    <input type="text" id="" class="form-control" placeholder="John Smith" name="issuetitle">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="form-group">
                                                                                    <label>Job Position</label>
                                                                                    <input type="name" placeholder="Desinger" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <div class="form-group">
                                                                                    <label>Business/Ref info</label>
                                                                                    <input type="name" placeholder="" name="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Tag</label>
                                                                                    <input type="name" placeholder="" name="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                   
                                                          <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="address_info">
                                                                    <div class="right-edit-btn">
                                                                           <a href="#"><i class="ft-edit"></i></a>
                                                                    </div>
                                                                    <ul class="col_bx">
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                             <label>Address</label>
                                                                             <p>Almack House, 28King street london SW1Y 5EN United Kingdom </p>
                                                                         </div>
                                                                     </li>
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">John.smith@gmail.com</a>

                                                                         </div>
                                                                     </li>
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">+44 (10) 747998 2435</a>
                                                                            
                                                                         </div>
                                                                     </li>
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">+44 (10) 1707 562 487</a>
                                                                            
                                                                         </div>
                                                                     </li>

                                                                    </ul>
                                                                </div>
                                                                </div>

                                                                 <div class="col-md-4">
                                                                    <div class="address_info">
                                                                   <div class="type-address">
                                                                       <h2>Address type</h2>
                                                                       <a href="#"><i class="ft-edit"></i></a>
                                                                   </div>
                                                                    <ul class="col_bx">
                                                                
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">Invoice/Billing</a>

                                                                         </div>
                                                                     </li>
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">Registered address</a>
                                                                            
                                                                         </div>
                                                                     </li>
                                                                      <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">Shiping</a>
                                                                            
                                                                         </div>
                                                                     </li>
                                                                     <li>
                                                                         <div class="icons">
                                                                             <i class="ft-edit"></i>
                                                                         </div>
                                                                         <div class="address-data">
                                                                            <a href="#">Other address</a>
                                                                            
                                                                         </div>
                                                                     </li>


                                                                    </ul>
                                                                </div>
                                                                </div>


                                                            </div>
                                                              
                                                          </div>

                                                        </div>
                                                        

                                                    </div>                                                   
                                                </div>


                                        <!--Information Tab Content-->
                                        <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                            <div class="row mt-1">
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <h4 class="form-section">Social Info</h4>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="">LinkedIn</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="">Facebook</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="projectinput7">Twitter</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control">Instagram</label>
                                                            <div class="col-md-8">
                                                                <div class="position-relative">
                                                                    <input type="url" id="" name="social[]" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-body">
                                                        <h4 class="form-section">CxRM</h4>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" value="Customer" name="cxrm[]" id="customCheck1" checked="">
                                                                    <label class="custom-control-label" for="customCheck1">Customer</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" value="Supplier" name="cxrm[]" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">Supplier</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Beneficiary" class="custom-control-input" id="customCheck3">
                                                                    <label class="custom-control-label" for="customCheck3">Beneficiary</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Partner" class="custom-control-input" id="customCheck4">
                                                                    <label class="custom-control-label" for="customCheck4">Partner</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row cxrmcheckbox pb-2">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="Employee" class="custom-control-input" id="customCheck5">
                                                                    <label class="custom-control-label" for="customCheck5">Employee</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="cxrm[]" value="User" class="custom-control-input" id="customCheck6">
                                                                    <label class="custom-control-label" for="customCheck6">User</label>
                                                                    <!-- <i class="ft-external-link ccm"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Contact Tab Content-->
                                        <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                            <div id="contact-target" style="display: block;">
                                                <div class="row" id="child-contact-section">
                                                    <div class="col-sm-12">
                                                        <h4>Contacts</h4>
                                                        <a href="javascript:void(0)" class="create_btn" data-toggle="modal" data-target="#create-modal">Create</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Accounting Tab Content-->
                                        <div role="tabpanel" class="tab-pane" id="tabIcon3" aria-expanded="true" aria-labelledby="baseIcon-tab3">
                                            <div class="row mt-1">
                                                <div class="col-md-12">
                                                    <div class="form-body">
                                                        <h4 class="form-section">Accounting</h4>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="">Sales Person</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <select id="" name="1" class="form-control">
                                                                                <option value="1">Sales Person</option>
                                                                                <option value="2">Sales Person 1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="">Accounts Receivable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-rec-able" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Sales Price list</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="sales-price" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Accounts Payable</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="account-payable" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Customer Payment Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="customer-payment" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 label-control" for="projectinput7">Vendor Payment Terms</label>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative">
                                                                            <input type="text" id="" name="vendor-term" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-body">
                                                    <h4 class="form-section">Other Information</h4>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <textarea id="projectinput9" rows="5" class="form-control" name="other-information" placeholder="WISIWYG"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--newcode-->
                            <button type="submit" class="btn btn-success float-right mb-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>


$(document).ready(function(){
$("#individualChecked").click(function(){
  $("#individual-row").addClass("active_individual");
})   
$("#companyChecked").click(function(){
  $("#company-row").addClass("active_company");
})  

$("#individualChecked").click(function(){
 $("#company-row").removeClass("active_company");
  });
$("#companyChecked").click(function(){
 $("#individual-row").removeClass("active_individual");
  });


});
</script>

@endsection