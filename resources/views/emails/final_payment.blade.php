<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINAL PROJECT MILESTONE</title>
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
        .block {
    margin-top: 10px;
	width: 504px;
	padding: 2.5rem;
	background: #ffffff;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
		0px 1px 1px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	display: block;
}
    </style>
</head>
<body style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#333;">
    <table class="container" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="header">
                <h1> <b>FINAL PROJECT MILESTONE!</b> </h1>
                <span align="center" style="color: rgb(73,197,239);">WE ARE READY TO DEPLOY IT</span>
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
                <p>Hi <b>{{ ucfirst($name)}}</b>,</p>
                <p>I have some exciting news your website is officially complete and ready to be deploy to Live Server. 
                    As we reach this final stage, I require the remaining <b> 50% balance R {{ $halfPrice }}</b> as per our initial agreement
                    this final payment is due prior to the official launch and handover of all assets.<br><br>
                     <span style="font-weight: bold; font-size: 20px">Please use the following details for deposit</span><br>
                  </p>

                  <div class="block">
                    <div style="margin-left: 5%;">
                     <h2 ><u>Capitec Bank</u> <img src="{{ $message->embed(public_path('assets/images/capitec.png')) }}" width="35" /></h2>
                     <p><b>Name : </b> NB NGOBESE</p> 
                     <p><b>Account Number : </b> 14 83 62790</p> 
                     <p><b>Refrence : </b>  {{ $reference }} </p> 
                     <hr>
                     <h2 ><u>Standard Bank</u> <img src="{{ $message->embed(public_path('assets/images/standardB.jpeg')) }}" width="25" /></h2>
                     <p><b>Name : </b> NB NGOBESE</p> 
                     <p><b>Account Number : </b> 10 16 909 324 5</p> 
                     <p><b>Reference : </b> {{ $reference }} </p> 
                    </div>
                     <h2 align='center'>Due Now R{{ $halfPrice }} </h2>
                     <div align='center'>
                        <small align='center'>{{ $package }} total price <b>R {{ $totalPrice }}</b></small>
                      </div>
                </div>
                  
                <table width="100%" cellpadding="0" cellspacing="0">
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
