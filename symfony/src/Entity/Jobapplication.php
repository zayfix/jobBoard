<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobapplication
 *
 * @ORM\Table(name="jobApplication", indexes={@ORM\Index(name="fk_jobApplication_ads1_idx", columns={"adsId"})})
 * @ORM\Entity
 */
class Jobapplication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \Ads
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ads")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adsId", referencedColumnName="id")
     * })
     */
    private $adsid;


}
