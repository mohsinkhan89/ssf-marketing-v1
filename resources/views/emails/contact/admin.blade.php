<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Request</title>
</head>
<body style="margin:0;background:#eef5f7;font-family:Arial,Helvetica,sans-serif;color:#101820;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#eef5f7;padding:34px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px;border-collapse:separate;border-spacing:0;overflow:hidden;border-radius:14px;background:#ffffff;box-shadow:0 24px 70px rgba(6,47,63,.16);">
                    <tr>
                        <td align="center" style="background:#062f3f;padding:30px 24px 22px;">
                            <table role="presentation" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                                <tr>
                                    <td align="center" style="background:#ffffff;border-radius:12px;padding:10px 18px;">
                                        <img src="{{ url($siteSetting?->logo_path ?? 'frontend/assets/images/logo/logo.png') }}" alt="SSF Marketing" style="display:block;max-width:156px;height:auto;margin:0 auto;">
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:18px 0 0;color:#5ed1e8;font-size:12px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;">New website enquiry</p>
                            <h1 style="margin:8px 0 0;color:#ffffff;font-size:28px;line-height:1.2;font-weight:800;">Customer details received</h1>
                        </td>
                    </tr>
                    <tr><td style="height:5px;background:#0f6b8f;"></td></tr>
                    <tr>
                        <td style="padding:28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:separate;border-spacing:0 10px;">
                                <tr>
                                    <td style="width:48%;padding:14px 16px;background:#f7fbfc;border:1px solid #dde7eb;border-radius:10px;vertical-align:top;">
                                        <p style="margin:0 0 5px;color:#667684;font-size:12px;font-weight:700;text-transform:uppercase;">Name</p>
                                        <p style="margin:0;color:#101820;font-size:16px;font-weight:800;">{{ $contactRequest->name }}</p>
                                    </td>
                                    <td style="width:4%;font-size:0;">&nbsp;</td>
                                    <td style="width:48%;padding:14px 16px;background:#f7fbfc;border:1px solid #dde7eb;border-radius:10px;vertical-align:top;">
                                        <p style="margin:0 0 5px;color:#667684;font-size:12px;font-weight:700;text-transform:uppercase;">Service</p>
                                        <p style="margin:0;color:#101820;font-size:16px;font-weight:800;">{{ $contactRequest->service }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:48%;padding:14px 16px;background:#ffffff;border:1px solid #dde7eb;border-radius:10px;vertical-align:top;">
                                        <p style="margin:0 0 5px;color:#667684;font-size:12px;font-weight:700;text-transform:uppercase;">Email</p>
                                        <p style="margin:0;color:#0f6b8f;font-size:15px;font-weight:800;word-break:break-word;">{{ $contactRequest->email }}</p>
                                    </td>
                                    <td style="width:4%;font-size:0;">&nbsp;</td>
                                    <td style="width:48%;padding:14px 16px;background:#ffffff;border:1px solid #dde7eb;border-radius:10px;vertical-align:top;">
                                        <p style="margin:0 0 5px;color:#667684;font-size:12px;font-weight:700;text-transform:uppercase;">Phone</p>
                                        <p style="margin:0;color:#101820;font-size:15px;font-weight:800;">{{ $contactRequest->phone ?: 'Not added' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="padding:14px 16px;background:#ffffff;border:1px solid #dde7eb;border-radius:10px;">
                                        <p style="margin:0 0 5px;color:#667684;font-size:12px;font-weight:700;text-transform:uppercase;">Company</p>
                                        <p style="margin:0;color:#101820;font-size:15px;font-weight:800;">{{ $contactRequest->company ?: 'Not added' }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="margin-top:12px;background:#062f3f;border-radius:12px;">
                                <tr>
                                    <td style="padding:20px;">
                                        <p style="margin:0 0 8px;color:#5ed1e8;font-size:12px;font-weight:700;text-transform:uppercase;">Customer message</p>
                                        <p style="margin:0;color:#ffffff;font-size:15px;line-height:1.7;">{!! nl2br(e($contactRequest->message)) !!}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:18px 0 0;color:#667684;font-size:13px;line-height:1.6;">This message was submitted from the SSF Marketing contact form.</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="background:#f7fbfc;border-top:1px solid #dde7eb;padding:18px 24px;color:#667684;font-size:12px;">
                            SSF Marketing &bull; {{ $siteSetting?->email ?? 'hello@ssfmarketing.com' }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
