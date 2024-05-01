<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per averci contattato</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        h1 {
            color: #333;
        }
        
        p {
            color: #666;
            margin-bottom: 20px;
        }
        
        .thank-you {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        .contact-info {
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ciao {{$name}}, grazie per averci contattato!</h1>
        <p class="thank-you">Abbiamo ricevuto la tua richiesta e ti risponderemo il prima possibile.</p>
        <p class="contact-info">Per ulteriori domande, non esitare a contattarci all'indirizzo email supporto@celere.com</p>
        
    </div>
</body>
</html>