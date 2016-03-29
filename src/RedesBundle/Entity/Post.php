<?php

namespace RedesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="RedesBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=255)
     */
    private $campo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set campo
     *
     * @param string $campo
     *
     * @return Post
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string
     */
    public function getCampo()
    {
        return $this->campo;
    }
}

