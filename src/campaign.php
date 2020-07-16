<?php

 class Campaign
{
  private $_id;
  private $_header;
  private $_body;
  private $_footer;

  public function getId()
   {
      return $this->_id;
   }

  public function setId($id)
   {
      $this->_id = $id;
   }
   
  public function getHeader()
   {
      return $this->_header;
   }

  public function setHeader($header)
  {
      $this->_header = $header;
  }

   public function getBody()
   {
      return $this->_body;
   }

   public function setBody($body)
   {
      $this->_body = $body;
   }

   public function getFooter()
   {
      return $this->_footer;
   }

   public function setFooter($footer)
   {
      $this->_footer = $footer;
   }

}








?>