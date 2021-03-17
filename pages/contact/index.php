<?php 
 $person = "yeet";



?>
<html>
    <head>
        <link rel='stylesheet' href='scriptes/css.css'>
        <script src='scriptes/js.js'></script>

        <meta charset="UTF-8">
        <meta name="description" content="Road trip Inschrijven">
        <meta name="keywords" content="road, trip, 50, plus, SUV">
        <meta name="author" content="Jarod Iking">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <button id='back' type='submit'>Back</button>

        <div class='reg-container'>
            <form method="post" action='send.php'>
                <div class='inputField'>
                    Name
                    <br>
                    <input type="text" name='name' placeholder='enter name' required>
                </div>
                <div class='inputField'>
                    Email
                    <br>
                    <input type="email" name='email' placeholder='enter email' required>
                </div>
                <div class='inputField'>
                    Message
                    <br>
                    <textarea name="message" id="" cols="30" rows="10" placeholder='enter message' required></textarea>
                </div>
                <input type="hidden" name='hidden'>
                <button id='send' type='submit'>Send Email</button>
            </form>
        </div>



    </body>
</html>