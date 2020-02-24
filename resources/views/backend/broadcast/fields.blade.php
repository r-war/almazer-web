
 {{ csrf_field() }}
 <!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', 'Picture:') !!}
    {!! Form::file('picture', ['class' => 'form-control']) !!}
    
    @if($model->picture != '')
    <p class="help-block"><a href='{{asset("/uploads/$model->picture") }}' target="_blank">{!! $model->picture !!}</a></p>
    @endif
    <p class="help-block">aspect ratio 2:1, ex: 700x350px</p>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url_link', 'URL Link:') !!}
    {!! Form::text('url_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('short_message', 'Short Message:') !!}
    {!! Form::textArea('short_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('broadcast.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>