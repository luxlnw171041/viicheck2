<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="control-label">{{ 'District' }}</label>
    <input class="form-control" name="district" type="text" id="district" value="{{ isset($district->district) ? $district->district : ''}}" >
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amphoe') ? 'has-error' : ''}}">
    <label for="amphoe" class="control-label">{{ 'Amphoe' }}</label>
    <input class="form-control" name="amphoe" type="text" id="amphoe" value="{{ isset($district->amphoe) ? $district->amphoe : ''}}" >
    {!! $errors->first('amphoe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
    <label for="province" class="control-label">{{ 'Province' }}</label>
    <input class="form-control" name="province" type="text" id="province" value="{{ isset($district->province) ? $district->province : ''}}" >
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('zipcode') ? 'has-error' : ''}}">
    <label for="zipcode" class="control-label">{{ 'Zipcode' }}</label>
    <input class="form-control" name="zipcode" type="text" id="zipcode" value="{{ isset($district->zipcode) ? $district->zipcode : ''}}" >
    {!! $errors->first('zipcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district_code') ? 'has-error' : ''}}">
    <label for="district_code" class="control-label">{{ 'District Code' }}</label>
    <input class="form-control" name="district_code" type="text" id="district_code" value="{{ isset($district->district_code) ? $district->district_code : ''}}" >
    {!! $errors->first('district_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amphoe_code') ? 'has-error' : ''}}">
    <label for="amphoe_code" class="control-label">{{ 'Amphoe Code' }}</label>
    <input class="form-control" name="amphoe_code" type="text" id="amphoe_code" value="{{ isset($district->amphoe_code) ? $district->amphoe_code : ''}}" >
    {!! $errors->first('amphoe_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province_code') ? 'has-error' : ''}}">
    <label for="province_code" class="control-label">{{ 'Province Code' }}</label>
    <input class="form-control" name="province_code" type="text" id="province_code" value="{{ isset($district->province_code) ? $district->province_code : ''}}" >
    {!! $errors->first('province_code', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
