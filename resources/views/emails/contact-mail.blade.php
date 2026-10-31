<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Us Enquiry Received</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f8fa; margin: 0; padding: 40px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); overflow: hidden;">
        <div style="background-color: #0073e6; color: #ffffff; padding: 20px 30px;">
            <h2 style="margin: 0; font-size: 22px;">ðŸ“© New Contact Us Enquiry</h2>
        </div>

        <div style="padding: 30px;">
            <p style="font-size: 15px; color: #333;">A new contact enquiry has been submitted through your website. Details are below:</p>

            <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                <tr>
                    <td style="padding: 10px; border: 1px solid #eee; background: #f9f9f9; width: 35%; font-weight: bold;">Name</td>
                    <td style="padding: 10px; border: 1px solid #eee;">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #eee; background: #f9f9f9; font-weight: bold;">Phone</td>
                    <td style="padding: 10px; border: 1px solid #eee;">{{ $data['phone'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #eee; background: #f9f9f9; font-weight: bold;">Email</td>
                    <td style="padding: 10px; border: 1px solid #eee;">{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #eee; background: #f9f9f9; font-weight: bold;">Message</td>
                    <td style="padding: 10px; border: 1px solid #eee; white-space: pre-line;">{{ $data['message'] }}</td>
                </tr>
            </table>

            <p style="margin-top: 25px; font-size: 13px; color: #666;">
                <em>Sent automatically from your website contact form.</em>
            </p>
        </div>

        <div style="background-color: #f0f3f7; padding: 15px 30px; text-align: center; font-size: 13px; color: #777;">
            &copy; {{ date('Y') }} Beds Accom. All rights reserved.
        </div>
    </div>
</body>
</html>
