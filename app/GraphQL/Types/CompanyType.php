<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Company;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CompanyType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Company',
        'model' => Company::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The Auto incremented company ID'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of a company'
            ],
            'contact_email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The primary email of a company'
            ],
            'street_address' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The street address of a company HQ'
            ],
            'city' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The city of a company HQ'
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The country of a cpmpany HQ'
            ],
            'domain' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The domain of a company'
            ]
        ];
    }
}
