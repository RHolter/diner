<?php

/*
 * diner/model/data-layer.php
 * Returns data for the diner app
 */

// get the meals for the order form
function getMeals()
{
    return array("breakfast","brunch", "lunch", "dinner");
}

function getCondiments()
{
    return array("ketchup", "mustard", "hot sauce", "mayo","soy sauce");
}

