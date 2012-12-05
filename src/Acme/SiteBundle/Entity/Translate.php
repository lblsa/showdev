<?php
namespace Acme\SiteBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="translate")
 */
class Translate
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $ru;

	/**
	* @ORM\Column(type="text")
	*/
	protected $en;

	/**
	* @ORM\Column(type="string", length=200)
	*/
	protected $part;
	
	public function getContent($lang)
	{
		if ($lang=='ru')
			return $this->ru;
		else
			return $this->en;
	}
}

?>