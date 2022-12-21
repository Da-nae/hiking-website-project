<?php
declare(strict_types=1);

class TagController
{
    private Tags $tagModel;

    public function __construct()
    {
        $this->tagModel = new Tags();
    }

    public function indexTag() : void
    {
        $tags = $this->tagModel->findAllTag();

        include 'app/views/include/header.view.php';
        include 'app/views/tag.view.php';
        include 'app/views/include/footer.view.php';
    }
}