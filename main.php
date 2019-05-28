<?php

include('Models.php');
include('Views.php');
include('Controller.php');


$m = new Model();
$c = new Controller($m);
$v = new View($c, $m);

echo $v->output();



// $Aboutmodel = new Model();
// $Aboutcontroller = new Controller($Aboutmodel);
// $Aboutview = new View($Anoutcontroller, $Aboutmodel);

// $Portfoliomodel = new Model();
// $Portfoliocontroller = new Controller($Portfoliomodel);
// $Portfolioview = new View($Portfoliocontroller, $Portfoliomodel);

// $page = $_GET['page'];



// if (!empty($page)) {

//     $data = array(
//         'about' => array('model' => $Aboutmodel, 'view' => $Aboutview, 'controller' => $Aboutcontroller),
//         'portfolio' => array('model' => 'PortfolioModel', 'view' => 'PortfolioView', 'controller' => 'PortfolioController')
//     );

//     foreach($data as $key => $components){
//         if ($page == $key) {
//             $model = $components['model'];
//             $view = $components['view'];
//             $controller = $components['controller'];
//             break;
//         }
//     }

//     if (isset($model)) {
//         $m = new Model();
//         $c = new Controller($m);
//         $v = new View($c, $m);
//         echo $v->output();
//     }

    
// }


?>
