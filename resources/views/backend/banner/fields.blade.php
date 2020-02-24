
 {{ csrf_field() }}
 <!-- Index Field -->
<div class="form-group col-sm-12">
    {!! Form::label('index', 'Index:') !!}
    {!! Form::text('index', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-12">
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
<div class="form-group col-sm-6">
    {!! Form::label('url_link_2', 'URL Link 2:') !!}
    {!! Form::text('url_link_2', null, ['class' => 'form-control']) !!}
    <p class="help-block">for mobile link</p>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('banner.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    } );
</script>