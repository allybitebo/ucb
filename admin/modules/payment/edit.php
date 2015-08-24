<?php 
	
	$payment = new Payment();
	$cur = $payment->single_payment($_GET['id']);	
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->payment_id; ?>" method="POST">
	
	<fieldset>
		<legend>Edit Payment</legend>
		
		
		<div class="form-group" id="payment_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="payment_id">Payment Number *</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="payment_id" name="payment_id" placeholder="payment Number" type="text" value="<?php echo $cur->payment_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="payment_name">Amount</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="pName" name="pName" type="text" placeholder="amount" value="<?php echo $cur->amount; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="descri">Description</label>
					
					<div class="col-md-8">
						<textarea class="form-control input-sm" id="descri" name="descri" placeholder="Description" type="text" value="<?php echo $cur->description;?>"></textarea>
					</div>
				</div>
				
			</div>
		</div>											<div class="form-group" id="payment_id">			<div class="col-md-8">				<label class="col-md-4 control-label" for="Installment_id">Installment Number *</label>								<div class="col-md-8">					<input class="form-control input-sm" id="Installment_id" name="Installment_id" placeholder="Installment " type="text" value="<?php echo $cur->installment_number; ?>" readonly>				</div>							</div>					</div>
				<?php
					if($_SESSION['ACCOUNT_TYPE']=='adminstrator'){
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

