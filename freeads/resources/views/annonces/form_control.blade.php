<div class="row">
    <div class="col-sm-2">
        {{ Form::label('titre', 'Titre :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {{ Form::text('title',NULL,['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Titre']) }}
            {{ $errors->first('title', '<p class="form-control">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
    {{  Form::label('contenu', 'Contenu :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {{ Form::text('body',NULL,['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Contenu']) }}
            {{ $errors->first('body', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-2">
    {{  Form::label('prix', 'Prix :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {{ Form::number('prix',NULL,['class'=>'form-control', 'id'=>'prix', 'placeholder'=>'Prix', 'step'=>'0.01']) }}
            {{ $errors->first('prix', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::button('save', ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>