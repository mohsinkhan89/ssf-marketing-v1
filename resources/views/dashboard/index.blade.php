<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SSF Marketing performance dashboard">
    <title>Dashboard - SSF Marketing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/dashboard.css') }}">
</head>
<body>
    @php
        $statusLabels = ['planned' => 'Planned', 'live' => 'Live', 'review' => 'Review', 'paused' => 'Paused'];
        $navItems = [
            'campaigns' => ['label' => 'Campaigns', 'icon' => 'fa-bullhorn', 'url' => route('dashboard.page', 'campaigns')],
            'users' => ['label' => 'Users', 'icon' => 'fa-users', 'url' => route('dashboard.page', 'users')],
            'reviews' => ['label' => 'Reviews', 'icon' => 'fa-star', 'url' => route('dashboard.page', 'reviews')],
            'brands' => ['label' => 'Brands', 'icon' => 'fa-building', 'url' => route('dashboard.page', 'brands')],
            'contacts' => ['label' => 'Contacts', 'icon' => 'fa-inbox', 'url' => route('dashboard.page', 'contacts')],
            'reports' => ['label' => 'Reports', 'icon' => 'fa-chart-simple', 'url' => route('dashboard.page', 'reports')],
            'settings' => ['label' => 'Settings', 'icon' => 'fa-gear', 'url' => route('dashboard.page', 'settings')],
        ];
    @endphp

    <div class="dashboard-shell">
        <aside class="dashboard-sidebar" aria-label="Dashboard navigation">
            <a class="dashboard-brand" href="{{ route('home') }}" aria-label="SSF Marketing home">
                <img src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing">
                <span>SSF Marketing</span>
            </a>

            <nav class="dashboard-nav">
                @foreach ($navItems as $key => $item)
                    <a class="{{ $page === $key ? 'active' : '' }}" href="{{ $item['url'] }}"><i class="fa-solid {{ $item['icon'] }}"></i><span>{{ $item['label'] }}</span></a>
                @endforeach
                <a href="{{ route('home') }}"><i class="fa-solid fa-globe"></i><span>Website</span></a>
            </nav>

            <div class="sidebar-summary">
                <span>Workspace</span>
                <strong>{{ ucfirst($page) }}</strong>
                <div class="progress-line" aria-hidden="true"><i style="width: 82%"></i></div>
                <small>{{ $canManageUsers ? 'Admin controls enabled' : 'Readonly access' }}</small>
            </div>
        </aside>

        <main class="dashboard-main">
            <header class="dashboard-topbar">
                <div class="topbar-title">
                    <span>{{ auth()->user()->role?->name ?? 'Team' }} dashboard</span>
                    <h1>{{ $navItems[$page]['label'] ?? 'Dashboard' }}</h1>
                </div>

                <div class="topbar-actions">
                    <a class="icon-button" href="{{ route('home') }}" aria-label="Open website" title="Open website"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    <button class="icon-button has-dot" type="button" aria-label="Notifications" title="Notifications"><i class="fa-regular fa-bell"></i></button>
                    <div class="profile-menu">
                        <button class="user-chip profile-trigger" type="button" aria-haspopup="true" aria-expanded="false">
                            <span>{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                            <strong>{{ auth()->user()->name }}</strong>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="profile-dropdown" role="menu">
                            <div class="profile-dropdown-head">
                                <span>{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                                <div><strong>{{ auth()->user()->name }}</strong><small>{{ auth()->user()->email }}</small></div>
                            </div>
                            <button type="button" data-modal-open="profile-edit" role="menuitem"><i class="fa-solid fa-user-pen"></i><span>Edit profile</span></button>
                            <button type="button" data-modal-open="profile-edit" role="menuitem"><i class="fa-solid fa-key"></i><span>Update password</span></button>
                            <a href="{{ route('dashboard.page', 'settings') }}" role="menuitem"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
                            <form class="logout-form dropdown-logout" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" role="menuitem"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            @if (session('success'))
                <div class="flash-message success" role="alert" data-auto-dismiss><i class="fa-solid fa-circle-check"></i>{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="flash-message error" role="alert" data-auto-dismiss><i class="fa-solid fa-circle-exclamation"></i>{{ session('error') }}</div>
            @endif
            @if ($errors->any())
                <div class="flash-message error" role="alert" data-auto-dismiss><i class="fa-solid fa-circle-exclamation"></i>{{ $errors->first() }}</div>
            @endif

            <section class="page-stage" data-page-stage>
                @if ($page === 'campaigns')
                    <section class="page-head">
                        <div><span class="section-label">Campaigns</span><h2>Campaign Management</h2><p>Database-backed campaign records with modal add and edit workflows.</p></div>

    @if ($canManageUsers)<button class="primary-action" type="button" data-modal-open="campaign-create">Add campaign <i class="fa-solid fa-plus"></i></button>@endif
                    </section>

                    <article class="dashboard-panel table-panel full-panel">
                        <div class="panel-header"><div><span class="section-label">Campaign table</span><h2>Live Campaign Records</h2></div></div>
                        <div class="table-wrap">
                            <table>
                                <thead><tr><th>Campaign</th><th>Channel</th><th>Budget</th><th>Leads</th><th>ROAS</th><th>Status</th>@if ($canManageUsers)<th>Actions</th>@endif</tr></thead>
                                <tbody>
                                    @foreach ($campaigns as $campaign)
                                        <tr class="animated-row">
                                            <td><strong>{{ $campaign->name }}</strong><span>{{ $campaign->notes ?: 'No notes added' }}</span></td>
                                            <td>{{ $campaign->channel }}</td>
                                            <td>${{ number_format($campaign->budget, 0) }}</td>
                                            <td>{{ number_format($campaign->leads) }}</td>
                                            <td>{{ number_format($campaign->roas, 1) }}x</td>
                                            <td><mark class="status {{ $campaign->status }}">{{ $statusLabels[$campaign->status] ?? ucfirst($campaign->status) }}</mark></td>


    @if ($canManageUsers)
                                                <td><div class="row-actions">
                                                    <button class="icon-action" type="button" data-modal-open="campaign-edit-{{ $campaign->id }}" aria-label="Edit {{ $campaign->name }}"><i class="fa-solid fa-pen"></i></button>
                                                    <form method="POST" action="{{ route('dashboard.campaigns.destroy', $campaign) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete {{ $campaign->name }}"><i class="fa-solid fa-trash"></i></button></form>
                                                </div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </article>
                @elseif ($page === 'users')
                    <section class="page-head">
                        <div><span class="section-label">Users</span><h2>User Management</h2><p>User records from the users table. Admins manage; authors view only.</p></div>

    @if ($canManageUsers)<button class="primary-action" type="button" data-modal-open="user-create">Add user <i class="fa-solid fa-plus"></i></button>@endif
                    </section>

                    <article class="dashboard-panel table-panel full-panel">
                        <div class="panel-header"><div><span class="section-label">Users table</span><h2>Email & Phone Directory</h2></div><mark class="access-badge">{{ $canManageUsers ? 'CRUD enabled' : 'View only' }}</mark></div>
                        <div class="table-wrap">
                            <table>
                                <thead><tr><th>User</th><th>Email address</th><th>Phone number</th><th>Role</th>@if ($canManageUsers)<th>Actions</th>@endif</tr></thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="animated-row">
                                            <td><strong>{{ $user->name }}</strong><span>ID #{{ $user->id }}</span></td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone ?: 'Not added' }}</td>
                                            <td><mark class="role-badge">{{ $user->role?->name ?? 'No role' }}</mark></td>

    @if ($canManageUsers)
                                                <td><div class="row-actions">
                                                    <button class="icon-action" type="button" data-modal-open="user-edit-{{ $user->id }}" aria-label="Edit {{ $user->name }}"><i class="fa-solid fa-pen"></i></button>
                                                    @unless ($user->is(auth()->user()))<form method="POST" action="{{ route('dashboard.users.destroy', $user) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete {{ $user->name }}"><i class="fa-solid fa-trash"></i></button></form>@endunless
                                                </div></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </article>
                @elseif ($page === 'reviews')
                    <section class="page-head">
                        <div><span class="section-label">Reviews</span><h2>Client Reviews</h2><p>Manage testimonials shown on the website slider.</p></div>
                        @if ($canManageUsers)<button class="primary-action" type="button" data-modal-open="review-create">Add review <i class="fa-solid fa-plus"></i></button>@endif
                    </section>

                    <article class="dashboard-panel table-panel full-panel">
                        <div class="panel-header"><div><span class="section-label">Reviews table</span><h2>Website Testimonials</h2></div><mark class="access-badge">{{ $reviews->where('is_published', true)->count() }} published</mark></div>
                        <div class="table-wrap">
                            <table>
                                <thead><tr><th>Client</th><th>Review</th><th>Rating</th><th>Status</th><th>Order</th>@if ($canManageUsers)<th>Actions</th>@endif</tr></thead>
                                <tbody>
                                    @forelse ($reviews as $review)
                                        <tr class="animated-row">
                                            <td><strong>{{ $review->client_name }}</strong><span>{{ $review->client_role ?: 'No role added' }}</span></td>
                                            <td><strong>{{ Str::limit($review->quote, 88) }}</strong><span>{{ $review->initials ?: 'No initials' }}</span></td>
                                            <td><mark class="status live">@for ($star = 0; $star < $review->rating; $star++)<i class="fa-solid fa-star"></i>@endfor</mark></td>
                                            <td><mark class="status {{ $review->is_published ? 'live' : 'paused' }}">{{ $review->is_published ? 'Published' : 'Hidden' }}</mark></td>
                                            <td>{{ $review->sort_order }}</td>
                                            @if ($canManageUsers)
                                                <td><div class="row-actions">
                                                    <button class="icon-action" type="button" data-modal-open="review-edit-{{ $review->id }}" aria-label="Edit review by {{ $review->client_name }}"><i class="fa-solid fa-pen"></i></button>
                                                    <form method="POST" action="{{ route('dashboard.reviews.destroy', $review) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete review by {{ $review->client_name }}"><i class="fa-solid fa-trash"></i></button></form>
                                                </div></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr><td colspan="{{ $canManageUsers ? 6 : 5 }}">No reviews added yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </article>
                @elseif ($page === 'brands')
                    <section class="page-head">
                        <div><span class="section-label">Brands</span><h2>Trusted Brands</h2><p>Manage logos shown in the "Trusted by growing brands" strip on the website.</p></div>
                        @if ($canManageUsers)<button class="primary-action" type="button" data-modal-open="brand-create">Add brand <i class="fa-solid fa-plus"></i></button>@endif
                    </section>

                    <article class="dashboard-panel table-panel full-panel">
                        <div class="panel-header"><div><span class="section-label">Brand table</span><h2>Website Logo Strip</h2></div><mark class="access-badge">{{ $trustedBrands->where('is_published', true)->count() }} published</mark></div>
                        <div class="table-wrap">
                            <table>
                                <thead><tr><th>Brand</th><th>Logo</th><th>Website</th><th>Status</th><th>Order</th>@if ($canManageUsers)<th>Actions</th>@endif</tr></thead>
                                <tbody>
                                    @forelse ($trustedBrands as $brand)
                                        <tr class="animated-row">
                                            <td><strong>{{ $brand->name }}</strong><span>ID #{{ $brand->id }}</span></td>
                                            <td><div class="brand-logo-cell"><img src="{{ url($brand->logo_path) }}" alt="{{ $brand->name }} logo"></div></td>
                                            <td>
                                                @if ($brand->website_url)
                                                    <a class="table-link" href="{{ $brand->website_url }}" target="_blank" rel="noopener">Open website</a>
                                                @else
                                                    <span>Not added</span>
                                                @endif
                                            </td>
                                            <td><mark class="status {{ $brand->is_published ? 'live' : 'paused' }}">{{ $brand->is_published ? 'Published' : 'Hidden' }}</mark></td>
                                            <td>{{ $brand->sort_order }}</td>
                                            @if ($canManageUsers)
                                                <td><div class="row-actions">
                                                    <button class="icon-action" type="button" data-modal-open="brand-edit-{{ $brand->id }}" aria-label="Edit {{ $brand->name }}"><i class="fa-solid fa-pen"></i></button>
                                                    <form method="POST" action="{{ route('dashboard.brands.destroy', $brand) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete {{ $brand->name }}"><i class="fa-solid fa-trash"></i></button></form>
                                                </div></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr><td colspan="{{ $canManageUsers ? 6 : 5 }}">No trusted brands added yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </article>
                @elseif ($page === 'contacts')
                    <section class="page-head"><div><span class="section-label">Contacts</span><h2>Contact Requests</h2><p>Messages submitted from the website contact form.</p></div></section>
                    <article class="dashboard-panel table-panel full-panel">
                        <div class="panel-header"><div><span class="section-label">Inbox</span><h2>Website Leads</h2></div><mark class="access-badge">{{ $contactRequests->count() }} requests</mark></div>
                        <div class="table-wrap">
                            <table>
                                <thead><tr><th>Contact</th><th>Service</th><th>Message</th><th>Submitted</th>@if ($canManageUsers)<th>Actions</th>@endif</tr></thead>
                                <tbody>
                                    @forelse ($contactRequests as $requestItem)
                                        <tr class="animated-row">
                                            <td><strong>{{ $requestItem->name }}</strong><span>{{ $requestItem->email }}{{ $requestItem->phone ? ' / ' . $requestItem->phone : '' }}{{ $requestItem->company ? ' / ' . $requestItem->company : '' }}</span></td>
                                            <td><mark class="role-badge">{{ $requestItem->service }}</mark></td>
                                            <td><strong>{{ Str::limit($requestItem->message, 110) }}</strong></td>
                                            <td>{{ $requestItem->created_at->format('M d, Y h:i A') }}</td>
                                            @if ($canManageUsers)
                                                <td><div class="row-actions"><form method="POST" action="{{ route('dashboard.contact-requests.destroy', $requestItem) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete request from {{ $requestItem->name }}"><i class="fa-solid fa-trash"></i></button></form></div></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr><td colspan="{{ $canManageUsers ? 5 : 4 }}">No contact requests yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </article>
                @elseif ($page === 'reports')
                    <section class="page-head"><div><span class="section-label">Reports</span><h2>Channel Reports</h2><p>Report cards generated from campaign records.</p></div></section>
                    <section class="report-grid">
                        @foreach ($campaigns->groupBy('channel') as $channel => $items)
                            <article class="dashboard-panel report-card"><span>{{ $channel }}</span><strong>{{ number_format($items->sum('leads')) }}</strong><small>${{ number_format($items->sum('budget'), 0) }} budget</small></article>
                        @endforeach
                    </section>
                @elseif ($page === 'settings')
                    <section class="page-head compact-settings-head"><div><span class="section-label">Settings</span><h2>Website Settings</h2><p>Compact controls for contact details, footer social icons, and brand logos.</p></div></section>
                    <section class="settings-compact-grid">
                        <article class="dashboard-panel compact-settings-card contact-card">
                            <div class="compact-card-head"><div><span class="section-label">Contact</span><h2>Contact Information</h2></div></div>
                            <form class="dashboard-form compact-contact-form" method="POST" action="{{ route('dashboard.settings.update') }}" enctype="multipart/form-data">
                                @csrf
                                <label><span>Phone</span><input type="text" name="phone" value="{{ old('phone', $siteSetting->phone) }}" placeholder="+44 7123 456789" inputmode="tel" maxlength="15" data-phone-mask="uk" @disabled(! $canManageUsers)></label>
                                <label><span>Email</span><input type="email" name="email" value="{{ old('email', $siteSetting->email) }}" placeholder="hello@ssfmarketing.com" @disabled(! $canManageUsers)></label>
                                <label class="full-span"><span>Address</span><textarea name="address" rows="3" placeholder="Your office address" @disabled(! $canManageUsers)>{{ old('address', $siteSetting->address) }}</textarea></label>
                                @if ($canManageUsers)<button class="primary-action form-submit full-span" type="submit"><i class="fa-solid fa-floppy-disk"></i><span>Save contact info</span></button>@endif
                            </form>
                        </article>

                        <article class="dashboard-panel compact-settings-card social-card">
                            <div class="compact-card-head"><div><span class="section-label">Social</span><h2>Social Media Icons</h2></div>@if ($canManageUsers)<button class="primary-action compact-add-btn" type="button" data-modal-open="social-link-create"><i class="fa-solid fa-plus"></i><span>Add</span></button>@endif</div>
                            <div class="social-link-list">
                                @forelse ($socialLinks as $socialLink)
                                    <div class="social-link-item">
                                        <span class="social-link-icon"><i class="fa-brands {{ $socialLink->icon_class }}"></i></span>
                                        <div><strong>{{ $socialLink->label }}</strong><small>{{ $socialLink->url }}</small></div>
                                        <mark class="status {{ $socialLink->is_published ? 'live' : 'paused' }}">{{ $socialLink->is_published ? 'Show' : 'Hide' }}</mark>
                                        @if ($canManageUsers)
                                            <div class="row-actions">
                                                <button class="icon-action" type="button" data-modal-open="social-link-edit-{{ $socialLink->id }}" aria-label="Edit {{ $socialLink->label }}"><i class="fa-solid fa-pen"></i></button>
                                                <form method="POST" action="{{ route('dashboard.social-links.destroy', $socialLink) }}">@csrf @method('DELETE')<button class="danger-button" type="submit" data-confirm-delete aria-label="Delete {{ $socialLink->label }}"><i class="fa-solid fa-trash"></i></button></form>
                                            </div>
                                        @endif
                                    </div>
                                @empty
                                    <div class="empty-state-line"><i class="fa-solid fa-link"></i><span>No social links added yet.</span></div>
                                @endforelse
                            </div>
                        </article>

                        <article class="dashboard-panel compact-settings-card logos-card">
                            <div class="compact-card-head"><div><span class="section-label">Branding</span><h2>Logo Manager</h2></div></div>
                            <div class="compact-logo-grid">
                                <div class="compact-logo-unit">
                                    <div class="logo-preview light-preview">@if ($siteSetting->logo_path)<img src="{{ url($siteSetting->logo_path) }}" alt="Main logo preview">@else<strong>No main logo</strong>@endif</div>
                                    <form class="dashboard-form compact-logo-form" method="POST" action="{{ route('dashboard.settings.logo.update', 'logo') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label><span>Main logo</span><input type="file" name="logo" accept="image/*" @disabled(! $canManageUsers)></label>
                                        @if ($canManageUsers)<button class="primary-action" type="submit"><i class="fa-solid fa-upload"></i></button>@endif
                                    </form>
                                    @if ($canManageUsers && $siteSetting->logo_path)<form method="POST" action="{{ route('dashboard.settings.logo.clear', 'logo') }}">@csrf @method('DELETE')<button class="danger-button text-danger-button" type="submit" data-confirm-delete><i class="fa-solid fa-trash"></i><span>Delete main logo</span></button></form>@endif
                                </div>
                                <div class="compact-logo-unit dark-card">
                                    <div class="logo-preview dark-preview">@if ($siteSetting->transparent_logo_path)<img src="{{ url($siteSetting->transparent_logo_path) }}" alt="Transparent logo preview">@else<strong>No transparent logo</strong>@endif</div>
                                    <form class="dashboard-form compact-logo-form" method="POST" action="{{ route('dashboard.settings.logo.update', 'transparent-logo') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label><span>Transparent logo</span><input type="file" name="transparent_logo" accept="image/*" @disabled(! $canManageUsers)></label>
                                        @if ($canManageUsers)<button class="primary-action" type="submit"><i class="fa-solid fa-upload"></i></button>@endif
                                    </form>
                                    @if ($canManageUsers && $siteSetting->transparent_logo_path)<form method="POST" action="{{ route('dashboard.settings.logo.clear', 'transparent-logo') }}">@csrf @method('DELETE')<button class="danger-button text-danger-button" type="submit" data-confirm-delete><i class="fa-solid fa-trash"></i><span>Delete transparent logo</span></button></form>@endif
                                </div>
                            </div>
                        </article>
                    </section>
                @endif
                                </div>
            </section>
        </main>
    </div>

    <div class="modal-backdrop" data-modal-backdrop hidden></div>

    <section class="dashboard-modal" id="profile-edit" role="dialog" aria-modal="true" aria-labelledby="profile-edit-title" hidden>
        <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Account</span><h2 id="profile-edit-title">Edit Profile</h2></div>
            <form class="dashboard-form" method="POST" action="{{ route('dashboard.profile.update') }}">
                @csrf
                @method('PUT')
                <label><span>Name</span><input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required></label>
                <label><span>Email address</span><input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required></label>
                <label><span>Phone number</span><input type="text" name="phone" value="{{ old('phone', auth()->user()->phone) }}" placeholder="+44 7123 456789" inputmode="tel" maxlength="15" data-phone-mask="uk"></label>
                <label><span>New password</span><input type="password" name="password" placeholder="Leave blank to keep current password"></label>
                <button class="primary-action form-submit" type="submit">Update profile <i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </div>
    </section>

    @if ($canManageUsers)
        <section class="dashboard-modal" id="campaign-create" role="dialog" aria-modal="true" aria-labelledby="campaign-create-title" hidden>
            <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">New campaign</span><h2 id="campaign-create-title">Add Campaign</h2></div>
                @include('frontend.inc.dashboard-campaign-form', ['action' => route('dashboard.campaigns.store'), 'method' => null, 'campaign' => null, 'statusLabels' => $statusLabels])
            </div>
        </section>

        @foreach ($campaigns as $campaign)
            <section class="dashboard-modal" id="campaign-edit-{{ $campaign->id }}" role="dialog" aria-modal="true" aria-labelledby="campaign-edit-title-{{ $campaign->id }}" hidden>
                <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Edit campaign</span><h2 id="campaign-edit-title-{{ $campaign->id }}">{{ $campaign->name }}</h2></div>
                    @include('frontend.inc.dashboard-campaign-form', ['action' => route('dashboard.campaigns.update', $campaign), 'method' => 'PUT', 'campaign' => $campaign, 'statusLabels' => $statusLabels])
                </div>
            </section>
        @endforeach


        <section class="dashboard-modal" id="review-create" role="dialog" aria-modal="true" aria-labelledby="review-create-title" hidden>
            <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">New review</span><h2 id="review-create-title">Add Review</h2></div>
                @include('frontend.inc.dashboard-review-form', ['action' => route('dashboard.reviews.store'), 'method' => null, 'reviewRecord' => null])
            </div>
        </section>

        @foreach ($reviews as $review)
            <section class="dashboard-modal" id="review-edit-{{ $review->id }}" role="dialog" aria-modal="true" aria-labelledby="review-edit-title-{{ $review->id }}" hidden>
                <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Edit review</span><h2 id="review-edit-title-{{ $review->id }}">{{ $review->client_name }}</h2></div>
                    @include('frontend.inc.dashboard-review-form', ['action' => route('dashboard.reviews.update', $review), 'method' => 'PUT', 'reviewRecord' => $review])
                </div>
            </section>
        @endforeach

        <section class="dashboard-modal" id="brand-create" role="dialog" aria-modal="true" aria-labelledby="brand-create-title" hidden>
            <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">New brand</span><h2 id="brand-create-title">Add Brand</h2></div>
                @include('frontend.inc.dashboard-brand-form', ['action' => route('dashboard.brands.store'), 'method' => null, 'brandRecord' => null])
            </div>
        </section>

        @foreach ($trustedBrands as $brand)
            <section class="dashboard-modal" id="brand-edit-{{ $brand->id }}" role="dialog" aria-modal="true" aria-labelledby="brand-edit-title-{{ $brand->id }}" hidden>
                <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Edit brand</span><h2 id="brand-edit-title-{{ $brand->id }}">{{ $brand->name }}</h2></div>
                    @include('frontend.inc.dashboard-brand-form', ['action' => route('dashboard.brands.update', $brand), 'method' => 'PUT', 'brandRecord' => $brand])
                </div>
            </section>
        @endforeach

        <section class="dashboard-modal" id="social-link-create" role="dialog" aria-modal="true" aria-labelledby="social-link-create-title" hidden>
            <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">New social link</span><h2 id="social-link-create-title">Add Social Link</h2></div>
                @include('frontend.inc.dashboard-social-link-form', ['action' => route('dashboard.social-links.store'), 'method' => null, 'socialLinkRecord' => null])
            </div>
        </section>

        @foreach ($socialLinks as $socialLink)
            <section class="dashboard-modal" id="social-link-edit-{{ $socialLink->id }}" role="dialog" aria-modal="true" aria-labelledby="social-link-edit-title-{{ $socialLink->id }}" hidden>
                <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Edit social link</span><h2 id="social-link-edit-title-{{ $socialLink->id }}">{{ $socialLink->label }}</h2></div>
                    @include('frontend.inc.dashboard-social-link-form', ['action' => route('dashboard.social-links.update', $socialLink), 'method' => 'PUT', 'socialLinkRecord' => $socialLink])
                </div>
            </section>
        @endforeach
        <section class="dashboard-modal" id="user-create" role="dialog" aria-modal="true" aria-labelledby="user-create-title" hidden>
            <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">New user</span><h2 id="user-create-title">Add User</h2></div>
                @include('frontend.inc.dashboard-user-form', ['action' => route('dashboard.users.store'), 'method' => null, 'userRecord' => null, 'roles' => $roles])
            </div>
        </section>

        @foreach ($users as $user)
            <section class="dashboard-modal" id="user-edit-{{ $user->id }}" role="dialog" aria-modal="true" aria-labelledby="user-edit-title-{{ $user->id }}" hidden>
                <div class="modal-card"><button class="modal-close" type="button" data-modal-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button><div class="modal-head"><span class="section-label">Edit user</span><h2 id="user-edit-title-{{ $user->id }}">{{ $user->name }}</h2></div>
                    @include('frontend.inc.dashboard-user-form', ['action' => route('dashboard.users.update', $user), 'method' => 'PUT', 'userRecord' => $user, 'roles' => $roles])
                </div>
            </section>
        @endforeach
    @endif

    <script src="{{ url('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>








