@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Album Picture
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <?php
                $form = [
                    'route' => ['album-picture.update', $model->id, 'album_id'=>$id],
                    'files' => true
                ];
                ?>
                   {!! Form::model($model, $form) !!}
                        {{ method_field('PUT') }}
                        @include('backend.album-picture.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection