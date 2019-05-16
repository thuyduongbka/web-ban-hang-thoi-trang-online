@extends('pageUser.master')	
@section('title','Login')
@section('content')	  
<div class="logmod__wrapper">
      <span class="logmod__close">Close</span>
      <div class="logmod__container">
            <ul class="logmod__tabs">
              <li data-tabtar="lgm-2"><a href="#">Login</a></li>             
            </ul>           
<!-- ---------------------------- login ---------------------------------->
                <div class="logmod__tab lgm-2">
                    <div class="logmod__heading">
                      <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
                    </div> 

                    <div class="logmod__form">
<!---------------------------------------------------------------------------------------------------------->                      
                      <form accept-charset="utf-8" action="{{asset('login')}}" method="post" class="simform">     
                        <fieldset>
                          @include('errors.note')
                          <div class="alert alert-danger error errorLogin" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p style="color:red; display:none;" class="error errorLogin"></p>
                          </div>
                          <div class="sminputs">
                            <div class="input full">
                              <label class="string optional" for="user-name">Email*</label>
                              <input class="string optional" maxlength="255" name="email" id="email" placeholder="Email" type="email" size="50" />
                            </div>
                          </div>
                          <div class="sminputs">
                            <div class="input full">
                              <label class="string optional" for="user-pw">Password *</label>
                              <input class="string optional" maxlength="255" name="password" id="password" placeholder="Password" type="password" size="50" />
                                          <span class="hide-password">Show</span>
                            </div>
                          </div>
                          <div class="simform__actions">                          
                            <button type="submit" class="sumbit" id="dang-nhap">Log In</button>
                            <span class="simform__actions-sidetext">
                              <a href="{{asset('/forgotpw/')}}" class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
                          </div>   
                        </fieldset>                                 
                      {{csrf_field()}}                      
                      </form>
                    </div> 
                    <div class="logmod__alter">
                      <div class="logmod__alter-container">
                        <a href="#" class="connect facebook">
                          <div class="connect__icon">
                            <i class="fa fa-facebook"></i>
                          </div>
                          <div class="connect__context">
                            <span>Sign in with <strong>Facebook</strong></span>
                          </div>
                        </a>
                        <a href="#" class="connect googleplus">
                          <div class="connect__icon">
                            <i class="fa fa-google-plus"></i>
                          </div>
                          <div class="connect__context">
                            <span>Sign in with <strong>Google+</strong></span>
                          </div>
                        </a>
                      </div>
                    </div>
                </div>            
      </div>
</div>
 
@stop