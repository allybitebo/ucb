<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Payment</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="amount">Amount</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="amount" name="amount" placeholder="Amount" type="number" value="">
				</div>
			</div> <br /><br />
		
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="description">Description</label>
				
				<div class="col-md-8">
					<textarea class="form-control input-sm" id="description" name="description" placeholder="Description" type="text" value=""></textarea>
				</div>
			</div> <br /><br /><br /><br />

			<div class="col-md-8">
				<label class="col-md-4 control-label" for="installment">Installment</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="installment" name="installment" placeholder="Installment" type="number" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="project">Project</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="project" name="project" placeholder="Project" type="text" value="">
				</div>
			</div> <br /><br />

                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for= "idno"></label>
                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  
			
			</form>
			
		<!==End of well-->
		<!--End of container-->
		
		</div><!--End of container-->																		