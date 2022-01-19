<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Название') }}
            {{ Form::text('title', $book->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Война и Мир']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Год издания') }}
            {{ Form::text('date_published', $book->date_published, ['class' => 'form-control' . ($errors->has('date_published') ? ' is-invalid' : ''), 'placeholder' => '1867-01-01']) }}
            {!! $errors->first('date_published', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</div>
