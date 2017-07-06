               
                <footer>
                    <p>2017 © Andrian Smart Media</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets')?>/assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="<?php echo base_url('assets')?>/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url('assets')?>/assets/chosen-bootstrap/chosen.jquery.min.js"></script>

        <!--flaty scripts-->
        <script src="<?php echo base_url('assets')?>/js/flaty.js"></script>
        <script src="<?php echo base_url('assets')?>/js/flaty-demo-codes.js"></script>

    <script type="text/javascript">
            $(document).ready( function() {
              $('#invoice-table').dataTable( {
                "aoColumnDefs": [
                  { "bSortable": true, "aTargets": [ 6 ] }
                ] } );

              $('#ticket-table').dataTable( {
                "aoColumnDefs": [
                  { "bSortable": true, "aTargets": [ 5 ] }
                ] } );
            });
        </script>

    </body>
</html>
