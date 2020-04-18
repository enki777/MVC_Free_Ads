<div class="row">
    <div class="col-sm-2">
        {{ Form::label('name', 'Nom :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::text('name',NULL,['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nom']) }}
            @error('name')
                <div class="alert alert-danger col-sm-4">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('email', 'Email :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::email('email',NULL,['class'=>'form-control', 'id'=>'email', 'placeholder'=>'email']) }}
            @error('email')
                <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('currentPassword', 'Votre mot de passe :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::password('currentPassword',NULL,['class'=>'form-control', 'id'=>'currentPassword', 'placeholder'=>'mot de passe']) }}
            @error('currentPassword')
                <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('password', 'Nouveau Mot de passe :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::password('password',NULL,['class'=>'form-control', 'id'=>'password', 'placeholder'=>'Votre nouveau password']) }}
            @error('password')
                <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('passwordCheck', 'Confirmer nouveau Mot de passe :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            {{ Form::password('passwordCheck',NULL,['class'=>'form-control', 'id'=>'passwordCheck', 'placeholder'=>'Confirmer nouveau mot de passe']) }}
            @error('passwordCheck')
                <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
<div class="form-group">
    {{ Form::button('save', ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>