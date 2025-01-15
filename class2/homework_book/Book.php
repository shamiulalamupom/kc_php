<?php
class Book {
    private string $title;
    private float $price;
    private float $vat;

    public function __construct(string $title, float $price, float $vat) {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setVat($vat);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        if (isset($title) && is_string($title) && strlen($title) > 0) {
            $this->title = $title;
        }

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        if (isset($price) && is_numeric($price) && $price > 0)
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of vat
     */ 
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set the value of vat
     *
     * @return  self
     */ 
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    public function getTotalWithVat() {
        return $this->price + ($this->price * $this->vat / 100);
    }
}
?>