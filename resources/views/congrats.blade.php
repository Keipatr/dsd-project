<!-- resources/views/emails/registration-congratulations.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Congratulations</title>
    <style>
        /* Reset CSS */
        body, p, h1 {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333333;
        }

        /* Main Container */
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e4e4e4;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        /* Heading */
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Content */
        .content {
            margin-bottom: 20px;
        }

        /* Button */
        .button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations!</h1>
        <div class="content">
            <p>Dear {{ $user->name }},</p>
            <p>Thank you for registering with our website. We are delighted to have you as a member of our community.</p>
            <p>Feel free to explore our website and enjoy all the features and benefits we offer.</p>
            <p>If you have any questions or need assistance, please don't hesitate to contact our support team.</p>
        </div>
        <p>Best regards,</p>
        <p>Your Website Team</p>
    </div>
</body>
</html>
