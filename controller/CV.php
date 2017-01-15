<?php

class CVController extends Controller {
    private $view;
    private $model;

    public function __construct($args) {
        parent::__construct($args);
        self::redirectIfNotConnected();
        include "view/CV.php";
        include "model/CV.php";
        $this->view = new CVView("CV.php");
        $this->model = new CVModel();

    }

    public function display() {
        $this->view->setView("cv.php");
    }

    public function ajouterCV() {
        if(isset($_FILES['pdf']['tmp_name'])) {
            $pdf = $_FILES['pdf']['tmp_name'];
            $pdfName = $_FILES['pdf']['name'];
            if($this->model->checkPDFValidity($pdf, $pdfName)) {
                if($this->model->uploadPDF($pdf, $pdfName)) {
                    $this->view->uploadSuccessful();
                } else {
                    View::error(3673);
                }
            } else {
                View::error(3674);
            }
        } else {
            View::error(3675);
        }

    }
}
