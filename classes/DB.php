<?php

class DB {
public function __construct() {
    mysqli_connect('localhost', 'root', '', 'test');
}
    public function query($sql, $class='') {
        $res = mysqli_query($sql);
        if(false === $res) {
            return false;
        }
        while ($row = mysqli_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }
}