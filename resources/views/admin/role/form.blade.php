<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $role->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="permissions" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <select multiple="multiple" class="form-control" name="permissions[]" type="text" id="permissions">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        @foreach($permissions as $permission)
        <option value="{{$permission->name}}">{{$permission->name}}</option>
        @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
