<?php
class Users extends Controller {

  protected function index() {
      $viewmodel = new UserModel();
      $this->ReturnView($viewmodel->index(), true);
  }

}
?>
