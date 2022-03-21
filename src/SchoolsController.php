<?php

class SchoolsController{
    
    // process rquest based on request method and/or ID
    public function porcessRquest(string $method, ?string $id)
    {
        // check if ID is present
        if (! $id){
            //GET or POST method 
            echo "this will be a GET method for list or POST method"; 
        } else {

            // using switch statement 
            switch ($method) {
                case 'GET':
                    echo "List of items";
                    break;
                case 'PUT':
                    echo "Using PUT to update";
                    break;

                case 'PATCH':
                    echo "Using PATCH to update";
                    break;

                case 'DELETE':
                    echo "Delete item";
                    break;

                default:
                    echo "request method unkown";
                    break;
            }


        }
    }
}