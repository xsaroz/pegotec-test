<div class="form-group">
    {{ Form::label('Title') }}
    {{ Form::text('title', null, ['placeholder' => 'Enter Title', 'class' => 'form-control']) }}

    @error('title')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('Page Slug') }}
    {{ Form::text('slug', null, ['placeholder' => 'Enter Page Slug', 'class' => 'form-control']) }}
    @error('slug')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('Small Description') }}
    {{ Form::textarea('page_excerp', null, ['class' => 'form-control', 'rows' => 2]) }}
    @error('page_excerp')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    @error('description')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('Content') }}
    {{ Form::textarea('page_content', null, ['class' => 'form-control']) }}
    @error('page_content')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-secondary float-right">{{ $btnName }}</button>
</div>

@section('after-scripts')
<script type="text/javascript" src="/js/page.js"></script>
@endsection

