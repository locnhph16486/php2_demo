<?php

use App\Controllers\SchoolController;
use App\Controllers\TeacherController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){
    $router = new RouteCollector();

    $router->get('schools', [SchoolController::class, 'index']);
    $router->get('schools/xoa/{id}', [SchoolController::class, 'xoa']);
    $router->get('schools/tao', [SchoolController::class, 'taoForm']);
    $router->post('schools/tao', [SchoolController::class, 'luuTao']);
    $router->get('schools/sua/{id}', [SchoolController::class, 'suaForm']);
    $router->post('schools/sua/{id}', [SchoolController::class, 'luuSua']);

    $router->get('teachers', [TeacherController::class, 'index']);
    $router->get('teachers/xoa/{id}', [TeacherController::class, 'xoa']);
    $router->get('teachers/tao', [TeacherController::class, 'taoForm']);
    $router->post('teachers/tao', [TeacherController::class, 'luuTao']);
    $router->get('teachers/sua/{id}', [TeacherController::class, 'suaForm']);
    $router->post('teachers/sua/{id}', [TeacherController::class, 'luuSua']);

    

    // // đăng nhập 
    // // đăng xuất => LoginController và hàm logout
    // $router->any('logout', [LoginController::class, 'logout']);
    // // danh sách môn học - mon-hoc
    // // SubjectController => index
    // $router->get('mon-hoc', [SubjectController::class, 'index']);
    // // {id} vị trí tham số đường dẫn
    // $router->get('mon-hoc/xoa/{id}', [SubjectController::class, 'xoa']);

    // // các bài quiz của môn học
    // $router->get('bai-quiz', [QuizController::class, 'index']);
    // $router->get('bai-quiz/tao-moi', [QuizController::class, 'addForm']);
    // $router->post('bai-quiz/tao-moi', [QuizController::class, 'saveAdd']);
    // $router->get('bai-quiz/cap-nhat/{id}', [QuizController::class, 'editForm']);
    // $router->post('bai-quiz/cap-nhat/{id}', [QuizController::class, 'saveEdit']);
    // $router->get('bai-quiz/xoa/{id}', [QuizController::class, 'remove']);
    // các câu hỏi của 1 bài quiz
    // $router->get('cau-hoi', [QuestionController::class, 'index']);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>