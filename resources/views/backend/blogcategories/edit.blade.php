@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.blogcategories.management') . ' | ' . trans('labels.backend.blogcategories.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blogcategories.management') }}
        <small>{{ trans('labels.backend.blogcategories.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($blogcategory, ['route' => ['admin.blogcategories.update', $blogcategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blogcategories.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.includes.partials.blogcategories-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.blogcategories.form")
                    <div class="edit-form-btn">
                    {{ link_to_route('admin.blogcategories.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
{{ Form::close() }}
@endsection