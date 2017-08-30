                <footer>
                    <p>2017 © Andrian Smart Media</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->

        <!--page specific css styles-->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/assets/data-tables/bootstrap3/dataTables.bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets')?>/assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />


        <!--page specific plugin scripts-->

        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>
         <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets')?>/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
                
        <!--flaty scripts-->
        <script src="<?php echo base_url('assets')?>/js/flaty.js"></script>
        
            
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
                    $('#awaiting-transaction-table').dataTable( {
                        "aoColumnDefs": [
                          { "bSortable": true, "aTargets": [ 7 ] }
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
