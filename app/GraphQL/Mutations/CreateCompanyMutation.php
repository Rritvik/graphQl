<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Company;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class CreateCompanyMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCompany',
    ];

    public function type(): Type
    {
        return GraphQL::type('Company');
    }

    public function args(): array
    {
        return [
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

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

        return Company::create($args);
    }
}
