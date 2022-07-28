@extends('layouts.logged')
@section('title','Sua linha de montagem online')
@section('content')
<main>
<p style="font-size:1.3em;">User Code: {{ Auth::user()->userCode}}</p>
    <div id="tasks" class="container">
        <p class="center green-text text-darken-3">Tasks</p>
        @for($i=0;$i<=3;$i++)
        <div class="card center" id="task" style="display:flex; line-heigh:0px;padding:3px;align-items:center;justify-content:space-between;cursor:pointer;">
            <p>Solicitante</p>
            <p>Descrição Sucinta da Tarefa</p>
            <div class="actions">
                <button class="btn-floating green darken-3 white-text"><i class="material-icons  modal-trigger" href="#modal{{$i}}" >done</i></button>
                <!-- Done Modal Structure -->
                <div id="modal{{$i}}" class="modal">
                    <div class="modal-content">
                        <h4 class="center green-text text-darken-2">Deseja confirmar que a Tarefa foi executada??</h4>
                        <div class=" center" >
                       <button class="btn green modal-close">confirmar</button>
                       <button class="btn red modal-close">cancelar</button>
                    </div>
                    </div>   
                </div>
                <button class="btn-floating red darken-2 white-text"><i class="material-icons modal-trigger" href="#delete{{$i}}">delete</i></button>
                <!-- Reject Modal Structure -->
                    <div id="delete{{$i}}" class="modal">
                    <div class="modal-content">
                        <h4 class="center red-text text-darken-2">Deseja realmente excluir esta tarefa sem executá-la??</h4>
                        <div class=" center" >
                       <button class="btn green modal-close">confirmar</button>
                       <button class="btn red modal-close">cancelar</button>
                    </div>
                    </div>   
                </div>
            </div>
        </div> 
<!-- Details Modal Structure -->
<div id="details{{$i}}" class="modal">
  <div class="modal-content">
    <h4 class="">Descrião detalhada da tarefa</h4>
    
  </div>
</div>
        @endfor
    </div>

</main>
@endsection