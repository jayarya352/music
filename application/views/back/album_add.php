<?php include('include/left_sidebar.php'); ?>

                <!-- top navigation -->
                <?php include('include/header.php'); ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Add Album</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    
                                    <div class="x_content">
                                        <br />

                                        <form method="post" action="<?php echo base_url(); ?>admin/addAlbum"  enctype="multipart/form-data" class="form-horizontal form-label-left">
                                           
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Artists </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <select name="artists" class="form-control">
                                                        <option>Choose Artists</option>
                                                        <?php foreach($getArtists as $allArtists){?>
                                                            <option value="<?php echo $allArtists['id']; ?>"><?php echo $allArtists['name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Album Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="album_name" value="" >
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