<?php 
 var_dump($_GET);
 $message_content = $_GET['message'];
 $message_content_length = strlen($message_content);

 $censored_word = $_GET['censorship'];
?>



<style> 
    body{
        padding: 100px 50px;
    }

    h1{
        font-size: 32px;
        color: rgb(125, 0, 0);
    }

    .message-content{
        font-size: 24px;
    }

    .original-message-length{
        font-weight: bold;
        font-size: 18px;
    }


</style>

<h1>Messaggio Ricevuto</h1>

<p class="message-content">
   <?php echo $message_content ?>
</p>
<p>
    Lunghezza Nessaggio: <span class="original-message-length"> <?php echo $message_content_length ?> </span>  caratteri.
</p>


<p>
    <?php echo $censored_word ?>
</p>