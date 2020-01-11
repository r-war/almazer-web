@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Album
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <?php
                $form = [
                    'route' => ['album.update', $model->id,],
                    'files' => true
                ];
                ?>
                   {!! Form::model($model, $form) !!}
                        {{ method_field('PUT') }}
                        @include('backend.album.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection