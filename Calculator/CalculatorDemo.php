<?php


namespace App\classes;


class CalculatorDemo
{
    public function myCalculator(){
        print_r($_POST);
        if($_POST['btn'] == '+'){
            $result = $_POST['first_number']+$_POST['second_number'];
            echo $result;
        }
        if($_POST['btn'] == '-'){
            $result = $_POST['first_number']-$_POST['second_number'];
            echo $result;
        }
        if($_POST['btn'] == '*'){
            $result = $_POST['first_number']*$_POST['second_number'];
            echo $result;
        }

    }
}