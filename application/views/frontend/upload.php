<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>


<?php
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Import CSV Pessuk File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="<?php echo $baseUrl; ?>assets/frontend/css/css.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
  </style>
</head>
<body>

<div class="container">
    <h2 class="panelanchor">Import CSV Pessuk File</h2>
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    
<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
<?php } ?>  
 
<?php if($this->session->flashdata('msgdanger')){ ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Danger!</h4>
                <?=$this->session->flashdata('msgdanger')?>
              </div>          
<?php } ?>  
    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Import Tickets</h3>
<!--            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();"></a>-->
        </div>
        <div class="panel-body panelsetting">
            <form action="<?php echo $baseUrl;?>upload/importfile" method="post" enctype="multipart/form-data" >
                <input type="file" name="file" required/>
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            
        </div>

    </div>
        <div class="clear"></div>
</div>

</body>
</html>



