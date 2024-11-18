<?php

declare(strict_types=1);

namespace App\Resource;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Operation;
use App\Exception\GreetingNotFoundException;
use App\State\Provider\GreetingItemProvider;

#[ApiResource(
    shortName: 'Greeting',
    operations: [
        new Get(provider: GreetingResource::class.'::provide'),
    ],
)]
final class GreetingResource
{
    public function __construct(
        #[ApiProperty(identifier: true, readable: true, writable: false)]
        public int $id,
    ) {}

    public static function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        throw new GreetingNotFoundException();
    }
}