<form class="dashboard-form" method="POST" action="{{ $action }}">
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Name</span><input type="text" name="label" value="{{ old('label', $socialLinkRecord?->label) }}" placeholder="LinkedIn" required></label>
    <label><span>Profile URL</span><input type="url" name="url" value="{{ old('url', $socialLinkRecord?->url) }}" placeholder="https://linkedin.com/company/your-brand" required></label>
    <div class="form-row">
        <label><span>Font Awesome icon</span><input type="text" name="icon_class" value="{{ old('icon_class', $socialLinkRecord?->icon_class ?? 'fa-link') }}" placeholder="fa-linkedin-in" required></label>
        <label><span>Sort order</span><input type="number" name="sort_order" min="0" value="{{ old('sort_order', $socialLinkRecord?->sort_order ?? 0) }}"></label>
    </div>
    <label class="switch-field"><span>Published</span><input type="hidden" name="is_published" value="0"><input type="checkbox" name="is_published" value="1" @checked((bool) old('is_published', $socialLinkRecord?->is_published ?? true))><b></b></label>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save social link' : 'Add social link' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>
