<?php 
 //var_dump($_GET);
 $message_content = $_GET['message'];
 $message_content_length = strlen($message_content);

 $censored_word = $_GET['censorship'];
 $censored_message = str_ireplace($censored_word, '***', $message_content, $censored_words);
 $censored_message_length = strlen($censored_message);
?>



<style> 
    body{
        padding: 100px 50px;
    }

    h2{
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

<h2>Messaggio Ricevuto</h2>

<p class="message-content">
   <?php echo $message_content ?>
</p>
<p>
    Lunghezza Nessaggio: <span class="original-message-length"> <?php echo $message_content_length ?> </span>  caratteri.
</p>



<h2>Messaggio Censurato</h2>
<p class="message-content">
   <?php echo $censored_message ?>
</p>
<p>
    Lunghezza Nessaggio: <span class="original-message-length"> <?php echo $censored_message_length ?> </span>  caratteri.
</p>
<p>
    Parole censurate: <?php echo $censored_words ?>
</p>