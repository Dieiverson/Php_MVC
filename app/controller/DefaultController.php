<?php

    namespace app\controller;
    use app\core\Controller;
    class DefaultController extends Controller
    {
        public function message404(string $title, string $message, int $code){
            http_response_code($code);
        $this->load('message/main',[
            'title' => $title,
            'message' => $message
        ]);
        }
    }
?>