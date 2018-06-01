<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config.php';
require_once 'Lib/Util.php';
require_once 'Lib/AutoLoader.php';
require_once 'Core/Bootstrap.php';
require_once 'Core/View.php';
require_once 'Core/Controller.php';
require_once 'Core/MySql.php';
require_once 'Core/Model.php';

require_once 'App/Entity/Blog.php';
require_once 'App/Model/BlogModel.php';


require_once 'App/Entity/comment.php';
require_once 'App/Model/CommentModel.php';

\Lib\AutloLoader::requires(ENTITY_PATH);
\Lib\AutloLoader::requires(MODEL_PATH);

new Core\Bootstrap();

