<?php
namespace Infrastructure\Repositories;


use Domains\Repositories\TableRepository;

class ConcreteTableRepository implements TableRepository
{
      public function get() {
            return 'test';
      }
}
