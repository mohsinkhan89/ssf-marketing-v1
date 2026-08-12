<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks for contacting us</title>
</head>
<body style="margin:0;background:#eef5f7;font-family:Arial,Helvetica,sans-serif;color:#101820;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#eef5f7;padding:34px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:640px;border-collapse:separate;border-spacing:0;overflow:hidden;border-radius:14px;background:#ffffff;box-shadow:0 24px 70px rgba(6,47,63,.16);">
                    <tr>
                        <td align="center" style="background:#062f3f;padding:32px 24px 24px;">
                            <table role="presentation" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                                <tr>
                                    <td align="center" style="background:#ffffff;border-radius:12px;padding:10px 18px;">
                                        <img src="{{ url($siteSetting?->logo_path ?? 'frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing" style="display:block;max-width:156px;height:auto;margin:0 auto;">
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:18px 0 0;color:#5ed1e8;font-size:12px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;">Your message is in</p>
                            <h1 style="margin:8px 0 0;color:#ffffff;font-size:28px;line-height:1.2;font-weight:800;">Hi {{ $contactRequest->name }},</h1>
                        </td>
                    </tr>
                    <tr><td style="height:5px;background:#0f6b8f;"></td></tr>
                    <tr>
                        <td style="padding:30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f7fbfc;border:1px solid #dde7eb;border-radius:12px;">
                                <tr>
                                    <td style="padding:22px;">
                                        <h2 style="margin:0 0 12px;color:#101820;font-size:22px;line-height:1.25;font-weight:800;">Thanks for contacting SSF Marketing.</h2>
                                        <p style="margin:0 0 14px;color:#33424c;font-size:15px;line-height:1.75;">We have received your message and our team will review it shortly.</p>
                                        <p style="margin:0;color:#667684;font-size:15px;line-height:1.75;">We will get back to you as soon as possible.</p>
                                    </td>
                                </tr>
                            </table>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-top:18px;background:#062f3f;border-radius:12px;">
                                <tr>
                                    <td style="padding:18px 20px;">
                                        <p style="margin:0;color:#ffffff;font-size:14px;line-height:1.7;">SSF Marketing turns ambitious business goals into focused digital strategies, memorable creative, and measurable growth.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="background:#f7fbfc;border-top:1px solid #dde7eb;padding:18px 24px;color:#667684;font-size:12px;">
                            {{ $siteSetting?->email ?? 'hello@ssfmarketing.com' }} @if($siteSetting?->phone) &bull; {{ $siteSetting->phone }} @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
