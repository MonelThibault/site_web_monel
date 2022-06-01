<?php

class Items
{
    //--------------------------ATTRIBUTS
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $imageUrl;
    protected float $weight;
    protected int $stock;
    protected bool $available;

    //--------------------------METHODES
    function __construct(string $name, string $description, float $price, float $weight, bool $available, string $imageUrl, int $stock)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->weight = $weight;
        $this->available = $available;
        $this->imageUrl = $imageUrl;
        $this->stock = $stock;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

}

class Torchonnier extends Items
{

    //--------------------------ATTRIBUTS
    private string $torchonnier;

    public function __construct(string $name, string $description, float $price, float $weight, bool $available, string $imageUrl, int $stock, string $torchonnier)
    {
        parent::__construct($name, $description, $price, $weight, $available, $imageUrl, $stock);
        $this->torchonnier = $torchonnier;
    }



    //--------------------------GETTERS / SETTERS
    /**
     * @return string
     */
    public function getTorchonnier(): string
    {
        return $this->torchonnier;
    }

}

?>


<body>

</body>