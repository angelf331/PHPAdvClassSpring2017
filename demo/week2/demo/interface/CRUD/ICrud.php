<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Angel
 */
interface ICrud {
    //put your code here
    public function create();
    public function read();
    public function readAll();
    public function update();
    public function delete();
    
}
