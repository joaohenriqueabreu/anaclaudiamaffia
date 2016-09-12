<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\File;

class Projeto extends Model
{
    protected $fillable = ['nome', 'resumo', 'descricao_completa', 'frase_destaque', 'cidade'];

//    base_path() . '/public/img/projetos/' . 'projeto-' . $this->id . '/';

//    Key declarations
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function deleteRecord()
    {
        //	    Primeiro deleta as imagens e as pastas
        //      As pastas não estão sendo deletadas, então é preciso criar um processo para faze-lo
        foreach($this->images()->get() as $image)
        {
            $image->deleteRecord();
        }
//        $this->images()->deleteRecord();

        $this->delete();
    }

//    Class functions
    public function getImageArquivo($tipo)
    {
        if (!$this->images->isEmpty())
        {
            $result = $this->images->where('tipo',$tipo);
            if(!$result->isEmpty())
            {
                return $result->first()->arquivo;
            }
        }
    }

    public function outrosProjetos()
    {
        return Projeto::where('id','!=',$this->id)->get();
    }

    public function hasFolder()
    {
        return file_exists($this->getFolder());
    }

    public function getFolder()
    {
        $folder = base_path() . '/public/img/projetos/' . 'projeto-' . $this->id . '/';
        return $folder;
    }

    public function getAssetFolder()
    {
        $folder = '/img/projetos/' . 'projeto-' . $this->id . '/';
        return $folder;
    }

    public function createFolder()
    {
        $folder = $this->getFolder();
        File::makeDirectory($folder);
    }

    public function deleteFolder()
    {
        $folder = $this->getFolder();
        File::rmdir($folder);
    }

//    Static functions
    public static function getCategorias()
    {
//        return Categoria::lists('nome','id');
		return Categoria::where('tipo', '=', 'projetos')->lists('nome','id');
    }

//    Deprecated section
////    Deprecated - substituir por getImageArquivo
//    public function imagemPrincipal()
//    {
//        if (!$this->images->isEmpty())
//        {
//            $result = $this->images->where('tipo','principal');
//            if(!$result->isEmpty())
//            {
//                return $result->first()->arquivo;
//            }
//        }
//    }

////    Deprecated - substituir por getImageArquivo
//    public function imagemMini()
//    {
//        if (!$this->images->isEmpty())
//        {
//            $result = $this->images->where('tipo','mini');
//            if(!$result->isEmpty())
//            {
//                return $result->first()->arquivo;
//            }
//        }
//        return $this->images->where('tipo','mini')->first()->arquivo;
//    }
}
