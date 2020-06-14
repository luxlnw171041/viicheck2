<div class="form-group {{ $errors->has('name_dealers') ? 'has-error' : ''}}">
    <label for="name_dealers" class="control-label">{{ 'Name Dealers' }}</label>
    <input class="form-control" name="name_dealers" type="text" id="name_dealers" value="{{ isset($dealer->name_dealers) ? $dealer->name_dealers : ''}}" >
    {!! $errors->first('name_dealers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
    <label for="province" class="control-label">{{ 'Province' }}</label>
    <input class="form-control" name="province" type="text" id="province" value="{{ isset($dealer->province) ? $dealer->province : ''}}" >
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dealers') ? 'has-error' : ''}}">
    <label for="dealers" class="control-label">{{ 'Dealers' }}</label>
    <input class="form-control" name="dealers" type="text" id="dealers" value="{{ isset($dealer->dealers) ? $dealer->dealers : ''}}" >
    {!! $errors->first('dealers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('isuzu_all') ? 'has-error' : ''}}">
    <label for="isuzu_all" class="control-label">{{ 'Isuzu All' }}</label>
    <input class="form-control" name="isuzu_all" type="text" id="isuzu_all" value="{{ isset($dealer->isuzu_all) ? $dealer->isuzu_all : ''}}" >
    {!! $errors->first('isuzu_all', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pickup_and_multipurpose') ? 'has-error' : ''}}">
    <label for="pickup_and_multipurpose" class="control-label">{{ 'Pickup And Multipurpose' }}</label>
    <input class="form-control" name="pickup_and_multipurpose" type="text" id="pickup_and_multipurpose" value="{{ isset($dealer->pickup_and_multipurpose) ? $dealer->pickup_and_multipurpose : ''}}" >
    {!! $errors->first('pickup_and_multipurpose', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Paint_and_body') ? 'has-error' : ''}}">
    <label for="Paint_and_body" class="control-label">{{ 'Paint And Body' }}</label>
    <input class="form-control" name="Paint_and_body" type="text" id="Paint_and_body" value="{{ isset($dealer->Paint_and_body) ? $dealer->Paint_and_body : ''}}" >
    {!! $errors->first('Paint_and_body', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <input class="form-control" name="location" type="text" id="location" value="{{ isset($dealer->location) ? $dealer->location : ''}}" >
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('latitude') ? 'has-error' : ''}}">
    <label for="latitude" class="control-label">{{ 'Latitude' }}</label>
    <input class="form-control" name="latitude" type="text" id="latitude" value="{{ isset($dealer->latitude) ? $dealer->latitude : ''}}" >
    {!! $errors->first('latitude', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('longitude') ? 'has-error' : ''}}">
    <label for="longitude" class="control-label">{{ 'Longitude' }}</label>
    <input class="form-control" name="longitude" type="text" id="longitude" value="{{ isset($dealer->longitude) ? $dealer->longitude : ''}}" >
    {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($dealer->image) ? $dealer->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
