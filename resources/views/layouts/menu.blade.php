@if(Auth::user()->type==='staff')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('banner.index') !!}"><i class="fa fa-picture-o"></i><span>Banner</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('article.index') !!}"><i class="fa fa-newspaper-o"></i><span>Articles</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('album.index') !!}"><i class="fa fa-book"></i><span>Album</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('broadcast.index') !!}"><i class="fa fa-bullhorn"></i><span>Broadcast</span></a>
</li>
@endif


