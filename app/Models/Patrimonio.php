<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao', 'potencia_instalada_servico', 'potencia_disponivel', 'ano', 'nivel', 'transformadores', 'ponta_data', 'estado_ actual', 'nota', 'barramento', 'configuracao', 'capacidade_linhas', 'circuito', 'comprimento', 'tipo_torres', 'tipo_condutor', 'tipo_isoladores', 'cabo_guarda', 'estado_actual', 'imagem', 'tipo', 'zona'
    ];
}
