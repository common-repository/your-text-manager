

<style>
    #like_url{
        width: 300px;
    }
</style>
<form method="post" action="?page=ytm">
    <input type="hidden" name="checkform" value="yes" />
<?php
    $reports = $_REQUEST['reports'];


    if(isset($_REQUEST['checkform'])){

        if($reports == "no"){


            echo "reports are disabled."."<br />";
            sendreport("disable","website disabled the plugin");
            }else{

                $reports = "yes";

            }

      
        



       
       update_option( 'ytm_reports', $reports );









    }else{
        echo "you can change the settings. <br />";
    };














    
    
?>

    <br />
            

            <label for="reports">Do you want to disable reports?(checked = off, unchecked = on)</label>
            <input type="checkbox" id="reports" name="reports" value="no" <?php if(get_option('ytm_reports') == 'no'){echo 'checked';};  ?>  />
             <br />



            
            
            
            </div>

            <input type="submit" class="button" value="Save & Update changes" />
    <br />

   
        </form>
    