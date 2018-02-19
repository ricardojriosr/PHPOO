<?php
class Users extends Controller {
  /*
  protected function index() {
      $viewmodel = new UserModel();
      $this->ReturnView($viewmodel->index(), true);
  }
  */
  protected function register() {
      $viewmodel = new UserModel();
      $this->ReturnView($viewmodel->register(), true);
  }

}
?>
