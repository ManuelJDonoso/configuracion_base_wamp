<?php
require_once __DIR__ . '/../models/FileModel.php';

class FileController {
    private $model;

    public function __construct($basePath) {
        $this->model = new FileModel($basePath);
    }

    public function list() {
        $items = $this->model->getDirectoryItems();
        include __DIR__ . '/../views/fileListView.php';
    }
}
