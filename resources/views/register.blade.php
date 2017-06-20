@extends('templates.login')

@section('content')
<form method="POST" action="auth/register">
{{ csrf_field() }}
 <h6>Join Paiter</h6>
 <input class="span12" type="text" placeholder="UserName" name="username" id="username" />
 <input class="span12" type="text" placeholder="NickName" name="nickname"  id="nickname" />
 <input class="span12" type="password" placeholder="Password" name="password" id="password"  />
 <input class="span12" type="password" placeholder="Password-Confirmed" name="password_confirmation" id="password_confirmation"/>
 <input class="span12" type="text" placeholder="Telephone" name="Telephone" id="Telephone"/>
 <select class="span12" placeholder="Your"  style="height:40px;" name='role' id='role'>
  <option>产品部</option>
  <option>打样部</option>
</select>
<a href="#" class="forgot">Forgot password?</a>
               
<input class="btn-glow primary login"  type="submit" value="Login">  
</form>
@stop
         