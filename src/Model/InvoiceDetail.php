<?php

namespace PabloVeintimilla\FacturaEC\Model;

use JMS\Serializer\Annotation as JMSSerializer;

/**
 * Invoice detail model.
 *
 * @JMSSerializer\ExclusionPolicy("all")
 * @JMSSerializer\XmlRoot("detalle")
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class InvoiceDetail extends Detail
{
    /**
     * @JMSSerializer\Expose
     * @JMSSerializer\Type ("string")
     * @JMSSerializer\XmlElement(cdata=false)
     * @JMSSerializer\SerializedName("descripcion")
     */
    private $description;
    /**
     * @JMSSerializer\Expose
     * @JMSSerializer\Type ("float")
     * @JMSSerializer\XmlElement(cdata=false)
     * @JMSSerializer\SerializedName("descripcion")
     *
     * @var float
     */
    private $quantity;
    /**
     * @JMSSerializer\Expose
     * @JMSSerializer\Type ("float")
     * @JMSSerializer\XmlElement(cdata=false)
     * @JMSSerializer\SerializedName("precioUnitario")
     *
     * @var float
     */
    private $unitPrice;

    public function getDescription()
    {
        return $this->description;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}