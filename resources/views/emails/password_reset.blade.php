<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .header {
            background-color: #f4f4f4;
            text-align: center;
            color: rgb(73,197,239)
        }
        .content {
            padding: 20px;
        }
        .item-row {
            border-bottom: 1px solid #ddd;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 0px;
            text-align: center;
            font-size: 12px;
        }
        .button{
            background-color: #33ccff;
            border: none;
            color:white;
            padding:12px 24px;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            border-radius: 4px;
            font-weight:bold;
        }
    </style>
</head>
<body style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#333;">
    <table class="container" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="header">
                <h1> <b>Reset Password!</b> </h1>
   <svg class="waves" xmlns="http://www.w3.org/2000/svg" style="margin-top: -40px" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="#e4f5fc" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="#bfe8f9" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="#9fd8ef" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#33ccff" />
</g>
</svg>
            </td>
        </tr>
            <td class="content">
                <p>Hi {{ ucfirst($name) }},</p>
                <p>You are receving this email because we received a password reset for your account.
                 If you did not request this, no further action is required. 
                  </p>

                  <div style='margin:30px 0' align="center">
                     <a href={{ $resetUrl }} class="button" style="color:#fffff">Reset Password</a>
                  </div>
              
                  <p>This password reset link will expire in <strong>60 minutes </strong>.</p>

                  <p style="font-size:14px; color:#777">
                    If you're having trouble clicking the "Reset Password" Button, 
                    copy and paste  the URL below into your web browser: <br><br>
                    <span style="world-break:breal-all"> {{ $resetUrl }}</span>
                  </p>

                <h3>Regards, </h3>
                <p>{{ config('app.name') }} Team</p><br>
                <p> <small><b>**Do not reply to this automated email<b><small></p>
            </td>
      
        <tr>
            <td class="footer">
                <p>Questions? Contact our support team at support@shawod.co.za </p>
                <p>
                    <a href="https://www.facebook.com/shawodza">
                        <img src="{{ $message->embed(public_path('assets/thumbnails/fblg.png')) }}" width="30px" style=" margin-left: 15%;
                             cursor: pointer;">
                    </a>

                    <a href="https://twitter.com/shawodweb">
                        <img src="{{  $message->embed(public_path('assets/thumbnails/twlg.png')) }}" width="30px" style="cursor: pointer">
                    </a>

                    <img src="{{  $message->embed(public_path('assets/thumbnails/logoSb.png')) }}" style="float: right; margin-top: -50px" />
                </p>
            
            </td>
        </tr>
    </table>
</body>
</html>
