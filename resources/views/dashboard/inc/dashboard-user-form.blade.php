<form class="dashboard-form" method="POST" action="{{ $action }}">
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Name</span><input type="text" name="name" value="{{ old('name', $userRecord?->name) }}" required></label>
    <label><span>Email address</span><input type="email" name="email" value="{{ old('email', $userRecord?->email) }}" required></label>
    <label><span>Phone number</span><input type="text" name="phone" value="{{ old('phone', $userRecord?->phone) }}" placeholder="+44 7123 456789" inputmode="tel" maxlength="15" data-phone-mask="uk"></label>
    <label><span>Role</span><select name="role_id" required>
        @foreach ($roles as $role)
            <option value="{{ $role->id }}" @selected((int) old('role_id', $userRecord?->role_id ?? $roles->first()?->id) === $role->id)>{{ $role->name }}</option>
        @endforeach
    </select></label>
    <label><span>{{ $method ? 'New password' : 'Password' }}</span><input type="password" name="password" @if (! $method) required @endif></label>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save user' : 'Add user' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>