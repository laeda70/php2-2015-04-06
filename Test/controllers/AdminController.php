<?php
class AdminController
{

        public function actionAddNews()
        {
           // $id = 'id';
            $short = 'short';
            //$long = 'long';
            if (isset($_POST[$short]))
            {
                echo($_POST[short]);
            }
        }
}
