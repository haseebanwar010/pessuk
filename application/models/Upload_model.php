<?php
class Upload_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
	
public function importcsvtickets(){



    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){

            //open uploaded csv file with read only mode
//            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
//			file('C:\Users\ACER\Desktop\pess csv\html_pess_4.csv')

			$file=array_map('str_getcsv', file($_FILES['file']['tmp_name']));
			for($k=2001;$k<=3000;$k++){
				$data['EasyCollectRef']=$file[$k][0];
				$data['UserID']=$file[$k][1];
				$data['PCN']=$file[$k][2];
				$data['VRM']=$file[$k][3];
				$data['Location']=$file[$k][4];
				$data['Offence']=$file[$k][5];
				$data['OffenceDate']=$file[$k][6];
				$data['Balance']=$file[$k][7];
				$data['Status']=$file[$k][8];
				$this->db->insert('tickets', $data);
			}
			exit;
//			echo '<pre>';
//			var_dump($file);
//			exit;
            //skip first line
//           fgetcsv($csvFile);

            //parse data from csv file line by line
//			$i=1;
//            while(($line = fgetcsv($csvFile)) !== FALSE){
//				if($i<=2000){
//				$data['EasyCollectRef']=$line[0];
//				$data['UserID']=$line[1];
//				$data['PCN']=$line[2];
//				$data['VRM']=$line[3];
//				$data['Location']=$line[4];
//				$data['Offence']=$line[5];
//				$data['OffenceDate']=$line[6];
//				$data['Balance']=$line[7];
//				$data['Status']=$line[8];
				
//				$this->db->insert("INSERT INTO tickets (EasyCollectRef, UserID, PCN, VRM, Location, Offence, OffenceDate, Balance, Status) VALUES ('".$line[0]."', '".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."','".$line[8]."')");
				
//				$this->db->insert('tickets', $data);

//				$pro_id3 = $db->insert_id;
//				echo $pro_id3;
//				}
//				else{
//					break;
//				}
//				$i++;
//					
//            }
            
            //close opened csv file
            fclose($csvFile);
		$sval="3";
        return $sval;
//            $qstring = '?status=succ';
        }else{
		$sval="2";
        return $sval;
//            $qstring = '?status=err';
        }
    }else{
		$sval="1";
        return $sval;
//        $qstring = '?status=invalid_file';
    }

}
	
}
?>