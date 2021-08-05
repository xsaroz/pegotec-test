@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.page._header_buttons')
<div class="spacer"></div>
<div class="row">
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Created By</th>
            <th>Created At</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ substr($page->description, 0, 100) }}</td>
                <td>{{ optional($page->createdBy)->name }}</td>
                <td>{{ $page->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $page->id }}').submit();">
                        Delete
                    </a>

                    <form id="delete-form-{{ $page->id }}" action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection