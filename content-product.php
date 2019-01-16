#humpter.nl.fr/wp-content/themes/humpter/template-parts/content-product.php
#kod zmieniający wczepia się we wtyczkę polylang i wygląda tak:

<?php 
//tutaj rozróżniam języki i pakuję je do zmiennej $current na podstawie funkcji polylang pll_the_languages
//pll_the_languages(array('display_names_as'=> 'slug','show_flags'=>0,'show_names'=>1)); 
				
$languages = pll_the_languages( array(
    'display_names_as'       => 'slug',
    'hide_if_no_translation' => 1,
    'raw'                    => true
  ) ); 
  //print_r($languages);
      foreach ( $languages as $language ) {
      // Variables containing language data
      $id             = $language['id'];
      $slug           = $language['slug'];
      $url            = $language['url'];
      $current        = $language['current_lang'] ? 'zie accessoires' : 'voir les accessoires';
      $close          = $language['current_lang'] ? 'dicht' : 'près';
	  $no_translation = $language['no_translation'];
	  }
	  //echo $current;
//tutaj koniec rozróżniania
?>
