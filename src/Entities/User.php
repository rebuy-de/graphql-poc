<?php

namespace App\Entities;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use TheCodingMachine\GraphQLite\Annotations\Type;
use TheCodingMachine\GraphQLite\Annotations\Field;

#[Type]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    private string $password = 'password';

    private array $roles;

    public function __construct(private int $id, private string $email)
    {
    }

    #[Field]
    public function getId(): int
    {
        return $this->id;
    }

    #[Field]
    public function getName(): string
    {
        return $this->name;
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
