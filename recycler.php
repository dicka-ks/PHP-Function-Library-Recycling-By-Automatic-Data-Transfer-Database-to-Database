<?php
//Inclusion for Recycler Function
        include_once "../server.php";                //for call the server
        include_once "../htmlheadjquery.php";        //for jquery animation blink, and css typing
        include_once "../config.php";                //for connecting into primary database
        include_once "../configrecycler.php";        //for connecting into secondary database
        include_once "../phpFunctionLibrary/moveToRecycler.php";        
?>


<center><img src="http://<?php echo $server; ?>/factory/erp/icon/recycling.gif" >
<h1 style='color:#24936b;'>Recycling...</h1>
<div style="font-size:11px;">


<!--For CSS Typewriting Efect-->
<div class="typewriter">
        <?php
        //calling Recycler Function
                $id             = @$_GET['recycleid'];
                $columnID       = 'ColorID';
                $table          = 'factory.colortable';
                $tableRecycler  = 'recycler.colortable';

                moveToRecycler($id,$table,$tableRecycler,$columnID,$con,$conRecycler);
        ?>
</div>


<script>
$(document).ready(function(){  //jQuery for blink blink in Recycling 
    $("h1").fadeIn().fadeOut() //1x
           .fadeIn().fadeOut() //2x
           .fadeIn().fadeOut() //3x
           .fadeIn().fadeOut() //4x
           .fadeIn().fadeOut() //5x
           .fadeIn().fadeOut().fadeIn();
});
</script>