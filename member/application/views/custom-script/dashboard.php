<script type="text/javascript">
$(document).ready( function() {
  $('#invoice-table').dataTable( {
    /*"aoColumnDefs": [
      { "bSortable": true, "aTargets": [ 4 ] }
    ]*/ } );

  $('#ticket-table').dataTable( {
    /*"aoColumnDefs": [
      { "bSortable": true, "aTargets": [ 4 ] }
    ]*/ } );

  $('#transaction-table').dataTable( {
    "aoColumnDefs": [
      { "bSortable": true, "aTargets": [ 5 ] }
    ] } );
  
});
</script>