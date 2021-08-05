@extends('front.layout.master')

@section('content')
<h1>{{ $page->title }}</h1>

<hr>
<h2>{{ $page->page_excerp }}</h2>

<hr>
<h3>{{ $page->description }}</h3>

<hr>
<h3>{{ $page->page_content }}</h3>
@endsection

@section('page-title')
 - {{ $page->title }}
@endsection