@if ($errors->any())
<div class="alert alert-danger alert-styled-left alert-bordered">
    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
    @foreach ($errors->all() as $messages)
        {!! $messages !!}<br>
    @endforeach
</div>
@endif
@if (session('success'))
<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
    {!! session('success') !!}
</div>
@endif