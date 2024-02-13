<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class ListingController
{
    protected $db;
    
    public function __construct()
    {
        $config = require basePath('../config/db.php');
        $this->db = new Database($config);
    }

    public function index()
    {
        $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

        loadView('listings/index', [ 'listings' => $listings ]);
    }

    public function show($params)
    {
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $listing = $this->db->query('SELECT * FROM listings where id = :id', $params)->fetch();

        if (!$listing) {
            ErrorController::notFound('Listing Not Found');
            return;
        }

        loadView('listings/show', ['listing' => $listing]);
    }

    public function new()
    {
        loadView('listings/new');
    }

    /**
     * Save data to the database
     * 
     * @return void
     */
    public function create()
    {
        $allowedFields = ['title', 'description', 'salary', 'requirements', 'benifits', 'company', 'address', 'city', 'state', 'phone', 'email'];

        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = 1;                     

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = ['title', 'description', 'email', 'city', 'state'];

        $errors = [];

        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }
        
        if (!empty($errors)) {
            // Reload with errors
            loadView('listings/new', [
                'errors' => $errors,
                'listing' => $newListingData
            ]);
        } else {
            // Submit data
           $fields = [];
           
            foreach ($newListingData as $field => $value) {
                $fields[] = $field;
            }

            $fields = implode(', ',  $fields); 

            inspectAndDie($fields);
        }
    }
}   