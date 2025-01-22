<?php

interface RuleInterface
{
    public function when(UserInterface $user): bool;

    public function then(UserInterface $user): bool;
}