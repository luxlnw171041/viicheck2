<div class="form-group {{ $errors->has('car_model') ? 'has-error' : ''}}">
    <label for="car_model" class="control-label">{{ 'Car Model' }}</label>
    <input class="form-control" name="car_model" type="text" id="car_model" value="{{ isset($car->car_model) ? $car->car_model : ''}}" >
    {!! $errors->first('car_model', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('body_car') ? 'has-error' : ''}}">
    <label for="body_car" class="control-label">{{ 'Body Car' }}</label>
    <input class="form-control" name="body_car" type="text" id="body_car" value="{{ isset($car->body_car) ? $car->body_car : ''}}" >
    {!! $errors->first('body_car', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rg_number') ? 'has-error' : ''}}">
    <label for="rg_number" class="control-label">{{ 'Rg Number' }}</label>
    <input class="form-control" name="rg_number" type="text" id="rg_number" value="{{ isset($car->rg_number) ? $car->rg_number : ''}}" >
    {!! $errors->first('rg_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('car_color') ? 'has-error' : ''}}">
    <label for="car_color" class="control-label">{{ 'Car Color' }}</label>
    <select name="car_color" class="form-control" id="car_color" >
    @foreach (json_decode('{"สีแดง":"\u0e2a\u0e35\u0e41\u0e14\u0e07","สีดำ":"\u0e2a\u0e35\u0e14\u0e33","สีเทา":"\u0e2a\u0e35\u0e40\u0e17\u0e32","สีขาว":"\u0e2a\u0e35\u0e02\u0e32\u0e27"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($car->car_color) && $car->car_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('car_color', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('offtion') ? 'has-error' : ''}}">
    <label for="offtion" class="control-label">{{ 'Offtion' }}</label>
    <input class="form-control" name="offtion" type="text" id="offtion" value="{{ isset($car->offtion) ? $car->offtion : ''}}" >
    {!! $errors->first('offtion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vg_number') ? 'has-error' : ''}}">
    <label for="vg_number" class="control-label">{{ 'Vg Number' }}</label>
    <input class="form-control" name="vg_number" type="text" id="vg_number" value="{{ isset($car->vg_number) ? $car->vg_number : ''}}" >
    {!! $errors->first('vg_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($car->user_id) ? $car->user_id : Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
