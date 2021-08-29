<?php include('include/left_sidebar.php'); ?>

                <!-- top navigation -->
                <?php include('include/header.php'); ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Add Song</h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                    </div> 
                                    <?php } ?>

                                    <?php if($this->session->flashdata('error')){ ?>
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                    </div> 
                                    <?php } ?>

                                    <div class="x_content">
                                        <br />

                                        <form method="post" action="<?php echo base_url(); ?>admin/addSong"  enctype="multipart/form-data" class="form-horizontal form-label-left">
                                           
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Artist Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <select name="artist" class="form-control" required>
                                                        <option>Choose Artist</option>
                                                        <?php foreach($getArtists as $allArtists){?>
                                                            <option value="<?php echo $allArtists['id']; ?>"><?php echo $allArtists['name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Album Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <select name="album" class="form-control">
                                                        <option>Choose Album</option>
                                                        <?php foreach($getAlbums as $allAlbums){?>
                                                            <option value="<?php echo $allAlbums['album_id']; ?>"><?php echo $allAlbums['album_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Song Name </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="text" class="form-control col-md-7 col-xs-12" name="song_name" value="" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Lyricist </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <!-- <input type="text" class="form-control col-md-7 col-xs-12" name="lyricist" value="" > -->
                                                    <select name="lyricist" class="form-control">
                                                        <option>Choose Lyricist</option>
                                                        <?php foreach($getLyricist as $allLyricist){?>
                                                            <option value="<?php echo $allLyricist->id; ?>"><?php echo $allLyricist->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Composer </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <!-- <input type="text" class="form-control col-md-7 col-xs-12" name="composer" value="" > -->
                                                    <select name="composer" class="form-control">
                                                        <option>Choose Composer</option>
                                                        <?php foreach($getComposer as $allComposer){?>
                                                            <option value="<?php echo $allComposer->id; ?>"><?php echo $allComposer->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Music </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <!-- <input type="text" class="form-control col-md-7 col-xs-12" name="music" value="" > -->
                                                    <select name="music" class="form-control">
                                                        <option>Choose Music</option>
                                                        <?php foreach($getMusic as $allMusic){?>
                                                            <option value="<?php echo $allMusic->id; ?>"><?php echo $allMusic->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Upload Song </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="file" class="form-control col-md-7 col-xs-12" name="song_file" value="" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Upload Thumbnail </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <input type="file" class="form-control col-md-7 col-xs-12" name="thumbnail_file" value="" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Playlists </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <select name="playlist[]" id="" class="form-control select2" multiple="multiple">
                                                        <?php 
                                                            foreach($playlists as $playlist){
                                                                ?> <option value="<?php echo $playlist['id'];?>"><?php echo $playlist['name'];?></option>
                                                        <?php } ?>
                                                    </select>
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