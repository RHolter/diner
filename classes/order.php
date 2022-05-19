<?php

//TODO add a description to each method
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;


    /**
     */public function __construct()
{
    $this->_food = ""; //initialized as a string variable
    $this->_meal = "";
    $this->_condiments = "";
}

    /** Return then food item for the order
     * @return string
     */
    public function getFood(): string
    {
        return $this->_food;
    }

    /**
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->_food = $food;
    }

    /**
     * @return string
     */
    public function getMeal(): string
    {
        return $this->_meal;
    }

    /**
     * @param string $meal
     */
    public function setMeal(string $meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * @return string
     */
    public function getCondiments(): string
    {
        return $this->_condiments;
    }

    /**
     * @param string $condiments
     */
    public function setCondiments(string $condiments): void
    {
        $this->_condiments = $condiments;
    }



}