<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    public $table = 'imagens';

    public $fillable = [
        'original_name',
        'name',
    ];

    /*
    public static function renameFile($file_name, $new_file_name, $instituicao_prefixo)
    {
        rename(public_path("imagens/".strtolower($instituicao_prefixo)."/$file_name.html"), public_path("imagens/".strtolower($instituicao_prefixo)."/$new_file_name.html"));
    }

    public static function createFile($file_name, $content ,$instituicao_prefixo)
    {
        file_put_contents(public_path("imagens/".strtolower($instituicao_prefixo)."/$file_name.html"), $content);
    }

    public static function deleteFile($file_name, $instituicao_prefixo)
    {
        unlink(public_path("imagens/".strtolower($instituicao_prefixo)."/$file_name.html"));
    }
    */

}
