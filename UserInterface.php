<?php

interface UserInterface
{
    public function getFirstName(): string;

    public function getLastName(): string;

    public function getEmail(): string;

    public function isEmailVerified(): bool;
}