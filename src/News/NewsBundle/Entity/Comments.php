<?php

namespace News\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="News\NewsBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(type="integer", length=6)
     */
    private $id_title;
    /**
     * @ORM\Column(type="string")
     */
    private $comment_txt;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTitle
     *
     * @param integer $idTitle
     *
     * @return Comments
     */
    public function setIdTitle($idTitle)
    {
        $this->id_title = $idTitle;

        return $this;
    }

    /**
     * Get idTitle
     *
     * @return integer
     */
    public function getIdTitle()
    {
        return $this->id_title;
    }

    /**
     * Set commentTxt
     *
     * @param string $commentTxt
     *
     * @return Comments
     */
    public function setCommentTxt($commentTxt)
    {
        $this->comment_txt = $commentTxt;

        return $this;
    }

    /**
     * Get commentTxt
     *
     * @return string
     */
    public function getCommentTxt()
    {
        return $this->comment_txt;
    }
}
