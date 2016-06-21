<?php
if(isset($_POST['a']) && isset($_POST['b'])){

    switch($_POST['select']){
        case "plus":
            $result = $_POST['a'] + $_POST['b'];
            break;
        case "minus":
            $result = $_POST['a'] - $_POST['b'];
            break;
        case "mult":
            $result = $_POST['a'] * $_POST['b'];
            break;
        case "segm":
            if($_POST['b'] == 0)            {
                $result = "Деление на ноль невозможно!";
            }
            else{
                $result = $_POST['a'] / $_POST['b'];
            }
            break;
    }
}
?>
<html>
<head>
    <title>Сумматор</title>
</head>
<body>
    <form method="post" action="lesson5.php">
        <!--<input type="text" name="a" value=" <?php echo $_POST['a'];?>" required>
        <?php echo " + ";?>
        <input type="text" name="b" value=" <?php echo $_POST['b'];?>" required>
        <input type="submit" name="equal" value="=">
        <?php echo $result;?>-->
        <input type="text" name="a" value=" <?php echo $_POST['a'];?>" required>
        <select name="select">
            <option selected disabled>Выберите операцию</option>
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mult">*</option>
            <option value="segm">/</option>
        </select>
        <input type="text" name="b" value=" <?php echo $_POST['b'];?>" required>
        <input type="submit" name="equal" value="=">
        <?php echo $result;?>
    </form>
</body>
</html>
