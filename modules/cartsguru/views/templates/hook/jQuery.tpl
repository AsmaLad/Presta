{*
 * Carts Guru
 *
 * @author    LINKT IT
 * @copyright Copyright (c) LINKT IT 2016
 * @license   Commercial license
 *}
<script>
  window.cg_waitingJQuery = [];
  function cg_onJQueryReady(fn){
    if (window.jQuery){
      fn();
    }
    else {
      window.cg_waitingJQuery.push(fn);
    }
  }

  function cg_onJQueryLoaded(){
    while (window.cg_waitingJQuery.length > 0) {
      var fn = window.cg_waitingJQuery.shift();
      fn();
    }
  }

  if(window.jQuery) {
     cg_onJQueryLoaded();
  }
  else{
    var script = document.createElement('script');
    document.head.appendChild(script);
    script.type = 'text/javascript';
    script.src = "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
    script.onload = cg_onJQueryLoaded;
  }
</script>
