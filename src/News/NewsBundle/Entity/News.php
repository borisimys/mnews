<?php

namespace News\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */

class News {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
        *@ORM\Column(type="integer", length=6)
     */
    private $id_title;
    /**
     * @ORM\Column(type="string")
     */
    private $text_news;



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
     * @return News
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
     * Set textNews
     *
     * @param string $textNews
     *
     * @return News
     */
    public function setTextNews($textNews)
    {
        $this->text_news = $textNews;

        return $this;
    }

    /**
     * Get textNews
     *
     * @return string
     */
    public function getTextNews()
    {
        return $this->text_news;
    }
}
