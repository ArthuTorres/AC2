import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { DetalhesSolicitacaoServicoComponent } from './pages/detalhes-solicitacao-servico/detalhes-solicitacao-servico.component';
import { SharedModule } from '../_shared/shared.module';
import { FileManagerModule } from '@gimmeapps/gquicklib-angular';

export const routes: Routes = [
  { path: "solicitacao-servico/novo", component: DetalhesSolicitacaoServicoComponent },
  { path: "solicitacao-servico/:id", component: DetalhesSolicitacaoServicoComponent },
]

@NgModule({
  declarations: [
    DetalhesSolicitacaoServicoComponent
  ],
  imports: [
    CommonModule,
    RouterModule.forChild(routes),
    SharedModule,
    FileManagerModule
  ],
  exports: [
    RouterModule
  ]
})
export class ClientesModule { }
