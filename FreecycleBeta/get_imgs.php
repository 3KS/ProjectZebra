<?php
$img_dir = "uploads/";
 
$images = scandir($img_dir);
 
$html = '';
 
$html .='';
foreach($images as $img)     {
        if($img === '.' || $img === '..') {continue;}         
 
            if (  (preg_match('/.jpg/',$img))  ||  (preg_match('/.gif/',$img)) || (preg_match('/.tiff/',$img)) || (preg_match('/.png/',$img)) ) {                
 
             $html .='<li>
                    <a href="#" data-largesrc="'.$img_dir.$img.'" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                        <img id="nine" class="animated fadeInUp" src="'.$img_dir.$img.'" alt="img01" />
                    </a>
                </li>';
            } else { continue; }    
    }
$html .='' ;
 
echo $html ;
//'.$img_dir.$img.'
?>
