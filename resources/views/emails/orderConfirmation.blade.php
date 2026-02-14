<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - {{ $reference }}</title>
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
    </style>
</head>
<body>
    <table class="container" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="header">
                <h1> <b>THANK YOU FOR YOUR ORDER!</b> </h1>
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
        <tr>
            <td class="content">
                <p>Hi {{ ucfirst($name) }},</p>
                <h2>ORDER CONFIRMATION FROM SHAWOD!</h2>
                <p>We've received your order <b> {{ $package }} </b> and will send a follow-up email soon.<br>
                  This message simply serves as a confirmation of your order.</br><br>

                  This email contains important information regarding your recent Shawod order.<br>
                  Please save it for reference, if you would like to cancel the status of your order or make any
                  changes to it, please email support@shawod.co.za along with your reference.

                  </p>
        
                <h3>Order Summary</h3>
                <table width="100%" cellpadding="0" cellspacing="0">
        
                    <tr class="item-row">
                        <td style="padding: 10px 0;"><b>Reference:</b></td>
                        <td style="padding: 10px 0; text-align: right;">{{ $reference }}</td>
                    </tr>
              
                    <tr>
                        <td style="padding: 10px 0;"><b>Product:</b></td>
                        <td style="padding: 10px 0; text-align: right;">{{ $package }}</td>
                    </tr>
                
                    <tr style="font-weight: bold;">
                        <td style="padding: 10px 0;"><b>Total Price:</b></td>
                        <td style="padding: 10px 0; text-align: right;">R {{ $price }}</td>
                    </tr>
                </table><br>
                <span>Placed on date: {{ $created_at->format('d/m/Y') }}</span><br><p>

                    <p>
                        We will send you an email once your order has been processed<br><br>
                        Remember that Shawod will always be here to provide you with Websites, Domains, Hosting, SEO and excellent Customer
                        service.<br><br>
                        If there is anything more we can do to help, please don't hesitate to email us
                   </p>

                <h3>Thank you</h3>
                <p> **Do not reply to this automated email</p>
            </td>
        </tr>
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
