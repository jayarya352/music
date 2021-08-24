<?php include('include/left_sidebar.php'); ?>

                <!-- top navigation -->
                <?php include('include/header.php'); ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Add User</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    
                                    <div class="x_content">
                                        <br />
                                        <?php if($this->session->flashdata('success')){ ?>
                                        <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                        <?php } else {  ?>
                                            <div class="alert alert-primary" role="alert">
                                        <?php echo $this->session->flashdata('error'); ?>
                                        </div> 
                                            <?php } ?>
                                        <form method="post" action="<?php echo base_url(); ?>user/userAdd"  enctype="multipart/form-data" class="form-horizontal form-label-left">
                                            <!-- <input type='hidden' name='hiddenuserid' "> -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="name" required >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="email" class="form-control col-md-7 col-xs-12" name="email" required >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="password" class="form-control col-md-7 col-xs-12" name="password"   >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone Number </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="number" class="form-control col-md-7 col-xs-12" name="phone"   >
                                                </div>
                                            </div>
                                            
                                                <?php if($userRole){ ?>
                                             <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Role</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <?php foreach($userRole as $role){ ?>
                                                        <input class="form-check-input" type="checkbox" name="user_role[]" value="<?php echo $role->id; ?>">
                                                        <label class="form-check-label" for="user_role"><?php echo $role->name; ?></label>&nbsp;
                                                    <?php } ?>
                                                    <!-- <input type="radio" name="status" value="0" >Deactive -->

                                                </div>
                                            </div>
                                            <?php } ?>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- /page content -->  


            </div>
        </div>

        <?php include('include/footer.php'); ?>