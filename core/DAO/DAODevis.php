<?php

namespace core\dao\d {

    use core\dao as dao;

    class DAODevis implements dao\DAO
    {

        private static $connection;
        private $table = 'devis';

        public function __construct()
        {
            if (empty(self::$connection)) {
                self::$connection = eco_connect();
            }
        }

        public function create()
        {

        }

        public function get()
        {

        }

        public function update()
        {

        }

        public function delete()
        {

        }

    }
}