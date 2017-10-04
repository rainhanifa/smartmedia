<?php
	if($voucher){
	    foreach($voucher as $detail){
            ?>

    <h5 class="info-text">Anda akan mengaktifkan <strong><?php echo $detail['name']?></strong></h5>
    	<input type="hidden" name="id_voucher" id="id_voucher" value="<?php echo $detail['id_voucher']; ?>">

        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-3">
    			<div class="choice" data-toggle="wizard-checkbox">
                    <input type="checkbox" name="jobb" value="Design">
                    <div class="card card-checkboxes card-hover-effect">
                        <i class="ti-desktop"></i>
    					<p><?php echo $detail['domain']; ?><br/>Subdomain</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
    			<div class="choice" data-toggle="wizard-checkbox">
                    <input type="checkbox" name="jobb" value="Design">
                    <div class="card card-checkboxes card-hover-effect">
                        <i class="ti-envelope"></i>
    					<p><?php echo $detail['email']; ?><br/>Akun Email</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
    		<div class="choice" data-toggle="wizard-checkbox">
                <input type="checkbox" name="jobb" value="Design">
                <div class="card card-checkboxes card-hover-effect">
                    <i class="ti-package"></i>
    				<p><?php echo $detail['storage']; ?> MB <br/>Penyimpanan</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
    		<div class="choice" data-toggle="wizard-checkbox">
                <input type="checkbox" name="jobb" value="Design">
                <div class="card card-checkboxes card-hover-effect">
                    <i class="ti-stats-up"></i>
    				<p><?php echo $detail['bandwidth']; ?> MB<br/>Bandwidth</p>
                </div>
            </div>
        </div>
    </div>
<?php 
    }
}?>