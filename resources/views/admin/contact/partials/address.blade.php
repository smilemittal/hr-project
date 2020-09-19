@if($is_parent)
<div class="col-md-12" id="address-type" style="display: none">
    <div class="form-group row">
        <label class="col-md-3" for="">Address
            type</label>
        <div class="col-md-9">

            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="correspondence-sec" onclick="checkAddressType(this.id)">
                        <input type="checkbox" name="address-type[]" value="Correspondence" class="custom-control-input" id="Correspondence">
                        <label class="custom-control-label"
                                for="Correspondence">Correspondence</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="invoice-sec" onclick="checkAddressType(this.id)">
                        <input type="checkbox" name="address-type[]" class="custom-control-input" value="Invoice" id="Invoice">
                        <label class="custom-control-label"
                                for="Invoice">Invoice</label>
                    </div>
                </div>
            </div>
            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="registered-sec" onclick="checkAddressType(this.id)">
                        <input type="checkbox" name="address-type[]" value="Registered" class="custom-control-input" id="Registered">
                        <label class="custom-control-label" for="Registered">Registered</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="shipping-sec" onclick="checkAddressType(this.id)">
                        <input type="checkbox" name="address-type[]" value="Shipping" class="custom-control-input" id="Shipping">
                        <label class="custom-control-label" for="Shipping">Shipping</label>
                    </div>
                </div>
            </div>
            <div class="row cxrmcheckbox pb-2">
                <div class="col-md-6 col-sm-6">
                    <div class="custom-control custom-checkbox" id="other-sec" onclick="checkAddressType(this.id)">
                        <input type="checkbox" name="address-type[]" value="Other" class="custom-control-input" id="other">
                        <label class="custom-control-label" for="other">Other</label>
                        <!-- <i class="ft-external-link ccm"></i> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3" for="">House
            Number</label>
        <div class="col-md-9">
            <input type="text" id="" class="form-control" placeholder="" name="house-number">
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
                    placeholder="" name="house-name">

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
                    name="address-info">
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
                    placeholder="" name="street">
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
                    placeholder="" name="post-code">
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
                <option value="">Select Country
                </option>
                @forelse($countries as $country)
                    <option value="{{$country->id}}">{{$country->value}}</option>
                @empty
                    <option selected disabled>not
                        found in record
                    </option>
                @endforelse

            </select>
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
        </div>
    </div>
</div>