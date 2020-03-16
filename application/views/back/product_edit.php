<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carts24X7 | Product Edit</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url(); ?>assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url(); ?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url(); ?>assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url(); ?>assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	<script>
	function cat(str) {  

		if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari

		xmlhttp=new XMLHttpRequest();
		} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

		}
		xmlhttp.onreadystatechange=function() {
		 
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		   document.getElementById('subcat_id').innerHTML=xmlhttp.responseText;
		  
		}
		}
		//echo 
		xmlhttp.open("GET","<?php echo site_url();?>"+'/admin/getSubcat/'+str,true);
		xmlhttp.send();
	} 
</script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
			<?php include('include/left_sidebar.php'); ?>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <?php include('include/header.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Product</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
					<ul class="nav navbar-right panel_toolbox">
						<li><a href="<?php echo base_url()?>index.php/admin/product/list" class="close-link"><i class="fa fa-plus"></i>Product List</a></li>
					</ul>
                  <div class="x_content">
                    <br />
					<?php 
						foreach($reg as $row){ 
						
					?>
                    <form method="post" action="<?php echo base_url(); ?>admin/product/do_update/<?php echo $row['id']; ?>"  enctype="multipart/form-data" class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="cat_name" onchange="cat(this.value)">
								<option value="">--Select--</option>
							
							</select>
                        </div>
                      </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sub Category Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" id="subcat_id" name="subcat_name" value="<?php echo $row['subcat_name']; ?>" >
								
							</select>
                        </div>
                      </div>
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="product_name" value="<?php echo $row['product_name']; ?>">
                        </div>
                      </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Slug </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control col-md-7 col-xs-12" name="slug" value="<?php echo $row['slug']; ?>">
                    </div>
                    </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Seller Price </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="seller_price"value="<?php echo $row['seller_price']; ?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Buyer Price</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="buyer_price"value="<?php echo $row['buyer_price']; ?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Offer Price</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="offer_price"value="<?php echo $row['offer_price']; ?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Weight</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="weight"value="<?php echo $row['weight']; ?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Size</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="size"value="<?php echo $row['size']; ?>">
                        </div>
                      </div>

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dimension</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Length" name="length" >
                    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Breadth" name="breadth">
                    <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Height" name="height">
                    </div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 1</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image1" class="form-control col-md-7 col-xs-12" value="<?php echo $row['image1']; ?>">
						  
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 2</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image2" class="form-control col-md-7 col-xs-12"value="<?php echo $row['image2']; ?>">
						  
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 3</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image3" class="form-control col-md-7 col-xs-12"value="<?php echo $row['image3']; ?>">
						  
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 4</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image4" class="form-control col-md-7 col-xs-12"value="<?php echo $row['image4']; ?>">
						  
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 5</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image5" class="form-control col-md-7 col-xs-12"value="<?php echo $row['image5']; ?>">
						  
                        </div>
                    </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Short Description </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
						  <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" name="short_description"value="<?php echo $row['short_desc']; ?>"></textarea>
                        </div>
                      </div>
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Long Description </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
						  <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" name="long_description"value="<?php echo $row['long_desc']; ?>"></textarea>
                        </div>
                      </div>

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Attribute 1 </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="2" cols="50" class="form-control col-md-7 col-xs-12" name="attribute1"value="<?php echo $row['attribute1']; ?>"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Attribute 2 </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="2" cols="50" class="form-control col-md-7 col-xs-12" name="attribute2"value="<?php echo $row['attribute2']; ?>"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Attribute 3 </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12" name="attribute3"value="<?php echo $row['attribute3']; ?>"></textarea>
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">SEO Title </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="2" cols="50" class="form-control col-md-7 col-xs-12" name="seo_title"value="<?php echo $row['seo_title']; ?>"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">SEO Meta </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="2" cols="50" class="form-control col-md-7 col-xs-12" name="seo_meta"value="<?php echo $row['seo_meta']; ?>"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">SEO Description </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12" name="seo_desc"value="<?php echo $row['seo_desc']; ?>"></textarea>
                    </div>
                    </div>
					
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="radio" name="status" value="1" <?php if($row['status']==1) {?> checked  <?php } ?> > Active &nbsp;&nbsp;
						  <input type="radio" name="status" value="0"  <?php if($row['status']==0) {?> checked  <?php } ?>  >Deactive
						  
                        </div>
                      </div>
                     
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
				
                    </form>
						<?php } ?>
                  </div>
                </div>
              </div>
            </div>

          

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url(); ?>assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url(); ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url(); ?>assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url(); ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url(); ?>assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>
	
  </body>
</html>
