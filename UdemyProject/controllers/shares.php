<?php
class Shares extends Controller {

    protected function index() {
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->index(), true);
    }

    protected function add() {
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->add(), true);
    }

}
?>
