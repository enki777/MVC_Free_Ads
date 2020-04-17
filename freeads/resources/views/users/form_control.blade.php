<div class="row">
    <div class="col-sm-2">
        {{ Form::label('name', 'Nom :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::text('name',NULL,['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nom']) }}
            {{ $errors->first('name', '<p class="form-control">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('email', 'Email :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {{ Form::email('email',NULL,['class'=>'form-control', 'id'=>'email', 'placeholder'=>'email']) }}
            {{ $errors->first('email', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('password', 'Mot de passe :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {{ Form::password('password',NULL,['class'=>'form-control', 'id'=>'password', 'placeholder'=>'password']) }}
            {{ $errors->first('password', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::button('save', ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>