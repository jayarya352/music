<?php include('include/left_sidebar.php'); ?>

                <!-- top navigation -->
                <?php include('include/header.php'); ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Edit User</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    
                                    <div class="x_content">
                                        <br />

                                        <form method="post" action="<?php echo base_url(); ?>user/updateuser/"  enctype="multipart/form-data" class="form-horizontal form-label-left">
                                            <input type='hidden' name='hiddenuserid' value="<?php echo $userData[0]['id']; ?>">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="name" value="<?php echo $userData[0]['name']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="email" value="<?php echo $userData[0]['email']; ?>" readonly="">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="phone" value="<?php echo $userData[0]['phone']; ?>" >
                                                </div>
                                            </div>
                                            

                                             <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="radio" name="status" value="1" <?php echo $userData[0]['isActive'] == 1 ? 'checked' : ''; ?>> Active &nbsp;&nbsp;
                                                    <input type="radio" name="status" value="0" <?php echo $userData[0]['isActive'] == 0 ? 'checked' : ''; ?>>Deactive

                                                </div>
                                            </div>

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