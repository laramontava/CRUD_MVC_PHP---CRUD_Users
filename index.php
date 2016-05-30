<?php
    include('view/inc/top_page.php');
    
    session_start();
    ?>
    <div id="wrapper">
        <div id="header">
            <?php include('view/inc/header.php'); ?>
        </div>
        <div id="contenido" class="container-fluid">
            <fieldset id="field-body">
        	<?php 
        	    //include('modules/user/controller/controller_user.php');
        	    //$controlador = new controller_user();
        	    include("view/inc/pages.php");
        	?>
            <br style="clear:both;" />
            </fieldset>
        </div>
        <div id="footer">   	   
	        <?php include("view/inc/footer.php"); ?>        
        </div>
    </div>
<?php include("view/inc/bot_page.php"); ?>    
