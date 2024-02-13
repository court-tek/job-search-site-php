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

    /**
     * Show all listings
     * 
     * @return void
     */
    public function index()
    {
        $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

        loadView('listings/index', [ 'listings' => $listings ]);
    }

    /**
     * Display a single listing
     * 
     * @param array $params
     * @return void
     */
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

    /**
     * Displays the form to add a new listing
     * 
     * @return void
     */
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
        $allowedFields = ['title', 'description', 'salary', 'tags', 'company', 'address', 'city', 'state', 'phone', 'email', 'requirements', 'benefits', 'work_environment'];

        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = 1;                     

        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = ['title', 'description', 'email', 'city', 'state', 'salary'];

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

            $values = [];
            
            foreach ($newListingData as $field => $value) {
                // Convert empty strings to null
                if ($value === '') {
                    $newListingData[$field] = null;
                }
                $values[] = ':' . $field; 
            }

            $values = implode(', ', $values);

            $query = "INSERT INTO listings ({$fields}) VALUES ({$values})";

            $this->db->query($query, $newListingData);

            redirect('/listings');
        }
    }

    /**
     * Delete a listing from the database
     * 
     * @param array $params
     */
    public function destroy($params)
    {
        $id = $params['id'];

        $params = [
            'id' => $id
        ];

        $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        if (!$listing) {
            ErrorController::notFound('Listing Not Found');
            return;
        }

        $this->db->query('DELETE FROM listings WHERE id = :id', $params); 
        
        // Set flash message
        $_SESSION['success_message'] = 'Listing deleted successfully';
        redirect('/listings');
    }

    /**
     * Show the listing edit form
     * 
     * @param array $params 
     * @return void
     */
    public function edit($params)
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

        loadView('listings/edit', ['listing' => $listing]);
    }

    /**
     * Update a listing
     * 
     * @param array $params 
     * @return void
     */
    public function update($params)
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

         $allowedFields = ['title', 'description', 'salary', 'tags', 'company', 'address', 'city', 'state', 'phone', 'email', 'requirements', 'benefits', 'work_environment'];

         $updatedValues = [];

         $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

         $updatedValues = array_map('sanitize', $updatedValues); 

         $requiredFields = ['title', 'description', 'email', 'city', 'state', 'salary'];

         $errors = [];

         foreach ($requiredFields as $field) {
            if (empty($updatedValues[$field]) || !Validation::string($updatedValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }

        if (!empty($errors)) {
            // Reload with errors
            loadView('listings/edit', [
                'listing' => $listing, 
                'errors' => $errors,
            ]);
            exit;
        } else {
            // Submit to the database
            inspectAndDie('Success');
        }
        // loadView('listings/edit', ['listing' => $listing]); 
    }


}   