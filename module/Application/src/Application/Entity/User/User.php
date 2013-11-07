<?php
/**
 * Created by PhpStorm.
 * User: vadimdez
 * Date: 07/11/13
 * Time: 20:34
 */

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;

    // getters/setters
}

?>