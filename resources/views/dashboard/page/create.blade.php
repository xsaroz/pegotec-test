@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.page._header_buttons')
<div class="spacer"></div>
<div class="card">
    <div class="card-body">
        {{ Form::open(['route' => 'pages.store', 'method' => 'post']) }}
        @include('dashboard.page._form', ['btnName' => 'Create'])
        {{ Form::close() }}
    </div>
</div>
@endsection

@section('page-title')
- Create Page
@endsection