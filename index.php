
<?php
 // um dos mais utilizados
//em até projetos em grande porte

interface  VideoServiceInterface{
public function getEMBED();
}

class Yotube implements VideoServiceInterface{
    private $url;
    public function __construct($url) {
        $this->url = $url;
    }
    public function getEMBED(){
        return '<iframe>'.$this->url.'</iframe>';
    }
}

class Vimeo implements VideoServiceInterface{
    private $url;
    public function __construct() {
        $this->url = $url;
    }
    public function getEMBED(){
        return '<video>'.$this->url.'</video>';
    }
}

class Wistia implements VideoServiceInterface{
    private $url;
    public function __construct() {
        $this->url = $url;
    }
    public function getEMBED(){
        return '<coisa>'.$this->url.'</coisa>';
    }
}

class Aula{
    private $video;
    
    public function __construct(VideoServiceInterface $video) {
        $this->video = $video;
    }
    
    public function getVideoHtml(){
        return $this->video->getEMBED();
                
    }
}
$aula = new Aula(new Yotube('123'));
echo "HTML: ".$aula->getVideoHtml();
?>
    