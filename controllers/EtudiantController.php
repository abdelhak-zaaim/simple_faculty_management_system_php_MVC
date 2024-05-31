<?php
require_once 'models/Etudiant.php';

class EtudiantController extends BaseController{
    public function index() {
        $students = Etudiant::getAll();
        require_once 'views/etudiant/index.php';
    }

    public function show($id) {
        $student = Etudiant::getById($id);
        require_once 'views/etudiant/show.php';
    }

    public function create() {
        require_once 'views/etudiant/create.php';
    }

    public function store($data) {
        $student = new Etudiant(null, $data['fName'], $data['lName'], $data['email'], $data['password'], $data['codeE'], $data['note'], $data['filiere']);
        $student->save();
        $this->index();
    }

    public function delete($id) {
        $student = Etudiant::getById($id);
        $student->delete();
        $this->index();
    }
}

