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
        *@ORM\Column(type="string", length=100)
     */
    private $sub_news;
    /**
     * @ORM\Column(type="text")
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
     * Set subNews
     *
     * @param string $subNews
     *
     * @return News
     */
    public function setSubNews($subNews)
    {
        $this->sub_news = $subNews;

        return $this;
    }

    /**
     * Get subNews
     *
     * @return string
     */
    public function getSubNews()
    {
        return $this->sub_news;
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
