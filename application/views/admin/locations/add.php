<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
        <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
        
    <section class="content-header">
      <h1>
        Add Location
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/locations">Locations</a></li>
        <li class="active">Add Location</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Location</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/locations/add" enctype="multipart/form-data">
                <!-- text input -->
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input value="<?php if(isset($_POST['name'])){echo $_POST['name']; }?>" name="name" type="text" class="form-control" placeholder="Enter Client Name">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <button class="btn bg-navy margin submitbtn" type="submit">Submit</button>
                    </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
    </div>


<script>
    
</script>
