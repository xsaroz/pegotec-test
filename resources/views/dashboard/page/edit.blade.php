@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.page._header_buttons')
<div class="spacer"></div>
<div class="card">
    <div class="card-body">
        {{ Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'patch']) }}
        @include('dashboard.page._form', ['btnName' => 'Update'])
        {{ Form::close() }}
    </div>
</div>
@endsection

@section('page-title')
- Edit Page
@endsection