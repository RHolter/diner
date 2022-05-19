<?php

/*
 * diner/model/data-layer.php
 * Returns data for the diner app
 */

class Datalayer
{
    //static methods do not access instance data(fields)
    // get the meals for the order form
    static function getMeal()
    {
        return array("breakfast", "brunch", "lunch", "dinner");
    }

    // get the condiments for the order form
   static function getCondiments()
    {
        return array("ketchup", "mustard","mayo", "hot sauce", "soy sauce","salt","pepper");
    }
}

