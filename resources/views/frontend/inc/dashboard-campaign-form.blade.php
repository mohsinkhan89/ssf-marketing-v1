<form class="dashboard-form" method="POST" action="{{ $action }}">
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Name</span><input type="text" name="name" value="{{ old('name', $campaign?->name) }}" required></label>
    <label><span>Channel</span><input type="text" name="channel" value="{{ old('channel', $campaign?->channel) }}" placeholder="Google Ads" required></label>
    <div class="form-row">
        <label><span>Budget</span><input type="number" name="budget" min="0" step="0.01" value="{{ old('budget', $campaign?->budget) }}" required></label>
        <label><span>Leads</span><input type="number" name="leads" min="0" value="{{ old('leads', $campaign?->leads) }}" required></label>
    </div>
    <div class="form-row">
        <label><span>ROAS</span><input type="number" name="roas" min="0" step="0.1" value="{{ old('roas', $campaign?->roas) }}" required></label>
        <label><span>Status</span><select name="status" required>@foreach ($statusLabels as $value => $label)<option value="{{ $value }}" @selected(old('status', $campaign?->status ?? 'planned') === $value)>{{ $label }}</option>@endforeach</select></label>
    </div>
    <div class="form-row">
        <label><span>Start date</span><input type="date" name="starts_at" value="{{ old('starts_at', $campaign?->starts_at?->format('Y-m-d')) }}"></label>
        <label><span>End date</span><input type="date" name="ends_at" value="{{ old('ends_at', $campaign?->ends_at?->format('Y-m-d')) }}"></label>
    </div>
    <label><span>Notes</span><textarea name="notes" rows="3">{{ old('notes', $campaign?->notes) }}</textarea></label>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save campaign' : 'Add campaign' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>