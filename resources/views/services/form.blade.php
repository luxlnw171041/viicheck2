<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($service->name) ? $service->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('distance') ? 'has-error' : ''}}">
    <label for="distance" class="control-label">{{ 'Distance' }}</label>
    <input class="form-control" name="distance" type="text" id="distance" value="{{ isset($service->distance) ? $service->distance : ''}}" >
    {!! $errors->first('distance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'Cost' }}</label>
    <input class="form-control" name="cost" type="text" id="cost" value="{{ isset($service->cost) ? $service->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remake') ? 'has-error' : ''}}">
    <label for="remake" class="control-label">{{ 'Remake' }}</label>
    <textarea class="form-control" rows="5" name="remake" type="textarea" id="remake" >{{ isset($service->remake) ? $service->remake : ''}}</textarea>
    {!! $errors->first('remake', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('car_id') ? 'has-error' : ''}}">
    <label for="car_id" class="control-label">{{ 'Car Id' }}</label>
    <input class="form-control" name="car_id" type="number" id="car_id" value="{{ isset($service->car_id) ? $service->car_id : ''}}" >
    {!! $errors->first('car_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
