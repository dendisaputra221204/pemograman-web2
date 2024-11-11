<!-- Visibilty.php -->
 <?php

 class visibilty{
    public $public = 'public';
    private $private = 'private';
    protected $protected ='protected';

    function tampilkanproperty(){
        echo "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
 }