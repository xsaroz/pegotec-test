@extends('dashboard.layout.master')

@section('content')
<div class="spacer"></div>
@include('dashboard.menu._header_buttons')
<div class="spacer"></div>
<div class="row">
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Page Title</th>
            <th>Created By</th>
            <th>Created At</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
            <tr>
                <td>{{ $menu->title }}</td>
                <td>{{ $menu->page->title }}</td>
                <td>{{ optional($menu->createdBy)->name }}</td>
                <td>{{ $menu->created_at->diffForHumans() }}</td>
                <td>
                    <a href="/page/{{ $menu->page->slug }}" class="btn btn-info btn-sm" target="_blank">
                        View Page
                    </a>
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $menu->id }}').submit();">
                        Delete
                    </a>

                    <form id="delete-form-{{ $menu->id }}" action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-none">
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