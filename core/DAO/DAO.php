<?php

namespace core\dao{
    interface DAO{
        public function create($param);
        public function get($param);
        public function update($param);
        public function delete($param);
    }
}