<form method="post" action="?page=ytm_ptsp">
<?php
    $ytms = $_REQUEST['ytmstring'];
    if($ytms){
        echo "your string: ".$ytms;
        $name = "the_string_ytm";
       update_option( $name, $ytms );
    }else{
        echo "you can change the text. <br />";
    };
    $op = get_option('the_string_ytm');
    if($op){
        $plch = $op;
    }else{
        $plch = "please enter the text or the code you want.<br />";
    }
    
?>

    <br />
    <style>
        abbr{
            cursor: help;
        }
    </style>
       
            <label for="ytmstring">the text/code/ad:</label><br />
            <textarea style="width: 600px; height: 500px; line-height: initial" id="ytmstring" name="ytmstring"><?php echo $op ;?></textarea>
    <br />

    <?php
    $whtxt = $_REQUEST['whtxt'];
    if($whtxt){
        echo "changed to: <abbr title='a=after, b=before and ba=before & after'>$whtxt</abbr> <br />";
        $wname = "where_string_ytm";
       update_option( $wname, $whtxt );
    }else{
        echo "<label for='whtxt'>you can change where the text will show.</label><br />";
    };
    $wop = get_option('where_string_ytm');
    if($wop){
        echo "<br /><h3>be careful that the selected option is your old choise(<abbr title='a=after, b=before and ba=before & after'>$wop</abbr>) or your new choise.</h3><br />";
    }else{
        $plch = "please select where you want the text to be show.<br />";
    }
    
?>
            <select name="whtxt" id="whtxt" style="border: 3px solid #f00 ; height: 40px; font-size: 20px;">
                <option value="b" <?php if($wop == "b")echo 'selected'; ?>>before the content of the post</option>
                <option value="a" <?php if($wop == "a")echo 'selected'; ?>>after the content of the post</option>
                <option value="ba" <?php if($wop == "ba")echo 'selected'; ?>>before and after the content of the post</option>
            </select>
    <br />
            <input type="submit" class="button" value="Save & Update changes" />
        </form>
