


<form method="post" action="?page=ytm_wgsp">
<?php
    $ytmswg = $_REQUEST['ytmwg'];
    if($ytmswg){
        echo "your string: ".$ytmswg;
        $name = "widget_content_ytm";
       update_option( $name, $ytmswg );
    }else{
        echo "you can change the text. <br />";
    };


    $wgop = get_option('widget_content_ytm');
    if($wgop){
        $plch = $wgop;
    }else{
        $plch = "please enter the text or the code you want.<br />";
    }
    
?>

    <br />
    
       
            <label for="ytmwg">the text/code:</label><br />
            <textarea style="width: 600px; height: 500px; line-height: initial" id="ytmwg" name="ytmwg"><?php echo $wgop ;?></textarea>
    <br />

            <input type="submit" class="button" value="Save & Update changes" />
        </form>
    