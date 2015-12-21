<div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Clients</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php
									$client = new Client();
								    $clientnum = $client->find_all_client();
									?>
									<div class="huge"><?php echo $clientnum; ?></div>
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/client/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5> Users</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								    <?php
									  $systemuser = new Systemuser();
									  $usernum = $systemuser->find_all_systemuser();
									?>
                                    <div class="huge"><?php echo $usernum; ?></div>                             
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/systemuser/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>