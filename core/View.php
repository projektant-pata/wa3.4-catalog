<?php
trait View {

    public function showTemplate($data, $template) {
        if(!$template) {
           die("šablona nezadána");
        }
    
        $template_file = VIEWS.$template.".php"; //cesta k sablone
    
        if(!file_exists( $template_file))  {
            echo "soubor šablony neexistuje";
            die();
        }
        //extrahujeme data z pole
        if(is_array($data)) {   //POKUD JSOU $DATA POLE
            extract($data); //jednotlive promenne z pole
        }
    
        include $template_file;
    }

}