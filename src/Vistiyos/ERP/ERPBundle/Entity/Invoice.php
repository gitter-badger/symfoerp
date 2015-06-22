<?php

namespace Vistiyos\ERP\ERPBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Invoice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="totalNet", type="decimal")
     */
    private $totalNet;

    /**
     * @var string
     *
     * @ORM\Column(name="totalVat", type="decimal")
     */
    private $totalVat;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal")
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeAdded", type="datetimetz")
     */
    private $timeAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeModified", type="datetimetz")
     */
    private $timeModified;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var Contact
     * @ORM\ManyToOne(targetEntity="Vistiyos\CRM\CRMBundle\Entity\Contact", inversedBy="invoices")
     * @ORM\JoinColumn(name="contact_id",referencedColumnName="id")
     */
    private $contact;

    /**
     * @var ArrayCollection
     */
    private $invoiceLines;

    public function __construct()
    {
        $this->invoiceLines = new ArrayCollection();
    }

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
     * Set totalNet
     *
     * @param string $totalNet
     * @return Invoice
     */
    public function setTotalNet($totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }

    /**
     * Get totalNet
     *
     * @return string
     */
    public function getTotalNet()
    {
        return $this->totalNet;
    }

    /**
     * Set totalVat
     *
     * @param string $totalVat
     * @return Invoice
     */
    public function setTotalVat($totalVat)
    {
        $this->totalVat = $totalVat;

        return $this;
    }

    /**
     * Get totalVat
     *
     * @return string
     */
    public function getTotalVat()
    {
        return $this->totalVat;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Invoice
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set timeAdded
     *
     * @param \DateTime $timeAdded
     * @return Invoice
     */
    public function setTimeAdded($timeAdded)
    {
        $this->timeAdded = $timeAdded;

        return $this;
    }

    /**
     * Get timeAdded
     *
     * @return \DateTime
     */
    public function getTimeAdded()
    {
        return $this->timeAdded;
    }

    /**
     * Set timeModified
     *
     * @param \DateTime $timeModified
     * @return Invoice
     */
    public function setTimeModified($timeModified)
    {
        $this->timeModified = $timeModified;

        return $this;
    }

    /**
     * Get timeModified
     *
     * @return \DateTime
     */
    public function getTimeModified()
    {
        return $this->timeModified;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Invoice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact
     *
     * @param Contact $contact Contact
     *
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }
}
