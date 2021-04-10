<?php

class juancarloswebsitesController implements ControllerInterface
{
    /**
     * $blogManager model instance
     * @var BlogManager
     */
    private $blogManager;

    /**
     * $blogManager model instance
     * @var UserManager
     */
    private $userManager;

    public function __construct($blogModel, $userModel)
    {
        $this->blogManager = $blogModel;
        $this->userManager = $userModel;
    }

    public function indexAction($request)
    {
        $View = new BlogView($this->blogManager);
        $View->renderView();
    }
}
