<?php

namespace Vistiyos\ERP\ERPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceLine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InvoiceLine
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
     * @ORM\Column(name="concept", type="string", length=255)
     */
    private $concept;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal")
     */
    private $unitPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal")
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="vatPercent", type="decimal")
     */
    private $vatPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="net", type="decimal")
     */
    private $net;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="decimal")
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal")
     */
    private $total;

    /**
     * @var Invoice
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="invoiceLines")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     */
    private $invoice;


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
     * Set concept
     *
     * @param string $concept
     * @return InvoiceLine
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * Get concept
     *
     * @return string
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Set unitprice
     *
     * @param string $unitPrice
     * @return InvoiceLine
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return InvoiceLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set discount
     *
     * @param string $discount
     * @return InvoiceLine
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set vatPercent
     *
     * @param string $vatPercent
     * @return InvoiceLine
     */
    public function setVatPercent($vatPercent)
    {
        $this->vatPercent = $vatPercent;

        return $this;
    }

    /**
     * Get vatPercent
     *
     * @return string
     */
    public function getVatPercent()
    {
        return $this->vatPercent;
    }

    /**
     * Set net
     *
     * @param string $net
     * @return InvoiceLine
     */
    public function setNet($net)
    {
        $this->net = $net;

        return $this;
    }

    /**
     * Get net
     *
     * @return string
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return InvoiceLine
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return InvoiceLine
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
     * Get Invoice
     *
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set Invoice
     *
     * @param Invoice $invoice
     * @return $this
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }
}
