@extends('pageUser.master')	
@section('title','Signin')
@section('content')	  
<div class="logmod__wrapper">
      <span class="logmod__close">Close</span>
      <div class="logmod__container">
            <ul class="logmod__tabs">             
              <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
            </ul>
            
<!-- Sign in ------------------------------------------------------->

                <div class="logmod__tab lgm-1">
                  <div class="logmod__heading">
                    <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
                  </div>
                  <div class="logmod__form">
<!------------------------------------------------------------------------------------------------------->     
                    @include('errors.note')               
                    <form accept-charset="utf-8" action="{{asset('/signin')}}" method="post" class="simform">                    
                      <div class="sminputs">
                        <div class="input full">
                          <label class="string optional" for="user-name">Email*</label>
                          <input class="string optional" maxlength="255" name="email" placeholder="Email" type="email" size="50" />
                        </div>
                        <div class="input full">
                          <label class="string optional" for="user-name">Name *</label>
                          <input class="string optional" maxlength="255" name="name" placeholder="Name" type="text" size="200" />
                        </div>
                                          
                        <div class="input full">
                          <label class="string optional" for="user-phone">Phone *</label>
                          <input class="string optional" maxlength="255" name="phone" placeholder="Phone" type="text" size="200" />
                        </div>
                        <div class="input full">
                          <label class="string optional" for="user-address">Address *</label>
                          <input class="string optional" maxlength="255" name="address" placeholder="City" type="text" size="200" />                         
                        </div>  
                        <div class="form-group input full" >
                              <label class="string optional" >Gender</label>
                              <select required name="gender" class="form-control">                                   
                                    <option value="Male">Male</option>   
                                    <option value="Female">Female</option>   
                                    <option value="Other">Other</option>                                     
                              </select>
                        </div>                             
                      </div>
                      <div class="sminputs">
                        <div class="input string optional">
                              <label class="string optional" for="user-pw">Password *</label>
                              <input class="string optional" maxlength="255" name="password" placeholder="Password" type="password" size="50" />
                              <span class="hide-password">Show</span>
                        </div>
                        <div class="input string optional">
                              <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                              <input class="string optional" maxlength="255" name="re_password" placeholder="Repeat password" type="password" size="50" />
                              <span class="hide-password">Show</span>
                        </div>
                      </div>
                      <div class="simform__actions">                            
                              <button type="submit" class="sumbit">Create Account</button>
                              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
                      </div> 
                      {{csrf_field()}}
                    </form>

<!------------------------------------------------------------------------------------------------------->                    
                  </div> 
                  <div class="logmod__alter">
                    <div class="logmod__alter-container">
                      <a href="#" class="connect facebook">
                        <div class="connect__icon">
                          <i class="fa fa-facebook"></i>
                        </div>
                        <div class="connect__context">
                          <span>Create an account with <strong>Facebook</strong></span>
                        </div>
                      </a>
                        
                      <a href="#" class="connect googleplus">
                        <div class="connect__icon">
                          <i class="fa fa-google-plus"></i>
                        </div>
                        <div class="connect__context">
                          <span>Create an account with <strong>Google+</strong></span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            
      </div>
</div>
@stop