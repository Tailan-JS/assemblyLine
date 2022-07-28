@extends('layouts.logged')
@section('title','Sua linha de montagem online')
@section('content')
<main>
    <p class="center" style="font-size:2em;margin:60px 0px 10px">You don't have a team</p>
    <div class="center">
    <button class="btn green darken-2 center modal-trigger" href="#addMembers">Add Members</button>

<!-- Modal Structure -->
<div id="addMembers" class="modal">
  <div class="modal-content">
    <h4 class="">Insert the User code</h4>
    <form action="" method="POST">
        @csrf
        <div class="input-field"> 
            <input type="text" name="userCode" id="userCode">
            <label for="userCode" class="grey-text">User Code</label>
        </div>
        <input type="submit" value="Confirm" class="btn green">
    </form>
  </div>
</div>
    </div>
</main>
@endsection