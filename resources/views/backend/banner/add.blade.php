@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Banner
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <?php
                $form = [
                    'route' => 'banner.store',
                    'files' => true
                ];
                ?>
                   {!! Form::model($model, $form) !!}

                        @include('backend.banner.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection