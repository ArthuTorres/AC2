<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropostaServico extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        "solicitacao_servico_id",
        "prestador_servico_id",
        "descricao_proposta",
        "valor_servico",
        "prazo",
        "status"
    ];

    public $belongsTo = ["solicitacao_servico", "prestador_servico"];
    public function solicitacao_servico(){
        return $this->belongsTo(SolicitacaoServico::class);
    }
    
    public function prestador_servico(){
        return $this->belongsTo(PrestadorServico::class);
    }
}
