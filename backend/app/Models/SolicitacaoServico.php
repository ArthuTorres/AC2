<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolicitacaoServico extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        "cliente_id",
        "tipo_equipamento",
        "marca",
        "modelo",
        "periodo_preferencial",
        "descricao_problema",
        "status"
    ];

    public $belongsTo = ['cliente'];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public $hasMany = ['arquivos', 'propostas'];
    public function arquivos()
    {
        return $this->hasMany(ArquivoSolicitacaoServico::class);
    }

    public function propostas()
    {
        return $this->hasMany(PropostaServico::class);
    }
}
