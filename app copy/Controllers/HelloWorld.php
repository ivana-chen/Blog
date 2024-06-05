<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        echo 'Hello, World!';
    }
    public function testDatabaseConnection()
    {
        // Load the database library
        $db = \Config\Database::connect();
    
        // Check if the database connection is successful
        if ($db->connect()) {
            echo 'Database connected successfully!<br>';

            // Perform a basic query (e.g., select the version of MySQL)
            $query = $db->query('SELECT VERSION() as version');
            $result = $query->getRow();

            // Display the MySQL version
            if ($result) {
                echo 'MySQL version: ' . $result->version;
            } else {
                echo 'Unable to fetch MySQL version.';
            }
        } else {
            echo 'Failed to connect to the database.';
        }
    }
    
}
