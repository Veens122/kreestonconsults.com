
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Website Enquiry</title>
</head>

<body style="margin:0; padding:0; background-color:#f3f5f8; font-family:Arial, Helvetica, sans-serif; color:#333333;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f5f8; padding:35px 12px;">
        <tr>
            <td align="center">

                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="max-width:650px; background-color:#ffffff; border-radius:10px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color:#102747; padding:35px 25px;">

                            <h1 style="margin:0; color:#ffffff; font-size:25px; letter-spacing:1px;">
                                KREESTON
                            </h1>

                            <p style="margin:7px 0 0; color:#C5A15B; font-size:13px; letter-spacing:2px;">
                                CONSULTING SERVICES
                            </p>

                            <div style="width:55px; height:3px; background-color:#C5A15B; margin:20px auto 0;"></div>

                        </td>
                    </tr>

                    <!-- Main heading -->
                    <tr>
                        <td style="padding:35px 35px 15px;">

                            <p style="margin:0 0 10px; color:#C5A15B; font-size:12px; font-weight:bold; letter-spacing:1.5px;">
                                WEBSITE NOTIFICATION
                            </p>

                            <h2 style="margin:0; color:#102747; font-size:24px;">
                                New Website Enquiry
                            </h2>

                            <p style="margin:15px 0 0; color:#666666; font-size:14px; line-height:1.7;">
                                You have received a new message through the contact form on your website.
                                Here are the details of the enquiry.
                            </p>

                        </td>
                    </tr>

                    <!-- Customer details -->
                    <tr>
                        <td style="padding:15px 35px;">

                            <h3 style="margin:0 0 15px; color:#102747; font-size:16px;">
                                Customer Information
                            </h3>

                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="background-color:#f7f8fa; border-radius:7px;">

                                <tr>
                                    <td style="padding:14px 16px; border-bottom:1px solid #e7e9ed; width:35%;">
                                        <strong style="font-size:13px; color:#777777;">Full Name</strong>
                                    </td>
                                    <td style="padding:14px 16px; border-bottom:1px solid #e7e9ed;">
                                        <span style="font-size:14px; color:#102747;">
                                            {{ $contact['your-name'] }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:14px 16px; border-bottom:1px solid #e7e9ed;">
                                        <strong style="font-size:13px; color:#777777;">Email Address</strong>
                                    </td>
                                    <td style="padding:14px 16px; border-bottom:1px solid #e7e9ed;">
                                        <a href="mailto:{{ $contact['your-email'] }}"
                                            style="font-size:14px; color:#102747; text-decoration:none;">
                                            {{ $contact['your-email'] }}
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:14px 16px;">
                                        <strong style="font-size:13px; color:#777777;">Phone Number</strong>
                                    </td>
                                    <td style="padding:14px 16px;">
                                        <a href="tel:{{ $contact['your-phone'] }}"
                                            style="font-size:14px; color:#102747; text-decoration:none;">
                                            {{ $contact['your-phone'] }}
                                        </a>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="padding:15px 35px 30px;">

                            <h3 style="margin:0 0 15px; color:#102747; font-size:16px;">
                                Customer Message
                            </h3>

                            <div style="background-color:#fffaf0; border-left:4px solid #C5A15B; padding:20px; border-radius:4px;">

                                <p style="margin:0; color:#444444; font-size:14px; line-height:1.8; white-space:pre-line;">
                                    {{ $contact['your-message'] }}
                                </p>

                            </div>

                            <p style="margin:20px 0 0; color:#999999; font-size:12px;">
                                Received on {{ now()->format('d M Y, h:i A') }}
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color:#102747; padding:25px 20px;">

                            <p style="margin:0; color:#ffffff; font-size:14px; font-weight:bold;">
                                Kreeston Consulting Services
                            </p>

                            <p style="margin:9px 0; color:#d5dce5; font-size:12px; line-height:1.7;">
                                Your Trusted Partner in Business, Management &amp; Financial Solutions.
                            </p>

                            <p style="margin:15px 0 0; color:#C5A15B; font-size:12px;">
                                Simplifying Business. Supporting Growth. Delivering Solutions.
                            </p>

                            <p style="margin:18px 0 0; color:#d5dce5; font-size:11px;">
                                kreestonconsults.com
                            </p>

                        </td>
                    </tr>

                </table>

                <p style="margin:18px 0 0; color:#999999; font-size:11px;">
                    This is an automated notification from your website.
                </p>

            </td>
        </tr>
    </table>

</body>
</html>
