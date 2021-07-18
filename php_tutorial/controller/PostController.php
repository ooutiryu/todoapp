<?php
ini_set('display_errors', "On");
require_once ('Controller.php');
require_once ('./model/PostModel.php');
require_once('./model/PostModel.php');
require_once('./model/CategoryModel.php');

/**
 * Class PostController
 */
class PostController extends Controller
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 記事一覧
     */
    public function indexAction()
    {
        $postModel = new PostModel();
        $posts = $postModel->get();
        require("./public/view/post_index.php");
    }

    /**
     * 記事投稿
     */
    public function addAction(){

        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAll();
        $errors = [];
        $title = '';
        $content = '';

        if (@$_POST['submit']) {

            $title = $_POST['title'];
            $content = $_POST['content'];
            $categoryId = $_POST['category'];
            $userid = 0;
            foreach ( $_SESSION['user'] as $session ) {
                // ループ処理をここへ記述
                $userid = $session[0];
                }

                function console_log($data){
                echo '<script>';
                echo 'console.log('.json_encode($data).')';
                echo '</script>';
                }
                console_log($userid);
            // バリデーションチェック
            $errors = $this->addValidation($title, $content, $categoryId);

            // バリデーションエラーがない場合
            if (count($errors) === 0) {
                // DBに登録する
                $postModel = new PostModel();
                $postModel->add($title, $content, $categoryId, $userid);
                header('Location: ../');
                exit();
            }
        }
        require("./public/view/post_add.php");
    }

    /**
     * @param $title
     * @param $content
     * @param $categoryId
     * @return array
     */
    private function addValidation($title, $content, $categoryId){

        $errors = [];

        if (empty($title)){
            $errors['title'] = 'タイトルがありません。<br>';
        }
        if (mb_strlen($title) > 80){
            $errors['title'] = 'タイトルが長すぎます。<br>';
        }
        if (empty($content)){
            $errors['content'] = '本文がありません。<br>';
        }
        return $errors;
    }
}