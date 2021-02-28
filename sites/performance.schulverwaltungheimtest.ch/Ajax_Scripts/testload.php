<div class="loading"><span></span><div class="loader"></div></div>

<br/><br/>
<button>Replay</button>


<footer><br/>
  Created by Roodper and
  <a target="_blank" href="http://geekben.com">GeekBen</a></footer>

<script>
$(document).ready(function() {
    
    loading();
  
  $('button').click(function(){
   loading();
  });
  
  
});

function loading(){
   $('button').hide();
  var num = 0;
    for(i=0; i<=100; i++) {
        setTimeout(function() { 
            $('.loading span').html(num+'%');
           
            num++;
          if(num==100){
            $('button').show();
          }
        },i*120);
    };
  
}
	</script>

<style>
body{
  text-align:center; 
  margin:100px auto; 
  background:#f1f1f1
}

.loading {
  position:relative;
  margin:0 auto;
  width:100px;
  height:100px;
  
}
.loading span{  
  position:absolute;
  top:46%;
  left:44%;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
font-size: 12px;
font-weight: bold;
  
}

.loader{
  width:100px;
  height:100px;
  position: relative;
  background:transparent;
  margin:1% auto;
  border:5px dashed #265573;
  -webkit-border-radius:100%;

  
   animation: spin 12s linear infinite;  
  -webkit-animation: spin 12s linear infinite;
  -moz-animation: spin 12s linear infinite;
  -o-animation: spin 12s linear infinite; 
  
  
  box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -webkit-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -moz-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
  -o-box-shadow:inset 0 0 10px rgba(0,0,0,0.2);
}

.loader:before{
  content:'';
  position:absolute;
  width:70%;
  height:70%;
  border:4px dashed #386D73;
  border-radius:100%;
  top:11%;
  left:11%;

  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  
   animation: spin 8s linear infinite;  
  -webkit-animation: spin 8s linear infinite;
  -moz-animation: spin 8s linear infinite;
  -o-animation: spin 8s linear infinite;  
  
}

.loader:after{
  content:'';
  position:absolute;
  width:40%;
  height:40%;
  border:3px dashed #81A68A;
  border-radius:100%;
  top:27%;
  left:27%;
  
  box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.25);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.25);

  animation: spin 3s linear infinite;  
  -webkit-animation: spin 3s linear infinite;
  -moz-animation: spin 3s linear infinite;
  -o-animation: spin 3s linear infinite;  
  
}


@keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-webkit-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-moz-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}

@-o-keyframes spin 
{
  0%   { -webkit-transform: rotate(90deg); }
  100% { -webkit-transform: rotate(-270deg);}
}



footer{
  position:fixed;
  bottom:20px;
  text-align:center;
  display:block;
  width:100%;
  color:grey;
  font-family: 'Helvetica Neue', Helvetica, Roboto, sans-serif;
  font-weight:300;
}

footer a{
  text-decoration:none;
  color:rgba(0,0,0,0.8);
}
</style>
