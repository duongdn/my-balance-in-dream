<h1>  Tài khoản của bạn là: $<span id="money">0</span> </h1>
<script>
var count=0;
setInterval(function(){
  document.getElementById('money').innerHTML = count*100;
  count+=1;
}, 1000);
</script>
