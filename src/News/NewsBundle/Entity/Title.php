<?php

namespace News\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title
 *
 * @ORM\Table(name="Title")
 * @ORM\Entity;
 */
class Title {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     *@ORM\Column(type="text", length=200)
     */
    private $title_txt;
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

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
     * Set titleTxt
     *
     * @param string $titleTxt
     *
     * @return Title
     */
    public function setTitleTxt($titleTxt)
    {
        $this->title_txt = $titleTxt;

        return $this;
    }

    /**
     * Get titleTxt
     *
     * @return string
     */
    public function getTitleTxt()
    {
        return $this->title_txt;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Title
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
