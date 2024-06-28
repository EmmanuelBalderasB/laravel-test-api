<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorMap = [];

    public function transform(Request $request): array
    {
        // Initialize an empty array to hold the transformed query parameters
        $queryItems = [];
        
        // Iterate over the safe parameters defined in the class
        foreach ($this->safeParams as $param => $operators) {
            // Retrieve the query parameter value from the request
            $query = $request->query($param);
            
            // If the query parameter is not set, skip to the next iteration
            if (!isset($query)) {
                continue;
            }

            // Determine the database column name. Use the parameter name as a fallback if not mapped
            $column = $this->columnMap[$param] ?? $param;

            // Iterate over the operators associated with the current parameter
            foreach ($operators as $operator) {
                // If the operator exists in the query, construct a query item
                if(isset($query[$operator])) {
                    // Add the query item to the array. It includes the column name, operator, and value
                    $queryItems[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            } 
        }
        // Return the array of transformed query parameters
        return $queryItems;
    }
}