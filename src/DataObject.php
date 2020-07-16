<?php
    
    class DataObject
    {
    	private $_dsn="mysql:host=127.0.0.1;dbname=customer_conversion";
        private $_username="root";
        private $_password="root";
		
		
    	public function connect()
		{
			$connection = null;
			try
            {
              $connection = new PDO($this->_dsn,$this->_username,$this->_password);
              $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

              
			}
			catch(PDOException $exception)
			{
				echo "Connection Failed" .$exception->getMessage();
			}
			
			return $connection;
		}
		
		public function disconnect($connection)
		{
			$connection = "";
		}
    }
?>
