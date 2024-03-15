<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upcoming News
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/pages">Pages</a></li>
        <li class="active">All Upcoming News</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php if(!empty($this->session->flashdata('msg'))){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
            
            
            
          <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">All News</h3>
                <a href="<?php echo $baseUrl; ?>admin/upcoming_news/add"><button type="button" class="btn bg-navy margin addbtn">Add News</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($upcomingnews as $news){ ?>
                <tr>
                  <td><?php echo $news['id']; ?></td>
                  <td><?php echo $news['title']; ?></td>
                    <td><?php if($news['showon']==1){ ?><span class="badge bg-green">Active</span><?php }else{ ?><span class="badge bg-red">Inactive</span><?php } ?></td>
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/upcoming_news/edit/<?php echo $news['id']; ?>"><button class="btn btn-info">Edit</button></a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default<?php echo $news['id']; ?>">Delete</button>
                    </td>
                </tr>
                
        <div class="modal fade" id="modal-default<?php echo $news['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete News</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete this news?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                <a href="<?php echo $baseUrl; ?>admin/upcoming_news/delete/<?php echo $news['id']; ?>"><button type="button" class="btn btn-danger">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div> 
                   
                   
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Action</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
    </section>
</div>