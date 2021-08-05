@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.menu._header_buttons')
<div class="spacer"></div>
<div class="card">
    <div class="card-body">
        {{ Form::open(['route' => 'menus.store', 'method' => 'post']) }}
        @include('dashboard.menu._form', ['btnName' => 'Create'])
        {{ Form::close() }}
    </div>
</div>
@endsection

@section('page-title')
- Create Menu
@endsection