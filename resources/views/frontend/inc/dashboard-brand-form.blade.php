<form class="dashboard-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Brand name</span><input type="text" name="name" value="{{ old('name', $brandRecord?->name) }}" required></label>
    <label><span>Website URL</span><input type="url" name="website_url" value="{{ old('website_url', $brandRecord?->website_url) }}" placeholder="https://example.com"></label>
    @if ($brandRecord?->logo_path)
        <div class="logo-preview light-preview brand-form-preview">
            <img src="{{ url($brandRecord->logo_path) }}" alt="{{ $brandRecord->name }} logo preview">
        </div>
    @endif
    <label><span>Logo image</span><input type="file" name="logo" accept="image/*" @required(! $brandRecord)></label>
    <div class="form-row">
        <label><span>Sort order</span><input type="number" name="sort_order" min="0" value="{{ old('sort_order', $brandRecord?->sort_order ?? 0) }}"></label>
        <label class="switch-field"><span>Published</span><input type="hidden" name="is_published" value="0"><input type="checkbox" name="is_published" value="1" @checked((bool) old('is_published', $brandRecord?->is_published ?? true))><b></b></label>
    </div>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save brand' : 'Add brand' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>
