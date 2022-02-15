<?php

class View{

 /* Method responsible for return the content view
  * @param  string $view
  * @return string 
  */
  private static function getContentView($view){
     $file = __DIR__.'/../../resources/view/'.$view.'.html';
	 return file_exists($file) ? file_get_contents($file) : '';
  }

 /* Method responsible for return the rendered content of one view
  * @param  string $view
  * @return string
  */
  public static function render($view){
	// Conteudo da view
    $contentView = self::getContentView($view);
	// Retorna o conteudo renderizado
	return $contentView;
  }
  
}