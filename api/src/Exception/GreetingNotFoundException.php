<?php

declare(strict_types=1);

namespace App\Exception;

use ApiPlatform\Metadata\ErrorResource;
use ApiPlatform\Metadata\Exception\ProblemExceptionInterface;

#[ErrorResource]
class GreetingNotFoundException extends \Exception implements ProblemExceptionInterface
{
    public function getType(): string
    {
        return 'greetingNotFoundException';
    }

    public function getTitle(): ?string
    {
        return "greeting not found";
    }

    public function getStatus(): ?int
    {
        return 404;
    }

    public function getDetail(): ?string
    {
        return 'some details...';
    }

    public function getInstance(): ?string
    {
        return null;
    }
}