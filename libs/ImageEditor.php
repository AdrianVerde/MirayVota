<?php

// Copyright (c) 2009 Keyvan Akbary
//
// Permission is hereby granted, free of charge, to any person obtaining a copy 
// of this software and associated documentation files (the "Software"), to 
// deal in the Software without restriction, including without limitation the 
// rights to use, copy, modify, merge, publish, distribute, sublicense, and/or 
// sell copies of the Software, and to permit persons to whom the Software is 
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in 
// all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING 
// FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS 
// IN THE SOFTWARE.

/**
 * Clase de manipulación de imágenes.
 *
 * @package    imageeditor
 * @author     Keyvan Akbary Nieto <keyvan@kiwwito.com>
 * @version    1.0.0
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 */
class ImageEditor {
  //Nombre de fichero
	private $_filename = '';
	//Recurso imagen
  private $_img      = '';
  //Datos de la imagen
	private $_data     = '';
	//Imagen copia
	private $_imgCopy     = '';

  //Constantes de clase
  const JPG_FORMAT = 0;
  const GIF_FORMAT = 1;
  const PNG_FORMAT = 2;
  const BMP_FORMAT = 3;
  
  private $_autoFormat = 0;

  //Calidad
  private $_quality = 100;

  /**
  * Función constructora
  * @param string $fileName nombre de fichero a editar
  */
	public function __construct ($fileName) {
		if(!is_file($fileName))
			throw new Exception('El fichero especificado "' . $fileName . '" no existe');

		$this->_fileName = $fileName;
		$this->_data = getimagesize($this->_fileName);

    //Analizamos el tipo de datos
		switch($this->_data['mime']) {
			case 'image/pjpeg':
			case 'image/jpeg':
        $this->_img = imagecreatefromjpeg($this->_fileName);
        $this->_autoFormat = self::JPG_FORMAT;
        break;
			case 'image/gif':
        $this->_img = imagecreatefromgif ($this->_fileName);
        $this->_autoFormat = self::GIF_FORMAT;
        break;
			case 'image/png':
        $this->_img = imagecreatefrompng ($this->_fileName);
        $this->_autoFormat = self::PNG_FORMAT;
        break;
			case 'image/x-ms-bmp':
        $this->_img = imagecreatefromwbmp($this->_fileName);
        $this->_autoFormat = self::BMP_FORMAT;
        break;
			default:
        throw new Exception('Formato no soportado');
		}
	}

	/**
	* Función auxiliar para redimensionar
	*/
	private function _auxResize ($wx, $hx, $wm = 0, $hm = 0) {
    
    if($wx != $wm && $hx != $hm && $wm != 0 && $hm != 0)
			throw new Exception('Malas dimensiones');

		$r = $this->_data[0] / $this->_data[1];
		$rx = $wx / $hx;

		if($wm == 0 || $hm == 0)
			$rm = $rx;
		else
			$rm = $wm / $hm;

		$dx=0; $dy=0; $sx=0; $sy=0; $dw=0; $dh=0; $sw=0; $sh=0; $w=0; $h=0;

		if($r > $rx && $r > $rm) {
			$w = $wx;
			$h = $hx;
			$sw = $this->_data[1] * $rx;
			$sh = $this->_data[1];
			$sx = ($this->_data[0] - $sw) / 2;
			$dw = $wx;
			$dh = $hx;
		} elseif($r < $rm && $r < $rx) {
			$w = $wx;
			$h = $hx;
			$sh = $this->_data[0] / $rx;
			$sy = ($this->_data[1] - $sh) / 2;
			$sw = $this->_data[0];
			$dw = $wx;
			$dh = $hx;
		} elseif($r >= $rx && $r <= $rm) {
			$w = $wx;
			$h = $wx / $r;
			$dw = $wx;
			$dh = $wx / $r;
			$sw = $this->_data[0];
			$sh = $this->_data[1];
		} elseif($r <= $rx && $r >= $rm) {
			$w = $hx * $r;
			$h = $hx;
			$dw = $hx * $r;
			$dh = $hx;
			$sw = $this->_data[0];
			$sh = $this->_data[1];
		} else {
			throw new Exception('No se puede redimensionar la imagen');
		}

		if (!$this->_imgCopy = @imagecreatetruecolor($w, $h)) throw new Exception ('No se ha podido copiar la imagen');
		if (!@imagecopyresampled($this->_imgCopy, $this->_img, $dx, $dy, $sx, $sy, $dw, $dh, $sw, $sh))
		  throw new Exception ('No se ha podido redimensionar la imagen');
		$this->_img = $this->_imgCopy;

		return true;
	}
	/**
	* Redimensionar una imagen
	* @param int $width ancho nuevo
	* @param int $height alto nuevo
	*/
	public function resize ($width, $height){
    return $this->_auxResize ($width, $height);
	}

	/**
	* Redimensionar manteniendo las proporciones
	* @param int $maxWidth ancho máximo
	* @param int $maxHeight alto máximo
	*/
	public function fixResize ($maxWidth, $maxHeight){
	 //Si se quiere establecer a ese tamaño maximo solo la altura
    return ($this->_data[0] < $this->_data[1]) ?
      $this->_auxResize ($this->_data[0], $maxHeight, $this->_data[0] , $this->_data[1]) :
      $this->_auxResize ($maxWidth, $this->_data[1], $this->_data[0] , $this->_data[1]);
	}
  /**
   * Saber si la imágen es mas pequeña que el tamaño especificado (cuadrado)
   * @param int $size tamaño (cuadrado) a comparar
   * @return boolean es mas pequeña
   */
  protected function _isSmaller ($size)
  {
    //Si la imágen que pretendemos redimensionar a unas dimensiones menores
    return (imagesx($this->_img) <= $size && imagesy($this->_img) <= $size);
  }
	/**
	* Redimensionar manteniendo las proporciones (no propasara el cuadrado especificado)
	* @param int $size tamaño máximo
	*/
	public function squareFixResize ($size){
    //Si la imágen es mas pequeña que el tamaño que se quiere establecer, no redimensionamos
    if ($this->_isSmaller($size)) return false;
	  //Si se quiere establecer a ese tamaño maximo solo la altura
    return $this->fixResize($size, $size);
	}

	/**
	* Redimensionar y recortar a un cuadrado
	* @param int $size alto y anho
	*/
	public function squareResize ($size) {
    //Si la imágen es mas pequeña que el tamaño que se quiere establecer, no redimensionamos
    if ($this->_isSmaller($size)) return false;
	  return $this->_auxResize ($size, $size);
	}

	/**
	* Obtener string generada
	* @param int $type formato
	*/
	public function getString($type = JPG) {
		$contents = ob_get_contents();
		if ($contents !== false) ob_clean();
		else ob_start();

    //Mostramos
		$this->show($type);

    //Capturamos contenido
		$_data = ob_get_contents();
		if ($contents !== false) {
			ob_clean();
			echo $contents;
		}
		else ob_end_clean();
		return $_data;
	}

  /**
  * Funcion auxiliar para generar la imagen
  * @param boolean $show mostrar por pantalla (false = escribir en fichero)
  * @param string $fileName nombre de fichero a escribir
  * @param int $type formato JPG_FORMAT | GIF_FORMAT | PNG_FORMAT | BMP_FORMAT
  */
  private function _auxGenerate ($show, $fileName = '', $type = self::JPG_FORMAT) {
    //Procesamos conforme haya que mostrar
    if ($show) {
      $fileName = '';
    } else {
      $fileName = ($fileName == '') ? $this->_fileName : $fileName;
    }

    //Generamos según formato
    switch($type) {
			case self::GIF_FORMAT:
        if ($show) header('Content-type: image/gif');
        imagegif ($this->_img, $fileName);
        return true;
        break;
			case self::PNG_FORMAT:
        if ($show) header('Content-type: image/png');
        imagepng ($this->_img, $fileName);
        return true;
        break;
			case self::BMP_FORMAT:
        if ($show) header('Content-type: image/bmp');
        imagewbmp($this->_img, $fileName);
        return true;
        break;
			case self::JPG_FORMAT:
			default:
        if ($show) header('Content-type: image/jpg');
        imagejpeg($this->_img, $fileName, $this->_quality);
        return true;
		}
		throw new Exception('Fallo al generar la imagen');
  }

  /**
  * Establecer la calidad de la imagen
  * @param int $newQuality calidad
  */
  public function setQuality ($newQuality) {
    if ($newQuality < 0 || $newQuality > 100)
      throw new Exception ('Calidad de imagen no valida');
    $this->_quality = $newQuality;
  }

  /**
	* Guardar la imagen generada
	* @param string $fileName nombre fichero
	* @param int $type formato JPG_FORMAT | GIF_FORMAT | PNG_FORMAT | BMP_FORMAT
	*/
	public function save($fileName = '', $type = -1) {
    $type = ($type == -1) ? $this->_autoFormat : $type;
    $this->_auxGenerate (false, $fileName, $type);
	}

	/**
	* Mostrar salida generada al navegador
	* @param int formato JPG_FORMAT | GIF_FORMAT | PNG_FORMAT | BMP_FORMAT
	*/
	public function show ($type = self::JPG_FORMAT) {
		$this->_auxGenerate (true, '', $type);
	}

  /**
  * Destruir las imágenes generadas
  */
	public function __destruct() {
		@imagedestroy($this->_img);
		if ($this->_imgCopy != '') @imagedestroy ($this->_imgCopy);
	}
}
