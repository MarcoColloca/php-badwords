<?php 
 var_dump($_GET);
 $message_content = $_GET['message'];
 $censored_word = $_GET['censorship']
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


</style>

<h1>Messaggio Ricevuto</h1>

<p class="message-content">
   <?php echo $message_content ?>
</p>

<p>
    <?php echo $censored_word ?>
</p>