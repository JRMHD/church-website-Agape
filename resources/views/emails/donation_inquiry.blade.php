<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Inquiry - {{ config('app.name') }}</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* Header Styles */
        .header {
            background-color: #932729;
            /* Agape red color */
            color: white;
            padding: 25px 30px;
            text-align: center;
        }

        .logo {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .logo img {
            max-width: 180px;
            height: auto;
        }

        .header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        /* Content Styles */
        .content {
            padding: 30px;
        }

        .info-card {
            background-color: #f8f9fa;
            border-left: 4px solid #28a745;
            /* Green accent */
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 16px;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 16px;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            font-weight: 600;
            color: #444;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 16px;
            color: #333;
            word-break: break-word;
        }

        .message-box {
            background-color: #f0f7f0;
            border-radius: 4px;
            padding: 20px;
            border-left: 4px solid #28a745;
        }

        .message-box .info-label {
            margin-bottom: 10px;
        }

        /* Footer Styles */
        .footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 12px;
        }

        .footer p {
            margin: 5px 0;
            color: #ccc;
        }

        .social-links {
            margin: 15px 0;
        }

        .social-links a {
            display: inline-block;
            margin: 0 8px;
            color: white;
            text-decoration: none;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
                border-radius: 0;
            }

            .header,
            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <!-- Logo image -->
                <img src="{{ $message->embed(public_path('assets/img/logo.png')) }}" alt="{{ config('app.name') }} Logo">
            </div>
            <h2>New Donation Inquiry</h2>
        </div>

        <div class="content">
            <div class="info-card">
                <div class="info-item">
                    <span class="info-label">Full Name</span>
                    <div class="info-value">{{ $donation->name }}</div>
                </div>

                <div class="info-item">
                    <span class="info-label">Email Address</span>
                    <div class="info-value">{{ $donation->email }}</div>
                </div>

                <div class="info-item">
                    <span class="info-label">Phone Number</span>
                    <div class="info-value">{{ $donation->phone }}</div>
                </div>

                <div class="info-item">
                    <span class="info-label">Country</span>
                    <div class="info-value">{{ $donation->country }}</div>
                </div>
            </div>

            <div class="message-box">
                <span class="info-label">Message</span>
                <div class="info-value">{{ $donation->message }}</div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Spreading the love of Christ throughout the world</p>
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=61576136251542&_rdc=1&_rdr#">Facebook</a> |
                <a href="#">Instagram</a> |
                <a href="https://www.youtube.com/@agapetempleglobalministryafric">YouTube</a>
            </div>
        </div>
    </div>
</body>

</html>
