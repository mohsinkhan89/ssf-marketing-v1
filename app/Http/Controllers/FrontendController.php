<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\ContactRequest;
use App\Models\Review;
use App\Models\Role;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use App\Models\TrustedBrand;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'reviews' => Review::published()->ordered()->get(),
            'trustedBrands' => TrustedBrand::published()->ordered()->get(),
        ]);
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function seo()
    {
        return view('frontend.seo');
    }

    public function ppc()
    {
        return view('frontend.ppc');
    }

    public function emailMarketing()
    {
        return view('frontend.email-marketing');
    }

    public function socialMedia()
    {
        return view('frontend.social-media');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function dashboard(string $page = 'campaigns')
    {
        $allowedPages = ['campaigns', 'users', 'reviews', 'brands', 'contacts', 'reports', 'settings'];

        abort_unless(in_array($page, $allowedPages, true), 404);

        $campaigns = Campaign::with('owner')->latest()->get();
        $totalBudget = $campaigns->sum('budget');
        $totalLeads = $campaigns->sum('leads');
        $averageRoas = round((float) $campaigns->avg('roas'), 1);
        $liveCampaigns = $campaigns->where('status', 'live')->count();

        $assignableRoles = $this->assignableRoles();

        return view('dashboard.index', [
            'page' => $page,
            'users' => User::with('role')->latest()->get(),
            'campaigns' => $campaigns,
            'reviews' => Review::ordered()->get(),
            'trustedBrands' => TrustedBrand::ordered()->get(),
            'contactRequests' => ContactRequest::latest()->get(),
            'roles' => $assignableRoles,
            'siteSetting' => SiteSetting::current(),
            'socialLinks' => SocialLink::ordered()->get(),
            'canManageUsers' => auth()->user()->canManageUsers(),
            'stats' => [
                'budget' => $totalBudget,
                'leads' => $totalLeads,
                'roas' => $averageRoas,
                'live_campaigns' => $liveCampaigns,
            ],
        ]);
    }

    public function storeContactRequest(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'service' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        ContactRequest::create($validated);

        return redirect()->route('contact-us')->with('contact_success', 'Thanks! Your message has been submitted.');
    }

    public function destroyContactRequest(ContactRequest $contactRequest): RedirectResponse
    {
        $this->authorizeManagement();

        $contactRequest->delete();

        return redirect()->to(route('dashboard.page', 'contacts'))->with('success', 'Contact request deleted successfully.');
    }
    public function updateProfile(Request $request): RedirectResponse
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'phone' => ['nullable', 'string', 'max:30'],
            'password' => ['nullable', 'string', 'min:6'],
        ]);

        if (! empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    public function storeUser(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:30'],
            'role_id' => ['required', Rule::in($this->assignableRoles()->pluck('id')->all())],
            'password' => ['required', 'string', 'min:6'],
        ]);

        User::create([
            'role_id' => $validated['role_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password']),
            'email_verified_at' => now(),
        ]);

        return redirect()->to(route('dashboard.page', 'users'))->with('success', 'User contact added successfully.');
    }

    public function updateUser(Request $request, User $user): RedirectResponse
    {
        $this->authorizeManagement();

        abort_if($user->isSuperAdmin() && ! auth()->user()->isSuperAdmin(), 403);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'phone' => ['nullable', 'string', 'max:30'],
            'role_id' => ['required', Rule::in($this->assignableRoles()->pluck('id')->all())],
            'password' => ['nullable', 'string', 'min:6'],
        ]);

        if (! empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->to(route('dashboard.page', 'users'))->with('success', 'User contact updated successfully.');
    }

    public function destroyUser(User $user): RedirectResponse
    {
        $this->authorizeManagement();

        if ($user->is(auth()->user())) {
            return redirect()->to(route('dashboard.page', 'users'))->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return redirect()->to(route('dashboard.page', 'users'))->with('success', 'User contact deleted successfully.');
    }

    public function storeCampaign(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        Campaign::create($this->campaignData($request));

        return redirect()->to(route('dashboard.page', 'campaigns'))->with('success', 'Campaign added successfully.');
    }

    public function updateCampaign(Request $request, Campaign $campaign): RedirectResponse
    {
        $this->authorizeManagement();

        $campaign->update($this->campaignData($request));

        return redirect()->to(route('dashboard.page', 'campaigns'))->with('success', 'Campaign updated successfully.');
    }

    public function destroyCampaign(Campaign $campaign): RedirectResponse
    {
        $this->authorizeManagement();

        $campaign->delete();

        return redirect()->to(route('dashboard.page', 'campaigns'))->with('success', 'Campaign deleted successfully.');
    }

    public function storeReview(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        Review::create($this->reviewData($request));

        return redirect()->to(route('dashboard.page', 'reviews'))->with('success', 'Review added successfully.');
    }

    public function updateReview(Request $request, Review $review): RedirectResponse
    {
        $this->authorizeManagement();

        $review->update($this->reviewData($request));

        return redirect()->to(route('dashboard.page', 'reviews'))->with('success', 'Review updated successfully.');
    }

    public function destroyReview(Review $review): RedirectResponse
    {
        $this->authorizeManagement();

        $review->delete();

        return redirect()->to(route('dashboard.page', 'reviews'))->with('success', 'Review deleted successfully.');
    }
    public function storeTrustedBrand(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        TrustedBrand::create($this->trustedBrandData($request));

        return redirect()->to(route('dashboard.page', 'brands'))->with('success', 'Trusted brand added successfully.');
    }

    public function updateTrustedBrand(Request $request, TrustedBrand $trustedBrand): RedirectResponse
    {
        $this->authorizeManagement();

        $trustedBrand->update($this->trustedBrandData($request, $trustedBrand));

        return redirect()->to(route('dashboard.page', 'brands'))->with('success', 'Trusted brand updated successfully.');
    }

    public function destroyTrustedBrand(TrustedBrand $trustedBrand): RedirectResponse
    {
        $this->authorizeManagement();

        $trustedBrand->delete();

        return redirect()->to(route('dashboard.page', 'brands'))->with('success', 'Trusted brand deleted successfully.');
    }
    public function storeSocialLink(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        SocialLink::create($this->socialLinkData($request));

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', 'Social link added successfully.');
    }

    public function updateSocialLink(Request $request, SocialLink $socialLink): RedirectResponse
    {
        $this->authorizeManagement();

        $socialLink->update($this->socialLinkData($request));

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', 'Social link updated successfully.');
    }

    public function destroySocialLink(SocialLink $socialLink): RedirectResponse
    {
        $this->authorizeManagement();

        $socialLink->delete();

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', 'Social link deleted successfully.');
    }
    public function updateSettings(Request $request): RedirectResponse
    {
        $this->authorizeManagement();

        $validated = $request->validate([
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'address' => ['nullable', 'string', 'max:1000'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'transparent_logo' => ['nullable', 'image', 'max:2048'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'x_url' => ['nullable', 'url', 'max:255'],
            'youtube_url' => ['nullable', 'url', 'max:255'],
        ]);

        $setting = SiteSetting::current();
        $data = [
            'phone' => $validated['phone'] ?? null,
            'email' => $validated['email'] ?? null,
            'address' => $validated['address'] ?? null,
            'linkedin_url' => $validated['linkedin_url'] ?? null,
            'instagram_url' => $validated['instagram_url'] ?? null,
            'facebook_url' => $validated['facebook_url'] ?? null,
            'x_url' => $validated['x_url'] ?? null,
            'youtube_url' => $validated['youtube_url'] ?? null,
        ];

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $this->storeSettingLogo($request->file('logo'), 'logo');
        }

        if ($request->hasFile('transparent_logo')) {
            $data['transparent_logo_path'] = $this->storeSettingLogo($request->file('transparent_logo'), 'transparent-logo');
        }

        $setting->update($data);

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', 'Settings updated successfully.');
    }

    public function updateSettingField(Request $request, string $field): RedirectResponse
    {
        $this->authorizeManagement();

        $rules = [
            'phone' => ['phone' => ['nullable', 'string', 'max:50']],
            'email' => ['email' => ['nullable', 'email', 'max:255']],
            'address' => ['address' => ['nullable', 'string', 'max:1000']],
            'linkedin_url' => ['linkedin_url' => ['nullable', 'url', 'max:255']],
            'instagram_url' => ['instagram_url' => ['nullable', 'url', 'max:255']],
            'facebook_url' => ['facebook_url' => ['nullable', 'url', 'max:255']],
            'x_url' => ['x_url' => ['nullable', 'url', 'max:255']],
            'youtube_url' => ['youtube_url' => ['nullable', 'url', 'max:255']],
        ];

        abort_unless(array_key_exists($field, $rules), 404);

        $validated = $request->validate($rules[$field]);

        SiteSetting::current()->update([
            $field => $validated[$field] ?? null,
        ]);

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', str_replace('_', ' ', ucfirst($field)) . ' updated successfully.');
    }


    public function clearSettingField(string $field): RedirectResponse
    {
        $this->authorizeManagement();

        $allowedFields = [
            'phone',
            'email',
            'address',
            'linkedin_url',
            'instagram_url',
            'facebook_url',
            'x_url',
            'youtube_url',
        ];

        abort_unless(in_array($field, $allowedFields, true), 404);

        SiteSetting::current()->update([$field => null]);

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', str_replace('_', ' ', ucfirst($field)) . ' deleted successfully.');
    }

    public function clearSettingLogo(string $type): RedirectResponse
    {
        $this->authorizeManagement();

        abort_unless(in_array($type, ['logo', 'transparent-logo'], true), 404);

        $column = $type === 'logo' ? 'logo_path' : 'transparent_logo_path';

        SiteSetting::current()->update([$column => null]);

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', ($type === 'logo' ? 'Logo' : 'Transparent logo') . ' deleted successfully.');
    }

    public function updateSettingLogo(Request $request, string $type): RedirectResponse
    {
        $this->authorizeManagement();

        abort_unless(in_array($type, ['logo', 'transparent-logo'], true), 404);

        $field = $type === 'logo' ? 'logo' : 'transparent_logo';
        $column = $type === 'logo' ? 'logo_path' : 'transparent_logo_path';

        $validated = $request->validate([
            $field => ['required', 'image', 'max:2048'],
        ]);

        SiteSetting::current()->update([
            $column => $this->storeSettingLogo($validated[$field], $type),
        ]);

        return redirect()->to(route('dashboard.page', 'settings'))->with('success', ($type === 'logo' ? 'Logo' : 'Transparent logo') . ' updated successfully.');
    }

    private function assignableRoles()
    {
        $query = Role::orderBy('name');

        if (! auth()->user()?->isSuperAdmin()) {
            $query->where('slug', '!=', 'super-admin');
        }

        return $query->get();
    }
    private function reviewData(Request $request): array
    {
        $validated = $request->validate([
            'client_name' => ['required', 'string', 'max:255'],
            'client_role' => ['nullable', 'string', 'max:255'],
            'initials' => ['nullable', 'string', 'max:8'],
            'quote' => ['required', 'string', 'max:1200'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:999999'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $validated['initials'] = strtoupper($validated['initials'] ?: collect(explode(' ', $validated['client_name']))->filter()->map(fn ($part) => substr($part, 0, 1))->take(2)->implode(''));
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['is_published'] = $request->boolean('is_published');

        return $validated;
    }
    private function campaignData(Request $request): array
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'channel' => ['required', 'string', 'max:80'],
            'budget' => ['required', 'numeric', 'min:0'],
            'leads' => ['required', 'integer', 'min:0'],
            'roas' => ['required', 'numeric', 'min:0', 'max:999'],
            'status' => ['required', Rule::in(['planned', 'live', 'review', 'paused'])],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date', 'after_or_equal:starts_at'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $validated['user_id'] = auth()->id();

        return $validated;
    }

    private function socialLinkData(Request $request): array
    {
        $validated = $request->validate([
            'label' => ['required', 'string', 'max:80'],
            'url' => ['required', 'url', 'max:255'],
            'icon_class' => ['required', 'string', 'max:80', 'regex:/^[a-z0-9-]+$/i'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:999999'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['is_published'] = $request->boolean('is_published');

        return $validated;
    }
    private function trustedBrandData(Request $request, ?TrustedBrand $brand = null): array
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'logo' => [$brand ? 'nullable' : 'required', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:999999'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $data = [
            'name' => $validated['name'],
            'website_url' => $validated['website_url'] ?? null,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_published' => $request->boolean('is_published'),
        ];

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $this->storeTrustedBrandLogo($validated['logo']);
        }

        return $data;
    }

    private function storeTrustedBrandLogo(UploadedFile $file): string
    {
        $directory = public_path('frontend/assets/images/brands/uploads');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $filename = 'brand-' . time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'frontend/assets/images/brands/uploads/' . $filename;
    }
    private function storeSettingLogo(UploadedFile $file, string $prefix): string
    {
        $directory = public_path('frontend/assets/images/logo/uploads');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $filename = $prefix . '-' . time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'frontend/assets/images/logo/uploads/' . $filename;
    }

    private function authorizeManagement(): void
    {
        abort_unless(auth()->user()?->canManageUsers(), 403);
    }
}







