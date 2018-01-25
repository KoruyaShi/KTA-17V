document.write("First JavaScript code");

window.onload = function(){
  (function(){
    var date = new Date();
    var time =  date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
    document.getElementsByTagName('div')[0].innerHTML="JS CLOCK: "+time;
    window.setTimeout(arguments.callee, 1000);
  })();
}
