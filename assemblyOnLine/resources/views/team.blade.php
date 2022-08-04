@extends('layouts.logged')
@section('title','Sua linha de montagem online')
@section('content')
<main>

    <div class="center" id="team"  style="margin:20px 0px 10px">
    @php
    $counter = count(Auth::user()->team);
  @endphp
  @if($counter < 1)
    <p class="center" style="font-size:2em;margin:40px 0px 10px">You don't have a team</p>
  @else
  <h4 class="green-text text-darken-2">Members</h4>
  <div class="container">
    <table>
      <thead>
      <th width="20%">Name</th>
      <th width="60%">Email</th>
      <th></th>
      </thead>
      @for($i = 0; $i < $counter; $i++)
      <tbody>
        <td> {{$user[$i]->name}}</td>
        <td > {{$user[$i]->email}}</td>
        <td><a href="#create" class="btn-floating green modal-trigger"><i class="material-icons">add_task</i></a>
         <!-- Creat Task Modal -->
            <div id="create" class="modal">
            
            <div class="modal-content">
            <p style="font-size:1.6em; font-weight:bold;" class="green-text text-darken-3">Create Task</p>
             <div class="row center">
              <form action="#" method="POST">
                <div class="input-field">
                  <input type="text" id="task" name="task" >
                  <label for="task" class="grey-text">Task</label>
                </div>
                <div class="input-field">
                  <textarea name="jobDescription" id="jobDescription" class="materialize-textarea" cols="30" rows="100"></textarea>
                  <label for="jobDescription" class="grey-text">Job Description</label>
                </div>
                <input type="submit" class="btn green darken-1">
                <input type="reset" value="Cancelar" class="orange darken-2 btn">
              </form>
             </div>
        </div>
  </div>
            <a href="#" class="btn-floating orange"><i class="material-icons">visibility</i></a>
            <a href="#" class="btn-floating red darken-1"><i class="material-icons">delete</i></a></td>
      </tbody>
      @endfor
    </table>
  </div>

   @endif
    <button class="btn green darken-2 center modal-trigger" href="#addMembers" style="margin-top:25px;">Add Members</button>
<!-- Modal Structure -->
<div id="addMembers" class="modal">
  <div class="modal-content">
    <h4 class="">Insert the User code</h4>
    <form action="/addMember" method="POST">
        @csrf
        <div class="input-field"> 
            <input type="text" name="userCode" id="userCode">
            <label for="userCode" class="grey-text">User Code</label>
        </div>
        <div class="input-field" style="display:none;"> 
            <input type="hidden" name="userAuth" id="userAuth" value="{{Auth::user()->id}}">
            <label for="userAuth" class="grey-text" >User</label>
        </div>
        <input type="submit" value="Confirm" class="btn green">
    </form>
  </div>
</div>
    </div>
</main>
@endsection