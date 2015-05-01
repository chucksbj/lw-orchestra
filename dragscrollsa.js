var browserName = whichBrs();


/****  (C)Scripterlative.com 

Save as 'dragscroll.js'

At the bottom of the <body> section or later than all other scripts:

<script type='text/javascript' src='dragscroll.js'></script>

****/

var DragScroll;

(DragScroll=/*2843295374657068656E204368616C6D657273*/
{
 initialised:false, e:null, dataCode:0, x:0, y:0, prevX:0, prevY:0, mouseDown:false,

 setFlags:function()
 {
  if( document.documentElement )
   this.dataCode=3;
  else 
   if(document.body && typeof document.body.scrollTop!='undefined')
    this.dataCode=2;
   else
    if( this.e && this.e.pageX!='undefined' )
     this.dataCode=1;
     
  this.initialised=true;
 },
  
 init:function()
 {
  if(!document.getElementById && document.captureEvents && Event)
   document.captureEvents(Event.MOUSEMOVE);

  this.addToHandler(document, 'onmousemove',  function(){DragScroll.getMousePosition(arguments[0]);} ); 
       
  this.addToHandler(document, 'onmousedown',  function(){DragScroll.mouseDown=true;return false} );
  
  this.addToHandler(document, 'onmouseup',  function(){DragScroll.mouseDown=false;} ); 
  
  this.addToHandler(document, 'onselectstart',  function(){return false;} );   
 },
 
 getMousePosition:function(e)
 {
  if(!e)
   this.e = event;
  else
   this.e = e; 

  if(!this.initialised)
   this.setFlags(); 

switch( this.dataCode )
  {
   case 3 : this.x = (Math.max(document.documentElement.scrollLeft, document.body.scrollLeft) + this.e.clientX)/1.3;
            this.y = 0;
            break;
                 
   case 2 : this.x = (document.body.scrollLeft + this.e.clientX)/1.3;
            this.y = 0;
            break;
            
   case 1 : (this.x = this.e.pageX)/1.3; this.y = 0;
 
  }
  
  if(this.mouseDown && (this.x!=this.prevX || this.y!=this.prevY) )
   window.scrollBy(this.x-this.prevX, this.y-this.prevY);
  
  this.prevX=this.x;
  this.prevY=this.y; 
 },
 
 addToHandler:function(obj, evt, func)
 {
  if(obj[evt])
   {
    obj[evt]=function(f,g)
    {
     return function()
     {
      f.apply(this,arguments);
      return g.apply(this,arguments);
     };
    }(func, obj[evt]);
   }
   else
    obj[evt]=func;
 } 
 
}).init();


/**** End of listing ****/