<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtividadeEstagioController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\ContatoProfessorOrientadorController;
use App\Http\Controllers\ContatoSupervisorEstgioController;
use App\Http\Controllers\CoordenacaoCursoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstagiarioController;
use App\Http\Controllers\EstagioController;
use App\Http\Controllers\EmpresaConveniadaController;

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\NRIController;
use App\Http\Controllers\ProfessorOrientadorController;
use App\Http\Controllers\SupervisorEstagiarioController;
use App\Http\Controllers\VagaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index/Atividade_Estagio',[AtividadeEstagioController::class,'index'])->name('Atividade_Estagio.index');

Route::post('/create/Atividade_Estagio',[AtividadeEstagioController::class,'create'])->name('Atividade_Estagio.create');

Route::get('/create/Atividade_Estagio',[AtividadeEstagioController::class,'create'])->name('Atividade_Estagio.create');

Route::post('/storeAtividade_Estagio',[AtividadeEstagioController::class,'store'])->name('Atividade_Estagio.store');

Route::post('/Atividade_Estagio/edit/{id}',[AtividadeEstagioController::class,'edit'])->name('AtividadeEstagio.edit');

Route::get('/Atividade_Estagio/show/{id}',[AtividadeEstagioController::class,'show'])->name('Atividade_Estagio.show');

Route::put('/Atividade_Estagio/update/{id}',[AtividadeEstagioController::class,'update'])->name('Atividade_Estagio.update');

Route::delete('/Atividade_Estagio/{id}',[AtividadeEstagioController::class, 'destroy'])->name('Atividade_Estagio.delete');


Route::get('/create/Campus',[CampusController::class,'create'])->name('Campus.create');
Route::post('/create/Campus',[CampusController::class,'create'])->name('Campus.create');

Route::post('/storeCampus',[CampusController::class,'store'])->name('Campus.store');

Route::get('/index/Campus',[CampusController::class,'index'])->name('Campus.index');

Route::delete('/Campus/{id}',[CampusController::class,'destroy'])->name('Campus.delete');

Route::post('/Campus/edit/{id}',[CampusController::class,'edit'])->name('Campus.edit');

Route::put('/Campus/update/{id}',[CampusController::class,'update'])->name('Campus.update');


Route::get('/create/Contrato_Professor_Orientador',[ContatoProfessorOrientadorController::class,'create'])->name('Contrato_Professor_Orientador.create');

Route::post('/storeContrato_Professor_Orientador',[ContatoProfessorOrientadorController::class,'store'])->name('Contrato_Professor_Orientador.store');

Route::get('index/Contrato_Professor_Orientador',[ContatoProfessorOrientadorController::class,'index'])->name('Contrato_Professor_Orientador.index');

Route::delete('/Contrato_Professor_Orientador/{id}',[ContatoProfessorOrientadorController::class,'destroy'])->name('Contrato_Professor_Orientador.delete');

Route::put('/Contrato_Professor_Orientador/update/{id}',[ContatoProfessorOrientadorController::class,'update'])->name('Contrato_Professor_Orientador.update');

Route::post('/Contrato_Professor_Orientador/edit/{id}',[ContatoProfessorOrientadorController::class,'edit'])->name('Contrato_Professor_Orientador.edit');


Route::post('/create/ContatoSupervisorEstgio',[ContatoSupervisorEstgioController::class,'create'])->name('ContatoSupervisorEstgio.create');

Route::get('/create/ContatoSupervisorEstgio',[ContatoSupervisorEstgioController::class,'create'])->name('ContatoSupervisorEstgio.create');

Route::post('/storeContatoSupervisorEstgio',[ContatoSupervisorEstgioController::class,'store'])->name('ContatoSupervisorEstgio.store');

Route::get('index/ContatoSupervisorEstgio',[ContatoSupervisorEstgioController::class,'index'])->name('ContatoSupervisorEstgio.index');

Route::delete('/ContatoSupervisorEstgio/{id}',[ContatoSupervisorEstgioController::class,'destroy'])->name('ContatoSupervisorEstgio.delete');

Route::put('/ContatoSupervisorEstgio/update/{id}',[ContatoSupervisorEstgioController::class,'update'])->name('ContatoSupervisorEstgio.update');

Route::post('/ContatoSupervisorEstgio/edit/{id}',[ContatoSupervisorEstgioController::class,'edit'])->name('ContatoSupervisorEstgio.edit');

Route::get('/ContatoSupervisorEstgio/edit/{id}',[ContatoSupervisorEstgioController::class,'edit'])->name('ContatoSupervisorEstgio.edit');


Route::get('/create/Coordenacao_Curso',[CoordenacaoCursoController::class,'create'])->name('Coordenacao_Curso.create');

Route::post('/create/Coordenacao_Curso',[CoordenacaoCursoController::class,'create'])->name('Coordenacao_Curso.create');

Route::post('/storeCoordenacao_Curso',[CoordenacaoCursoController::class,'store'])->name('Coordenacao_Curso.store');

Route::get('index/Coordenacao_Curso',[CoordenacaoCursoController::class,'index'])->name('Coordenacao_Curso.index');

Route::get('professor_orientador/Coordenacao_Curso',[CoordenacaoCursoController::class,'index_professor_orientador'])->name('PROFESSOR_orientadors.index');

Route::delete('/Coordenacao_Curso/{id}',[CoordenacaoCursoController::class,'destroy'])->name('Coordenacao_Curso.delete');

Route::put('/Coordenacao_Curso/update/{id}',[CoordenacaoCursoController::class,'update'])->name('Coordenacao_Curso.update');

Route::post('/Coordenacao_Curso/edit/{id}',[CoordenacaoCursoController::class,'edit'])->name('Coordenacao_Curso.edit');

Route::get('/Coordenacao_Curso/edit/{id}',[CoordenacaoCursoController::class,'edit'])->name('Coordenacao_Curso.edit');


Route::post('/create/Curso',[CursoController::class,'create'])->name('Curso.create');
Route::get('/create/Curso',[CursoController::class,'create'])->name('Curso.create');
Route::post('/storeCurso',[CursoController::class,'store'])->name('Curso.store');

Route::get('index/Curso',[CursoController::class,'index'])->name('Curso.index');

Route::delete('/Curso/{id}',[CursoController::class, 'destroy'])->name('Curso.delete');

Route::put('/Curso/update/{id}',[CursoController::class,'update'])->name('Curso.update');

Route::post('/Curso/edit/{id}',[CursoController::class,'edit'])->name('Curso.edit');
Route::get('/Curso/edit/{id}',[CursoController::class,'edit'])->name('Curso.edit');


Route::post('/create/EmpresaConveniada',[EmpresaConveniadaController::class,'create'])->name('EmpresaConveniada.create');

Route::get('/create/EmpresaConveniada',[EmpresaConveniadaController::class,'create'])->name('EmpresaConveniada.create');

Route::post('/storeEmpresaConveniada',[EmpresaConveniadaController::class,'store'])->name('EmpresaConveniada.store');

Route::get('index/EmpresaConveniada',[EmpresaConveniadaController::class,'index'])->name('EmpresaConveniada.index');

Route::get('vagas/EmpresaConveniada',[EmpresaConveniadaController::class,'index_vagas'])->name('vagas.index');

Route::get('/EmpresaConveniada/{id}',[EmpresaConveniadaController::class,'destroy'])->name('EmpresaConveniada.delete');

Route::put('/EmpresaConveniada/update/{id}',[EmpresaConveniadaController::class,'update'])->name('EmpresaConveniada.update');

Route::post('/EmpresaConveniada/edit/{id}',[EmpresaConveniadaController::class,'edit'])->name('EmpresaConveniada.edit');
Route::get('/EmpresaConveniada/edit/{id}',[EmpresaConveniadaController::class,'edit'])->name('EmpresaConveniada.edit');





Route::post('/create/Estagiario',[EstagiarioController::class,'create'])->name('Estagiario.create');

Route::get('/create/Estagiario',[EstagiarioController::class,'create'])->name('Estagiario.create');

Route::post('/storeEstagiario',[EstagiarioController::class,'store'])->name('Estagiario.store');

Route::get('index/Estagiario',[EstagiarioController::class,'index'])->name('Estagiario.index');

Route::get('vagas/Estagiario',[EstagiarioController::class,'index_vagas'])->name('vagas.index');

Route::get('/Estagiario/{id}',[EstagiarioController::class,'destroy'])->name('Estagiario.delete');

Route::put('/Estagiario/update/{id}',[EstagiarioController::class,'update'])->name('Estagiario.update');

Route::post('/Estagiario/edit/{id}',[EstagiarioController::class,'edit'])->name('Estagiario.edit');
Route::get('/Estagiario/edit/{id}',[EstagiarioController::class,'edit'])->name('Estagiario.edit');



Route::post('/create/Estagio',[EstagioController::class,'create'])->name('Estagio.create');
Route::get('/create/Estagio',[EstagioController::class,'create'])->name('Estagio.create');

Route::post('/storeEstagio',[EstagioController::class,'store'])->name('Estagio.store');

Route::get('index/Estagio',[EstagioController::class,'index'])->name('Estagio.index');

Route::delete('/Estagio/{id}',[EstagioController::class,'destroy'])->name('Estagio.delete');

Route::put('/Estagio/update/{id}',[EstagioController::class,'update'])->name('Estagio.update');

Route::post('/Estagio/{id}',[EstagioController::class,'edit'])->name('Estagio.edit');
Route::get('/Estagio/{id}',[EstagioController::class,'edit'])->name('Estagio.edit');


Route::post('/create/Funcionario',[FuncionarioController::class,'create'])->name('Funcionario.create');

Route::get('/create/Funcionario',[FuncionarioController::class,'create'])->name('Funcionario.create');

Route::post('/storeFuncionario',[FuncionarioController::class,'store'])->name('Funcionario.store');

Route::get('index/Funcionario',[FuncionarioController::class,'index'])->name('Funcionario.index');

Route::delete('/Funcionario/{id}',[FuncionarioController::class,'destroy'])->name('Funcionario.delete');

Route::put('/Funcionario/update/{id}',[FuncionarioController::class,'update'])->name('Funcionario.update');

Route::post ('/Funcionario/edit/{id}',[FuncionarioController::class,'edit'])->name('Funcionario.edit');

Route::get ('/Funcionario/edit/{id}',[FuncionarioController::class,'edit'])->name('Funcionario.edit');



Route::post('/create/Instituicao',[InstituicaoController::class,'create'])->name('Instituicao.create');

Route::get('/create/Instituicao',[InstituicaoController::class,'create'])->name('Instituicao.create');

Route::post('/storeInstituicao',[InstituicaoController::class,'store'])->name('Instituicao.store');

Route::get('index/Instituicao',[InstituicaoController::class,'index'])->name('Instituicao.index');

Route::delete('/Instituicao/{id}',[InstituicaoController::class,'destroy'])->name('Instituicao.delete');

Route::post('/Instituicao/update/{id}',[InstituicaoController::class,'update'])->name('Instituicao.update');

Route::get('/Instituicao/update/{id}',[InstituicaoController::class,'update'])->name('Instituicao.update');

Route::post('/Instituicao/edit/{id}',[InstituicaoController::class,'edit'])->name('Instituicao.edit');
Route::get('/Instituicao/edit/{id}',[InstituicaoController::class,'edit'])->name('Instituicao.edit');



Route::post('/create/NRI',[NRIController::class,'create'])->name('NRI.create');
Route::get('/create/NRI',[NRIController::class,'create'])->name('NRI.create');

Route::post('/storeNRI',[NRIController::class,'store'])->name('NRI.store');

Route::get('index/NRI',[NRIController::class,'index'])->name('NRI.index');

Route::get('index_estagiario',[NRIController::class,'index_estagiario'])->name('Estagiario_NRI.index');


Route::delete('/NRI/{id}',[NRIController::class,'destroy'])->name('NRI.delete');

Route::put('/NRI/update/{id}',[NRIController::class,'update'])->name('NRI.update');

Route::post('/NRI/edit/{id}',[NRIController::class,'edit'])->name('NRI.edit');



Route::post('/create/Professor_orientador',[ProfessorOrientadorController::class,'create'])->name('Professor_orientador.create');

Route::get('/create/Professor_orientador',[ProfessorOrientadorController::class,'create'])->name('Professor_orientador.create');

Route::post('/storeProfessor_orientador',[ProfessorOrientadorController::class,'store'])->name('Professor_orientador.store');

Route::get('index/Professor_orientador',[ProfessorOrientadorController::class,'index'])->name('Professor_orientador.index');

Route::get('index/atividade_orientando',[ProfessorOrientadorController::class,'index_atividade_orientando'])->name('atividade_Orientando_professor.index');

Route::get('orientando/Professor_orientador',[ProfessorOrientadorController::class,'index_professor_orientador'])->name('index.orientandos_professor_orientador');

Route::delete('/Professor_orientador/{id}',[ProfessorOrientadorController::class,'destroy'])->name('Professor_orientador.delete');

Route::put('/Professor_orientador/update/{id}',[ProfessorOrientadorController::class,'update'])->name('Professor_orientador.update');

Route::post('/Professor_orientador/edit/{id}',[ProfessorOrientadorController::class,'edit'])->name('Professor_orientador.edit');

Route::get('/Professor_orientador/edit/{id}',[ProfessorOrientadorController::class,'edit'])->name('Professor_orientador.edit');




Route::post('/create/Supervisor_Estagiario',[SupervisorEstagiarioController::class,'create'])->name('Supervisor_Estagiario.create');
Route::get('/create/Supervisor_Estagiario',[SupervisorEstagiarioController::class,'create'])->name('Supervisor_Estagiario.create');


Route::post('/storeSupervisor_Estagiario',[SupervisorEstagiarioController::class,'store'])->name('Supervisor_Estagiario.store');

Route::get('index/Supervisor_Estagiario',[SupervisorEstagiarioController::class,'index'])->name('Supervisor_Estagiario.index');

Route::delete('/Supervisor_Estagiario/{id}',[SupervisorEstagiarioController::class,'destroy'])->name('Supervisor_Estagiario.delete');


Route::put('/Supervisor_Estagiario/update/{id}',[SupervisorEstagiarioController::class,'update'])->name('Supervisor_Estagiario.update');

Route::post('/Supervisor_Estagiario/edit/{id}',[SupervisorEstagiarioController::class,'edit'])->name('Supervisor_Estagiario.edit');
Route::get('/Supervisor_Estagiario/edit/{id}',[SupervisorEstagiarioController::class,'edit'])->name('Supervisor_Estagiario.edit');



Route::post('/create/Vagas',[VagaController::class,'create'])->name('Vagas.create');
Route::get('/create/Vagas',[VagaController::class,'create'])->name('Vagas.create');

Route::post('/storeVagas',[VagaController::class,'store'])->name('Vagas.store');

Route::get('index/Vagas',[VagaController::class,'index'])->name('Vagas.index');

Route::delete('/Vagas/{id}',[VagaController::class,'destroy'])->name('Vagas.delete');

Route::put('/Vagas/update/{id}',[VagaController::class,'update'])->name('Vagas.update');

Route::post('/Vagas/edit/{id}',[VagaController::class,'edit'])->name('Vagas.edit');
Route::get('/Vagas/edit/{id}',[VagaController::class,'edit'])->name('Vagas.edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
