<?php
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_user") ){
        include('view/inc/top_page_2.php');
    }else{
        include('view/inc/top_page.php');
    }
    
    session_start();
    ?>
    <div id="wrapper">
        <div id="header">
            <?php include('view/inc/header.php'); ?>
        </div>
        <div id="contenido" class="container-fluid">
            <fieldset id="field-body">
            <div class="container">
        	<?php
        	    include("view/inc/pages.php");
        	?>
            <br style="clear:both;" />
            </div>
            </fieldset>
        </div>
        <div id="footer">   	   
	        <?php include("view/inc/footer.php"); ?>        
        </div>
    </div>
<?php include("view/inc/bot_page.php"); ?>    
