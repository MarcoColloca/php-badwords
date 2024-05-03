<?php 
    $textarea_label = "Inserisci qui il tuo messaggio!";    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        max-width: 800px;
        margin: 0 auto;
    }

    label{
        display: block;
        font-size: 24px;
    }

    textarea{
        min-width: 400px;
        max-width: 400px;
        min-height: 125px;
    }

    .button-container{
        display: flex;
        justify-content: center;
        width: 400px; 
    }

    .main-content{
        padding: 100px 0;
    }

    .main-content__form--message{
        margin-bottom: 20px;
    }


</style>








<body>
    <main class="main-content">
        <div class="container">
            <form action="./server.php" method="GET">
                <div class="main-content__form--message">
                    <label for="message"><?php echo $textarea_label ?></label>
                   
                    <textarea name="message" id="message" placeholder="Scrivi qui il tuo messaggio."> </textarea>
                </div>
                
                
                <div class="button-container">
                    <button>Invia!</button>
                </div>
            </form>
        </div>

    </main>
</body>
</html>