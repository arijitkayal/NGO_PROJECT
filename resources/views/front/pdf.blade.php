<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgment Letter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .letterhead {
            background-color: #004080;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .letter-content {
            margin: 20px;
        }

        p {
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="letterhead">
       <h1>MOHIARY KALPATARU SEBA SAMITI</h1>
        <p>Mohiary Rash Math,Andul-Mouri,Howrah-711302,West Bengal, IND</p>
        <p>Phone: +91 9159669599 | Email: mahiarikalpatarusebasamiti@gmail.com</p>
    </div>

    <div class="letter-content">
        <h2>Acknowledgment Letter</h2>
        <p>Date: {{$res->date}}</p>
        <p>To,<br><strong>{{$res->d_name}}</strong><br>{{$res->address}} <br>{{$res->state}},{{$res->district}} <br>Pin: {{$res->pin}}</p>


        <p>Dear <strong>{{$res->d_name}}</strong>,</p>

        <p>Thank you for your contribution and support to <strong>{{$res->name}}</strong> run by MOHIARY KALPATARU SEBA SAMITI</p>

        <p>MOHIARY KALPATARU SEBA SAMITI acknowledges the receipt of your donation of Rs. <strong>{{$res->amount}}</strong>  ,recieved through bank transfer on {{$res->date}}.Your support goes a long way in helping us to achieve our goals.</p>

        <p>No good or services, in whole or in part , were exchanged for this contribution.Therefore, the full value of your contribution is deductible for income tax purposes.</p>

        <p>Please retain this letter for your tax records.</p>

        <p>Sincerely,<br><strong>AMAL KHAN</strong><br>President <br>MOHIARY KALPATARU SEBA SAMITI</p>
    </div>
</body>
</html>
