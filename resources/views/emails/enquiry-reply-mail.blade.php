<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank you for your enquiry</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <p>Dear {{ $data['name'] }},</p>

    <p>Thank you for contacting <strong>BedsAccom</strong>. We’ve received your enquiry regarding property ID <strong>{{ $data['title'] }}</strong>.</p>

    <p>Our team will get back to you soon.</p>

    <p>Best regards,<br>
    The BedsAccom Team<br>
    <a href="https://bedsaccom.co.uk">bedsaccom.co.uk</a></p>
</body>
</html>
