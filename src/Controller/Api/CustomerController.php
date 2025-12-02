<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

final class CustomerController
{
    public function index(): JsonResponse
    {
        // Generate 10 dummy customers
        $customers = [
            ['id' => 1, 
            'name' => 'John Doe',
             'email' =>   'johndoe@gmail?com'
            ],
            ['id' => 2, 'name' => 'Jane Smith', 
            'email' => 'janeSmin@gmail?com'
            ],
            ['id' => 3, 'name' => 'Alice Johnson', 
            'email' => 'alicej@gmail?com'
            ],
            ['id' => 4, 'name' => 'Bob Brown', 
            'email' => 'bobbrown@gmail?com'
            ],
            ['id' => 5, 'name' => 'Charlie Davis', 
            'email' => 'charlied@gmail?com'
            ],
            ['id' => 6, 'name' => 'Diana Evans', 
            'email' => 'dianae@gmail?com'
            ],
            ['id' => 7, 'name' => 'Frank Green', 
            'email' => 'frankg@gmail?com'
            ],
            ['id' => 8, 'name' => 'Grace Harris', 
            'email' => 'graceh@gmail?com'
            ],
            ['id' => 9, 'name' => 'Hank Irving', 
            'email' => 'hanki@gmail?com'
            ],
            ['id' => 10, 'name' => 'Ivy Jackson', 
            'email' => 'ivyj@gmail?com'     
            ]
        ];
        return JsonResponse::fromJsonString(
            json_encode($customers)
        );
    }
}
