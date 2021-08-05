@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.menu._header_buttons')
<div class="spacer"></div>
<div class="card">
    <div class="card-body">
        {{ Form::model($menu, ['route' => ['menus.update', $menu->id], 'method' => 'patch']) }}
        @include('dashboard.menu._form', ['btnName' => 'Update'])
        {{ Form::close() }}
    </div>
</div>
@endsection

@section('page-title')
- Edit Menu
@endsection