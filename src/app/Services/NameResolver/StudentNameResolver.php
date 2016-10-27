<?php

namespace Services\NameResolver;

class StudentNameResolver implements \Services\NameResolver\NameResolverInterface
{
    
    public function resolve($users)
    {
        // build arrays with students first and last name
        foreach ($users as $i => $user) {
            $firstNames[] = $user->firstName;
            $lastNames[]  = $user->lastName;
        }
        
        $duplicates = array_count_values($firstNames);
        foreach ($users as $i => $user) {
            
            if ($duplicates[$user->firstName] != 1) {
                $user->displayName = $user->firstName . " " . substr($user->lastName, 0, 1);
            } else {
                $user->displayName = $user->firstName;
            }
        }
    }
}