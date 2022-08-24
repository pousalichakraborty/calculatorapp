<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User inphut 1</title>
</head>
<body>
    <?php
    function Addition($a,$b)
    {
        return $a+$b;
    }
    function Subtraction($a,$b)
    {
        return $a-$b;
    }
    function Multiplition($a,$b)
    {
        return $a*$b;
    }
    function Division($a,$b)
    {
        return $a/$b;
    }
    ?>
    <h1>Calculator</h1>
    <form name="Calculator" method="POST">
        <table cellpadding="10">
            <tr>
                <td>Enter 1st number</td>
                <td><input type="number" name="n1"required></td>
            </tr>
            <tr>
                <td>Enter 2nd number</td>
                <td><input type="number" name="n2" required></td>
            </tr>
            <tr>
                <td>Select Operation</td>
                <td>
            <select name="Select">
                <option value=""selected>-Select Operation-</option>
                <option value="Addition">Addition</option>
                <option value="Subtraction">Subtraction</option>
                <option value="Multiplition">Multiplition</option>
                <option value="Division">Division</option>
            </select>
             </td>
            </tr>
            
            <td><input type="submit" name="ok" value="Get result"></td>
        </table>
    </form>
    <?php
    if(isset($_POST['ok']))
    {
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $Select=$_POST['Select'];
        switch($Select)
        {
            case 'Addition':
                echo "Addition is ",$n1+$n2;
                break;
             case 'Subtraction':
                 echo "Subtraction is ",$n1-$n2;
                 break;
             case 'Multiplition':
                 echo "Multiplition is ",$n1*$n2;
                    break;
             case 'Division':
                 echo "Division is ",$n1/$n2;
                    break;  
             default:
                 echo '<p style="color:red">please select an operation</p>';   
                 break; 
        }
    }
    ?>
</body>
</html>