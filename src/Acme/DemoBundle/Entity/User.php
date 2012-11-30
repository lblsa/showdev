<?php
namespace Acme\DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class User
{
    protected $mail;

    protected $phone;
	
	public function getMail()
    {
        return $this->mail;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}

?>