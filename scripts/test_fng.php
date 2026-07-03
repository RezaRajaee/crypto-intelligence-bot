<?php

/**
 * Test script for FearGreedConnector 
 */

// Import the connector class / وارد کردن کلاس کانکتور
require_once __DIR__ . '/../api-connectors/FearGreedConnector.php';

// Initialize the object 
$connector = new FearGreedConnector();

// Get the index 
$result = $connector->getLatestIndex();

// Output the result to console 
echo "--- Fear & Greed Test ---\n";
print_r($result);
echo "\n----------------------------------------\n";
