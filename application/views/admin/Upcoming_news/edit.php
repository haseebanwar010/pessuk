<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
        <?php if(!empty($this->session->flashdata('msg'))){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>
        
        
        
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
        Update News
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/pages">Pages</a></li>
        <li class="active">Update News</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/upcoming_news/edit/<?php echo $upcoming_news[0]['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $upcoming_news[0]['id']; ?>">
                <!-- text input -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>News Title</label>
                        <input value="<?php echo $upcoming_news[0]['title']; ?>" name="title" type="text" class="form-control" placeholder="Enter Page Title">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Sort Order</label>
                        <input value="<?php echo $upcoming_news[0]['sort_order']; ?>" name="sort_order" type="text" class="form-control" placeholder="Enter Sort Order">
                    </div>
                </div>
                   
                <div class="col-lg-6">
                    <div class="form-group">
                    <label>Status</label><br />
                  <input class="minimal" type="checkbox" id="showonvalue" value="1" name="showon" <?php if($upcoming_news[0]['showon']==1){echo 'checked';}else{}  ?>>

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



