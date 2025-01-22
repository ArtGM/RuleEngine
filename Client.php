<?php



class Client
{
   public function __construct(private readonly RuleEngine $ruleEngine)
   {
   }

   public function ok(): void
   {
       $user = new User();
       $this->ruleEngine->validate($user);
   }
}