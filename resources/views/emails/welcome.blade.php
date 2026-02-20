<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WElCOME TO SHAWOD</title>
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
                <h1> <b>WElCOME TO SHAWOD!</b> </h1>
                <span align="center" style="color: rgb(73,197,239);">WHERE YOUR IMAGINATION BECOME REALITY</span>
   <svg class="waves" xmlns="http://www.w3.org/2000/svg" style="margin-top: -30px" xmlns:xlink="http://www.w3.org/1999/xlink"
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
        <tr>
            <td class="content">
                <p>Dear <b>{{ ucfirst($name) }}</b></p>
                <p>A very warm welcome to you from the Shawod Team! We are thrilled that you selected <b>Shawod</b> for your Website development.
                    This email contains all information that you will need to begin accessing your project as well as communicating with us.
                     Please retain this email for your records, Thank you for signing up with us.<br><br>
                     <span style="font-weight: bold; font-size: 20px"> You can now login to your client area using the details below</span><br>
                  </p>
                <h3><u>Login Details</u></h3>
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr class="item-row">
                        <td style="padding: 10px 0;"><b>Login link:</b></td>
                        <td style="padding: 10px 0; text-align: right;">
                            <a href="https://portal.shawod.co.za">https://portal.shawod.co.za</a></span>
                        </td>
                    </tr>

                    <tr class="item-row">
                        <td style="padding: 10px 0;"><b>Email:</b></td>
                        <td style="padding: 10px 0; text-align: right;">
                            {{ $email }}
                        </td>
                    </tr>
              
                    <tr>
                        <td style="padding: 10px 0;"><b>Password:</b></td>
                        <td style="padding: 10px 0; text-align: right;">{{ $password }}</td>
                    </tr>
                
                    <tr style="font-weight: bold;">
                        <td style="padding: 10px 0;"><b>Order reference:</b></td>
                        <td style="padding: 10px 0; text-align: right;">{{ $reference }}</td>
                    </tr>
                </table><br>

                <div align="center">
                    <a href="https://portal.shawod.co.za" class="button" style="color:#fffff">Login</a>
                 </div>

                <h3>Thank you</h3>
                <p> **Do not reply to this automated email</p>
            </td>
        </tr>
        <tr>
            <td class="footer">
                <p>Questions? Contact our support team at support@shawod.co.za </p>
                <a href='https://shawod.co.za' target="_blank">www.shawod.co.za</a>
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
