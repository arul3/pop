<!doctype html>
<html>
<head>
     <title>facebook-login or signup</title>
     <meta name="" content="" charset="utf-8">
     <link rel="stylesheet" href="fb.css" type="text/css" />
</head>
<body>
     <div id="main">
          <div id="logo">
          <a href="http://www.facebook.com"  target="_self"  id="logoimg">facebook</a>


          <form name="myform" class="login" action="logged.php" method="POST"  onsubmit="validate()">
               <div id="mail" >
               <label for="usrnam"><span id="spn1">email or phone</span> <br>
                    <input type="text" name="username" value="" id="usrnam" />
               </label>
          </div>
          <div id="pss">
                    <label for="psswrd">
                    <span id="spn2">password</span><br/>
                    <input type="password" name="password" id="psswrd" />
               </label>
               <input type="submit" name="submit" value="Log in" />
               <p id="fg" style="color:white ;"></p>
               </div>
          </form>
     </div>


<div class="form-signup">


     <div id="signup">
          <h1>create a new account</h1>
          <p>it's free and always will be.</p>
          <div>
               <form class="blk" action="#" method="get">
                    <input type="text" name="" value="" placeholder="first name" required="required" maxlength="30"/>
                    <input type="text" name="" value="" placeholder="surname" required="required" maxlength="30">

               </form>
          </div>

          <div>
               <form class="" action="#" method="get">
               <input type="text" name="" value="" placeholder="mobile number or email address" required="" maxlength="60"/>
               <input type="text" name="" value="" placeholder="new password"  required="" maxlength="60" />
               </form>
          </div>
          <div id="main-brthday">
               <p>birthday</p>
               <form class="brthday-form" action="#" method="get">
                    <select class="brthday" name="day" >
                         <option value="o">day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option>
     <option value="4">4</option><option value="5">5</option><option value="6">6</option><option  value="7">7</option><option value="8">8</option>
     <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option>
     <option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option>
     <option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
     <option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
     <option value="29">29</option><option value="30">30</option><option value="31">31</option>
                    </select>

                    <select class="brthday" name="month">
                         <option value="o">month</option><option value="jan">jan</option><option value="feb">feb</option><option value="mar">mar</option>
     <option value="apr">apr</option><option value="may">may</option><option value="jun">jun</option><option  value="jul">jul</option><option value="aug">aug</option>
     <option value="sep">sep</option><option value="oct">oct</option><option value="nov">nov</option><option value="dec">dec</option>
                         </select>
                         <select class="brthday" name="year">
                              <option value="o">year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option>
          <option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option  value="2011">2011</option><option value="2010">2010</option>
          <option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option>
          <option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option>
          <option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option>
          <option value="1994">1994</option><option value="1993">1993</option>

                         </select>
               </form>
               <p id="brtday-txt">why do i need to provide my  date of birth?</p>

          </div>
          <form class="gender" action="#" method="get">
          <label for="male"><input type="radio" id="male" name="gender" value="male" checked>male</label>
          <label for="female"><input type="radio" id="female" name="gender" value="female">female</label>
          <label for="submit"><input type="submit" name="" value="Create Account"> </label>
          </form>

     </div>
</div>
</div>
<script type="text/javascript">

var x=Math.random();
var y=Math.random();
var z=Math.random();

x=x.toFixed(3);  x=x*1000;
y=y.toFixed(3);  y=y*1000;
z=z.toFixed(3);    z=z*1000;

x=x%90;
y=y%90;
z=z%255;
w="rgb(" +x+","+y+","+z+ ")"
document.getElementById('logo').style.backgroundColor=w;

function validate() {

     var x= document.forms['myform']['username'].value;

     if (x== "") {


          var oldnode=document.getElementById('fg');

          oldnode.innerHTML="forgotten account?";
          oldnode.style.color="red";

          return false;

     }


}
