<?php
require_once './CalculatorDemo.php';
use App\classes\CalculatorDemo;

if(isset($_POST['btn'])){
    $calculator=new CalculatorDemo();
    $calculator->myCalculator();
}

?>

<form action="" method="POST">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number"/></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="number" name="second_number"/></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" value="<?php  ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type ="submit" name="btn" value="+"/>
                <input type ="submit" name="btn" value="-"/>
                <input type ="submit" name="btn" value="*"/>
                <input type ="submit" name="btn" value="/"/>
                <input type ="submit" name="btn" value="%"/>
            </td>
        </tr>
    </table>
</form>
