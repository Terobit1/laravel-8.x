<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDatabase extends Command
{   
    protected $name = "make:database";
    
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the database'],
        ];
    }
   
    public function fire()
    {
        DB::getConnection()->statement('CREATE DATABASE :schema', ['schema' => $this->argument('name')]);
    } 
}   
