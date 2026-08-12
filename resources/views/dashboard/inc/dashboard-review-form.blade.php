<form class="dashboard-form" method="POST" action="{{ $action }}">
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Client name</span><input type="text" name="client_name" value="{{ old('client_name', $reviewRecord?->client_name) }}" required></label>
    <label><span>Client role</span><input type="text" name="client_role" value="{{ old('client_role', $reviewRecord?->client_role) }}" placeholder="CEO, Company"></label>
    <div class="form-row">
        <label><span>Initials</span><input type="text" name="initials" value="{{ old('initials', $reviewRecord?->initials) }}" maxlength="8" placeholder="JD"></label>
        <label><span>Rating</span><select name="rating" required>
            @for ($rating = 5; $rating >= 1; $rating--)
                <option value="{{ $rating }}" @selected((int) old('rating', $reviewRecord?->rating ?? 5) === $rating)>{{ $rating }} star{{ $rating > 1 ? 's' : '' }}</option>
            @endfor
        </select></label>
    </div>
    <label><span>Review</span><textarea name="quote" rows="5" required>{{ old('quote', $reviewRecord?->quote) }}</textarea></label>
    <div class="form-row">
        <label><span>Sort order</span><input type="number" name="sort_order" min="0" value="{{ old('sort_order', $reviewRecord?->sort_order ?? 0) }}"></label>
        <label class="switch-field"><span>Published</span><input type="hidden" name="is_published" value="0"><input type="checkbox" name="is_published" value="1" @checked((bool) old('is_published', $reviewRecord?->is_published ?? true))><b></b></label>
    </div>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save review' : 'Add review' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>
