<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Categoria;

class Image extends Model
{
    //
    
//    public function arquivo()
//    {
//        return $this->arquivo;
//    }

    protected $fillable = ['tipo', 'legenda', 'descricao'];
    
    public function projeto()
    {
        return $this->belongsTo('App\Projeto');
    }

    public function getFilename()
    {
        if (isset($this->arquivo) && $this->arquivo != "")
            return $this->projeto->getFolder() . basename($this->arquivo);
        else
            return "";
    }

//    Overrides
    public function deleteRecord()
    {
        // Apaga a imagem
        $this->deleteFile();
        // Apaga o registro
        $this->delete();
    }

    public function deleteFile()
    {
        if (file_exists($this->getFilename()))
        {
            unlink($this->getFilename());
        }
    }

// Static methods
    public static function getTipos()
    {
//        return Image::distinct()->select('tipo')->get();
//        return Image::distinct()->lists('tipo','tipo');
//        return DB::select('select distinct tipo from images');
		return Categoria::where('tipo', '=', 'images')->lists('nome','nome');			
    }

    public static function nextId()
    {
        return Image::max('id')+1;
    }
}
