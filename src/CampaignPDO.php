<?php

    require_once("DataObject.php");
    require_once("campaign.php");

   class CampaignPDO extends DataObject
   {

     public function getMaxId()
	 {
	 	$connection = parent::connect();
	 	$maxIdSql = "SELECT MAX(ID) AS MAXID FROM campaign";
		 $rows = $connection->query($maxIdSql);
		 
		 $maxid=0;
		 
		 if(count($rows) > 0)
		 {
		  foreach($rows as $row)
		   {
		     $maxid = $row[0];	
		   }
		 }
	
	     parent::disconnect($connection);	 
		 return $maxid;
	 }
     public function  insertCampaign( $campaign)
      {
      	 $connection = parent::connect();
         
         $insertsql = "INSERT INTO campaign (header,body,footer,id) VALUES (:header,:body,:footer,:id)";

         try
         {
         $statement = $connection->prepare($insertsql);
         $statement->bindValue(":id",$this->getMaxId()+1,PDO::PARAM_INT);
         $statement->bindValue(":header",$campaign->getHeader(),PDO::PARAM_STR);
         $statement->bindValue(":body",$campaign->getBody(),PDO::PARAM_STR);
         $statement->bindValue(":footer",$campaign->getFooter(),PDO::PARAM_STR);
         $statement->execute();
		 parent::disconnect($connection);
         }
         catch(PDOException $exception)
          {
	        echo "exception Message" . $exception->getMessage();
	        parent::disconnect($connection); 
	        print_r($connection->errorInfo());
          }
        
      }

       public function updateCampaign($campaign)
       {
       	 $connection = parent::connect();
	     $updatesql = "UPDATE campaign SET ID=:id, HEADER=:header, BODY=:body,FOOTER=:footer WHERE ID=:id";
	
	     try
	     { 
		   $statement = $connection->prepare($updatesql);
		  $statement->bindValue(":id",$campaign->getId(),PDO::PARAM_INT);
         $statement->bindValue(":header",$campaign->getHeader(),PDO::PARAM_STR);
         $statement->bindValue(":body",$campaign->getBody(),PDO::PARAM_STR);
         $statement->bindValue(":footer",$campaign->getFooter(),PDO::PARAM_STR);
		
		   $statement->execute(); 
		   parent::disconnect($connection);
		
		 }
		catch(PDOException $exception)
		{
			 echo "exception Message" . $exception->getMessage();
			 parent::disconnect($connection);
			 print_r($connection->errorInfo());
		}
	
       }

        public function deleteCampaign($campaign)
        {
          $connection = parent::connect();	
	      $deletesql = "DELETE FROM campaign WHERE ID=:id";
	
	      try
	       {
		     $statement = $connection->prepare($deletesql);
		     $statement->bindValue(":id",$campaign->getId(),PDO::PARAM_INT);
		     $statement->execute();
		     parent::disconnect($connection);
	       }
	       catch(PDOException $exception)
	        {
		        echo "exception Message" . $exception->getMessage();
		        parent::disconnect($connection);
		        print_r($connection->errorInfo());
	        }
	
        }
        
		

        public function getCampaign($id)
		{
			$connection = parent::connect();
	         $selectSQL = "SELECT * FROM campaign WHERE ID=:id";
			 
			 $campaign = "";
			 try
			 {
			 $statement = $connection->prepare($selectSQL);
		     $statement->bindValue(":id",$id,PDO::PARAM_INT);
		     
	         $statement->execute();
			 $row = $statement->fetch();
              $campaign = new Campaign();
	        
	            $campaign->setHeader($row[0]);
	            $campaign->setBody($row[1]);
	            $campaign->setFooter($row[2]);
				$campaign->setId($row[3]);
	         parent::disconnect($connection);
			 }
			catch(PDOException $exception)
	        {
		        echo "exception Message" . $exception->getMessage();
		        parent::disconnect($connection);
		        print_r($connection->errorInfo());
	        }
	         return $campaign;
			
			
		}
        public function getCampaigns()
         {
         	 $connection = parent::connect();
	         $selectSQL = "SELECT * FROM campaign";
	         $rows = $connection->query($selectSQL);
	         $campaigns = array();
	         foreach($rows as $row)
             {
	            $campaign = new Campaign();
	        
	            $campaign->setHeader($row[0]);
	            $campaign->setBody($row[1]);
	            $campaign->setFooter($row[2]);
				$campaign->setId($row[3]);
	
	            $campaigns[] = $campaign;
             }
	         parent::disconnect($connection);
	         return $campaigns;
         }

     
    }


?>
