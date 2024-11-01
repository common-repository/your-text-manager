


<form method="post" action="?page=ytm_pwsp">
<?php
    $ytmspw = $_REQUEST['ytmpw'];
    if($ytmspw){
        echo "your string: ".$ytmspw;
        $name = "pw_string_ytm";
       update_option( $name, $ytmspw );
    }else{
        echo "you can change the text. <br />";
    };
    $pwop = get_option('pw_string_ytm');
    if($pwop){
        $plch = $pwop;
    }else{
        $plch = "please enter the text or the code you want.<br />";
    }
    
?>

    <br />
    
       
            <label for="ytmpw">the text/code:</label><br />
            <textarea style="width: 600px; height: 500px; line-height: initial" id="ytmpw" name="ytmpw"><?php echo $pwop ;?></textarea>
    <br />

            <input type="submit" class="button" value="Save & Update changes" />
        </form>
    