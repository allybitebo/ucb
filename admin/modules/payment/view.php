<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div> 
<?php 
	$payment = new Payment();
	$list = $payment->single_payment($_GET['paymentId']);
	
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->payment_id; ?>" method="POST">
	
	<fieldset>
		<legend>Payment Information</legend>
		
		
		<div class="form-group" id="payment_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="payment_id">Payment Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $list->payment_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="payment_name">Amount: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $list->amount; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Description </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $list->description; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cContact">Installment Number </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $list->installment_number; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		</center>
		
		<?php
			if($_SESSION['ACCOUNT_TYPE']=='officer'){
				echo '
				<div class="col-md-6" align="right">
				<button class="btn btn-primary" name="submit" type="submit" >Save</button>
				
				</div>';
			} ?>
			
	</div>
</div>

</form>
<!--	</div><!--End of well-->

</div><!--End of container-->

