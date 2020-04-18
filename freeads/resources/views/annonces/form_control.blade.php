<div class="row">
    <div class="col-sm-2">
        {{ Form::label('titre', 'Titre :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {{ Form::text('title',NULL,['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Titre']) }}
            @error('title')
                    <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
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
            @error('body')
                    <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-2">
    {{  Form::label('prix', 'Prix :') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {{ Form::number('prix',NULL,['class'=>'form-control', 'id'=>'prix', 'placeholder'=>'Prix', 'step'=>'0.01', 'min'=> '0']) }}
            @error('prix')
                    <div class="alert alert-danger col-sm-6">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::button('save', ['class'=>'btn btn-md btn-success','style'=>'padding-left: 18px;padding-right: 18px', 'type'=>'submit']) }}
</div>