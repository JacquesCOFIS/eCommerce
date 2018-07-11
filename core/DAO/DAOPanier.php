<?php

namespace core\dao\s {

    use core\dao as dao;

    class DAOPanier implements dao\DAO
    {

        private static $connection;
        private $table = 'panier';

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