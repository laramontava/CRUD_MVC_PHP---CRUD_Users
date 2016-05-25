<?php
    include('view/top_page.php');
    
    session_start();
    ?>
    <div id="wrapper">
        <div id="header">
            <?php include('view/header.php'); ?>
        </div>
        <div id="contenido" class="container-fluid">
            <fieldset id="field-body">
        	<?php 
        	    include('modules/user/controller_user.php');
        	    $controlador = new controller_user();
        	    include("view/pages.php"); 
        	    //$controlador->handleRequest();
        	?>
            <br style="clear:both;" />
            </fieldset>
        </div>
        <div id="footer">   	   
	        <?php include("view/footer.php"); ?>        
        </div>
    </div>
<?php include("view/bot_page.php"); ?>    
