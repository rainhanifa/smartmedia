               
                <footer>
                    <p>2017 © Andrian Smart Media</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="<?php echo base_url('assets')?>/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/jquery-cookie/jquery.cookie.js"></script>
        
        <!--flaty scripts-->
        <script src="<?php echo base_url('assets')?>/js/flaty.js"></script>

        <!--page specific plugin scripts-->
        <?php
        if(!empty($js)) {
            foreach($js as $js){
                echo '<script src="'.base_url('assets/').$js.'" type="text/javascript"></script>';
            }
        }

        if(!empty($page_js)) {
            echo $page_js;
        }
        ?>

    </body>
</html>
