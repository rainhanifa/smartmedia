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
         <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
                
        <!--flaty scripts-->
        <script src="<?php echo base_url('assets')?>/js/flaty.js"></script>
        <script src="<?php echo base_url('assets')?>/js/flaty-demo-codes.js"></script>
        
            
            <script type="text/javascript">
                $(document).ready( function() {
                    $('#transaction-table').dataTable( {
                        "aoColumnDefs": [
                          { "bSortable": true, "aTargets": [ 7 ] }
                        ] } );
                    $('#category-table').dataTable( {
                        "aoColumnDefs": [
                          { "bSortable": true, "aTargets": [ 3 ] }
                        ] } );
                    $('#announcement-table').dataTable( {
                        "aoColumnDefs": [
                          { "bSortable": true, "aTargets": [ 5 ] }
                        ] } );
                    $('#awaiting-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 6 ] }
                        ] } );
                    $('#clients-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                     $('#invoice-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 5 ] }
                        ] } );
                      $('#support-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                      $('#users-table').dataTable( {
                    "aoColumnDefs": [
                        { "bSortable": true, "aTargets": [ 4 ] }
                        ] } );
                } );
            </script>  
    </body>

</html>
