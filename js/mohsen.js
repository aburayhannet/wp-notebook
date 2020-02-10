
var $j = jQuery.noConflict();

$j(function(doc) {

	var addEvent = 'addEventListener',
	    type = 'gesturestart',
	    qsa = 'querySelectorAll',
	    scales = [1, 1],
	    meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

	function fix() {
		meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
		doc.removeEventListener(type, fix, true);
	}

	if ((meta = meta[meta.length - 1]) && addEvent in doc) {
		fix();
		scales = [.25, 1.6];
		doc[addEvent](type, fix, true);
	}

}(document));



var nb = $j('#navbtn');
  var n = $j('#topnav nav');
  
  $j(window).on('resize', function(){
    
	

		
    if($j(this).width() < 570 && n.hasClass('keep-nav-closed')) {
      // if the nav menu and nav button are both visible,
      // then the responsive nav transitioned from open to non-responsive, then back again.
      // re-hide the nav menu and remove the hidden class
	  
	  
      $j('#topnav nav').hide().removeAttr('class');
    }
    if(nb.is(':hidden') && n.is(':hidden') && $j(window).width() > 569) {
      // if the navigation menu and nav button are both hidden,
      // then the responsive nav is closed and the window resized larger than 560px.
      // just display the nav menu which will auto-hide at <560px width.
      $j('#topnav nav').show().addClass('keep-nav-closed');
    }
  }); 
  
  $j('#topnav nav a,#topnav h1 a,#btmnav nav a').on('click', function(e){
    e.preventDefault(); // stop all hash(#) anchor links from loading
  });
  
  $j('#navbtn').on('click', function(e){
    e.preventDefault();
    $j("#topnav nav").slideToggle(350);
  });