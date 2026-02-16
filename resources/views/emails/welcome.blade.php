<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome Email</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f9; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">

                <!-- Email Card -->
                <table width="600" cellpadding="0" cellspacing="0" 
                       style="background:#ffffff; padding:40px; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding-bottom:20px;">
                            <h2 style="margin:0; color:#2c3e50;">
                                Welcome, {{ $user->name }} 🎉
                            </h2>
                        </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                        <td>
                            <hr style="border:none; border-top:1px solid #eee; margin:20px 0;">
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="color:#555; font-size:15px; line-height:1.6;">

                            <p style="margin:0 0 15px;">
                                Thank you for registering with us. We're excited to have you on board!
                            </p>

                            <p style="margin:0 0 15px;">
                                <strong>Your registered email:</strong><br>
                                {{ $user->email }}
                            </p>

                            <p style="margin:0 0 25px;">
                                If you have any questions, feel free to contact our support team.
                            </p>

                            <!-- Button -->
                            <div style="text-align:center; margin-top:20px;">
                                <a href="{{ url('/') }}" 
                                   style="background-color:#4CAF50; 
                                          color:#ffffff; 
                                          padding:12px 25px; 
                                          text-decoration:none; 
                                          border-radius:5px; 
                                          display:inline-block;">
                                    Visit Our Website
                                </a>
                            </div>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding-top:30px; text-align:center; font-size:12px; color:#999;">
                            <p style="margin:0;">
                                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                            </p>
                            <p style="margin:5px 0 0;">
                                This is an automated email. Please do not reply.
                            </p>
                        </td>
                    </tr>

                </table>
                <!-- End Card -->

            </td>
        </tr>
    </table>

</body>
</html>
