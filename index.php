<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
//include_once './Model/User.php';
//include './Model/User.php';
//require './Model/User.php';
require_once 'Core/Model.php';
require_once 'Model/User.php';
//require_once 'Model/Item.php';
require_once 'Entity/UserEntity.php';
require_once 'Lib/ApiExecutor.php';
use Model\User;

//Make a new user object
$userM = new User();
$users = $userM->getAllUsers();
?>

<html>
<head>
    <title> Using APIs </title>
</head>
<body>
    <div>
        <ul>
            <?php foreach ($users as $user):?>

                <li> 
                <img src="<?php echo $user->avatar;?>" width="100" height="100" /></br>
                <?php echo $user->getFullName()?>
                
                </li>
<?php endforeach?>   
        </ul>
</div>
</body>
</html>
