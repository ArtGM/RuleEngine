<?php

class User implements UserInterface
{

    public function getFirstName(): string
    {
        return 'John';
    }

    public function getLastName(): string
    {
        return 'Doe';
    }

    public function getEmail(): string
    {
        return 'test@email.com';
    }

    public function isEmailVerified(): bool
    {
        return true;
    }
}