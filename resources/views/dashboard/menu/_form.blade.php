<div class="form-group">
    {{ Form::label('Title') }}
    {{ Form::text('title', null, ['placeholder' => 'Enter Title', 'class' => 'form-control']) }}

    @error('title')
        <strong class="text-danger">{{ $message }}</strong>
    @enderror
</div>

<div class="form-group">
    {{ Form::label('Select Page') }}
    {{ Form::select('page_id', $pages, null, ['class' => 'form-control', 'placeholder' => '--select a page--']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-secondary float-right">{{ $btnName }}</button>
</div>
