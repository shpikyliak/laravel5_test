<div class="form-group">
    {!! Form::label('name','Name:')  !!}
    {!! Form::text('name', null, ['class'=>'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::label('text','Text:')  !!}
    {!! Form::text('text', null, ['class'=>'form-control'])  !!}
</div>
<div class="form-group">
    {!! Form::submit($buttonName,['class' => 'btn btn-success form-control'])  !!}

</div>
