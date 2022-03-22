<?php

class SchoolsController{
    
    // process rquest based on request method and/or ID
    public function porcessRquest(string $method, ?string $id)
    {
        // check if ID is present
        if($id === null || empty($id) ){
            if($method == 'GET'){
                echo 'this will list records';
                
            } elseif($method=='POST'){
                echo "Create new record";

            } else {
                // Method not allowed
                $this->respondMethodNotAllowed("GET, POST");
                exit;
            }


        } else {
            // check if record exist

            // siwtch statement
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

    // method not allowed

    /**
     * Ensuring correct responds method. 
     */
    private function respondMethodNotAllowed(string $allowMethod) : void
    {
        http_response_code(405);
        header("Allow: $allowMethod");
    }
}