<?php
    /*
     *  parameters for footer menu
     */
    $footerMenu = array(
        "theme_location" => "footer_menu",
        "container" => "nav",
        "container_class" => "wrapper",
        "container_id" => "footer-nav",
        "depth" => 1);
?>
        </div><!--end wrapper--><div class="clear"></div>
        </div><!--end main-->
        <div class="clear"></div>
    </div><!--end wrapper-->
    <div id="footer">
        <div id="wrapper">
            <?php wp_nav_menu($footerMenu); ?>
            <div class="clear"></div>
                <p class="wrapper"> &copy; 2013 CFO Selections</p>
        </div><!--end wrapper-->
    </div><!--end footer-->
    
</body>
</html>