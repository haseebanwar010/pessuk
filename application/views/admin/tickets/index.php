<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tickets
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/tickets">Tickets</a></li>
        <li class="active">All Tickets</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
            
            
            
          <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">All Tickets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="row">
             	<div class="col-sm-2"></div>
             	<div class="col-sm-8 setsearchtickets">
<form method="post" action="" enctype="multipart/form-data">

<div class="form-group setnewsearch">
  <input type="text" class="form-control" name="searchid" value="<?php if(isset($_POST['searchid'])){echo $_POST['searchid']; }?>" placeholder="Search By Id">
</div>	
						
 <div class="form-group settopsearch">
    <select class="form-control" id="sel1" name="locationid">
    <option value="">Search By Location</option>
    <?php if($locations){?>
   <?php foreach($locations as $loc){ ?>
    <option value="<?php echo $loc['id'];?>" <?php if($this->input->post('locationid') && $this->input->post('locationid')==$loc['id']){ echo 'selected';}?>><?php echo $loc['name'];?></option>
    <?php }?>
    <?php }?>
  </select>
</div>

<div class="form-group setgroupsclear">
  <label for="sel1"></label>
<button type="submit" class="btn btn-primary" name="searchlocation">Search</button>
</div>

</form>


             	</div>
             	<div class="col-sm-2"></div>
             	
             </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>EasyCollectRef</th>
                  <th>UserID</th>
                  <th>PCN</th>
                  <th>VRM</th>
                  <th>Location</th>
                  <th>Offence</th>
                  <th>OffenceDate</th>
                  <th>Balance</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($tickets as $ticket){ ?>

                <tr>
                  <td><?php echo $ticket['id']; ?></td>
                  <td><?php echo $ticket['EasyCollectRef']; ?></td>
                  <td><?php echo $ticket['UserID']; ?></td>
                  <td><?php echo $ticket['PCN']; ?></td>
                  <td><?php echo $ticket['VRM']; ?></td>
                  <td><?php echo $ticket['Location']; ?></td>
                  <td><?php echo $ticket['Offence']; ?></td>
                  <td><?php echo $ticket['OffenceDate']; ?></td>
                  <td><?php echo $ticket['Balance']; ?></td>
                  <td><?php echo $ticket['Status']; ?></td>
                </tr>
                    
                    
                    
                    
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>UserID</th>
                  <th>PCN</th>
                  <th>VRM</th>
                  <th>Location</th>
                  <th>Offence</th>
                  <th>OffenceDate</th>
                  <th>Balance</th>
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