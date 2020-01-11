
 {{ csrf_field() }}
 <!-- Index Field -->
<div class="form-group col-sm-6">
    {!! Form::label('index', 'Index:') !!}
    {!! Form::text('index', null, ['class' => 'form-control', ]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Cover Field -->
<div class="form-group col-sm-12">
    {!! Form::label('picture', 'Cover:') !!}
    {!! Form::file('picture', ['class' => 'form-control']) !!}
    @if($model->picture != '')
<p class="help-block"><a href='{{url("/uploads/$model->picture") }}' target="_blank">{!! $model->picture !!}</a></p>
    @endif
</div>


<!-- Cover Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'id'=>'editor1']) !!}
</div>

 --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('album.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>