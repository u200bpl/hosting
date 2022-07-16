function keyDown(e) { 
    var e = window.event || e;
    var key = e.keyCode;
    //space pressed
    if (key == 32) { //space
        e.preventDefault();
    }
}

function checkWhitespace(event)
{
	var data = event.clipboardData.getData("text/plain");
    var isNullOrContainsWhitespace = (!data || data.length === 0 || /\s/g.test(data));
  
    if(isNullOrContainsWhitespace)
    {
  	  event.preventDefault(); 
    }
  
}