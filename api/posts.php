<?php

if ($method == 'GET') {
    if ($id) {
        $data = DB::query("SELECT * FROM $tableName WHERE id=:id", array(':id' => $id));
        
    }
}