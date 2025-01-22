<?php

class VerifiedRule implements RuleInterface
{

    public function when(UserInterface $user): bool
    {
        $user->isEmailVerified();
    }

    public function then(UserInterface $user): bool
    {
        return true;
    }
}