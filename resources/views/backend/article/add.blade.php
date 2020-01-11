@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <?php
                $form = [
                    'route' => 'article.store',
                    'files' => true
                ];
                ?>
                   {!! Form::model($model, $form) !!}

                        @include('backend.article.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection