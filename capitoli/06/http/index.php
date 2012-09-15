<?php

/** un echo server, che rispedicse al client i parametri inviati */
header('Content-Type:text/html');

switch ($_SERVER['REQUEST_METHOD'])
{
	case 'GET':
			return var_export($_GET ,true);
		break;
	case 'POST':
			return file_get_contents("php://input");
		break;
	case 'PUT':
			$post_vars = null;
			parse_str(file_get_contents("php://input"), $post_vars);
			return var_export($post_vars, true);
	case 'DELETE':
		break;
	default:
				
}
