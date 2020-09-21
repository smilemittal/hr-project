@if($is_parent)
    <div class="col-md-12" id="address-type" style="{{isset($addressChild)?"display:block":"display:none"}}">
    <div class="form-group row">
        <label class="col-md-3" for="">Address type</label>
        <div class="col-md-9">
            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="{{ isset($addressChild) ? 'child' : 'parent' }}-correspondence-sec" onclick="{{ isset($addressChild) ? "moreAddressType(this.id)" : "" }}">
                        <input type="checkbox" name="address-type[]" value="Correspondence" class="custom-control-input" id="{{ isset($addressChild) ? 'child' : 'parent' }}-Correspondence">
                        <label class="custom-control-label"
                                for="{{ isset($addressChild) ? 'child' : 'parent' }}-Correspondence">Correspondence</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="{{ isset($addressChild) ? 'child' : 'parent' }}-invoice-sec" onclick="{{ isset($addressChild) ? "moreAddressType(this.id)" : "" }}">
                        <input type="checkbox" name="address-type[]" class="custom-control-input" value="Invoice" id="{{ isset($addressChild) ? 'child' : 'parent' }}-Invoice">
                        <label class="custom-control-label"
                                for="{{ isset($addressChild) ? 'child' : 'parent' }}-Invoice">Invoice</label>
                    </div>
                </div>
            </div>
            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="{{ isset($addressChild) ? 'child' : 'parent' }}-registered-sec" onclick="{{ isset($addressChild) ? "moreAddressType(this.id)" : "" }}">
                        <input type="checkbox" name="address-type[]" value="Registered" class="custom-control-input" id="{{ isset($addressChild) ? 'child' : 'parent' }}-Registered">
                        <label class="custom-control-label" for="{{ isset($addressChild) ? 'child' : 'parent' }}-Registered">Registered</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="{{ isset($addressChild) ? 'child' : 'parent' }}-shipping-sec" onclick="{{ isset($addressChild) ? "moreAddressType(this.id)" : "" }}">
                        <input type="checkbox" name="address-type[]" value="Shipping" class="custom-control-input" id="{{ isset($addressChild) ? 'child' : 'parent' }}-Shipping">
                        <label class="custom-control-label" for="{{ isset($addressChild) ? 'child' : 'parent' }}-Shipping">Shipping</label>
                    </div>
                </div>
            </div>
            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="{{ isset($addressChild) ? 'child' : 'parent' }}-other-sec" onclick="{{ isset($addressChild) ? "moreAddressType(this.id)" : "" }}">
                        <input type="checkbox" name="address-type[]" value="Other" class="custom-control-input" id="{{ isset($addressChild) ? 'child' : 'parent' }}-Other">
                        <label class="custom-control-label" for="{{ isset($addressChild) ? 'child' : 'parent' }}-Other">Other</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
            </div>
        </div>
        <span id="child-address-type" style="display: none">Address type must be required.</span>
        @if($errors->has('address-type'))
            <div class="error" style="color:red">Address type must be required.</div>
        @endif
    </div>
</div>
@endif
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3" for="">House Number</label>
        <div class="col-md-9">
            <input type="text" id="" class="form-control" placeholder="" name="house-number" value="{{old('house-number')}}">

            <span id="child-house-number" style="display: none">House number must be required.</span>
        @if($errors->has('house-number'))
                <div class="error" style="color:red">House number must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group extent-wrp row">
        <label class="col-md-3" for="">House
            Name</label>
        <div class="col-md-9">
            <input type="text" id=""
                    class="form-control"
                    placeholder="" name="house-name" value="{{old('house-name')}}">
            <span id="child-house-name" style="display: none">House name must be required.</span>
        @if($errors->has('house-number'))
                <div class="error" style="color:red">House name must be required.</div>
            @endif
        </div>

    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3" for="">Address
            info</label>
        <div class="col-md-9">
            <input type="text" id=""
                    class="form-control"
                    placeholder=""
                    name="address-info" value="{{old('address-info')}}">
            <span id="child-address-info" style="display: none">Address info must be required.</span>
        @if($errors->has('house-number'))
                <div class="error" style="color:red">Address info must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3"
                for="">Street</label>
        <div class="col-md-9">
            <input type="text" id=""
                    class="form-control"
                    placeholder="" name="street" value="{{old('street')}}">
            <span id="child-street" style="display: none">Street must be required.</span>
        @if($errors->has('street'))
                <div class="error" style="color:red">Street must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3"
                for="">Postcode</label>
        <div class="col-md-9">
            <input type="text" id=""
                    class="form-control"
                    placeholder="" name="post-code" value="{{old('post-code')}}">
            <span id="child-postcode" style="display: none">Post code must be required.</span>
            @if($errors->has('post-code'))
                <div class="error" style="color:red">Postcode must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12 country-parent">
    <div class="form-group row">
        <label class="col-md-3"
                for="">Country</label>
        <div class="col-md-9">
            <select id="" name="country"
                     class="form-control country-change">
                <option value="">Select Country</option>
                @forelse($countries as $country)
                    <option value="{{$country->id}}">{{$country->value}}</option>
                @empty
                    <option selected disabled>not
                        found in record
                    </option>
                @endforelse
            </select>
            <span id="child-country" style="display: none">Country must be required.</span>

        @if($errors->has('country'))
                <div class="error" style="color:red">Country must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12 state-parent">
    <div class="form-group row">
        <label class="col-md-3"
                for="">State</label>
        <div class="col-md-9">
            <select name="state" class="form-control state-change">
                <option value="">Select state
                </option>
            </select>
            <span id="child-state" style="display: none">State must be required.</span>
        @if($errors->has('state'))
                <div class="error" style="color:red">State must be required.</div>
            @endif
        </div>
    </div>
</div>
<div class="col-md-12 city-parent">
    <div class="form-group row">
        <label class="col-md-3" for="">City</label>
        <div class="col-md-9">
            <select name="city"
                    class="city-change form-control">
            </select>
            <span id="child-city" style="display: none">State must be required.</span>
        @if($errors->has('city'))
                <div class="error" style="color:red">City must be required.</div>
            @endif
        </div>
    </div>
</div>