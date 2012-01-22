/*!
#######################################################################
# 
# Ritualiser
# JavaScript setup routines
#
#######################################################################
*/

    ////////////////////////////////////////////////////////////////////
    //  Initialise setup routines
    ////////////////////////////////////////////////////////////////////
    
        // Called when DOM is ready
        $(document).ready( domSetup );
        
        // Called when entire page is loaded
        $(window).load( pageSetup );
        
        // Called when DOM is unloaded
        $(window).unload( domUnload );
    
    ////////////////////////////////////////////////////////////////////
    //  Global variables
    ////////////////////////////////////////////////////////////////////

    
    ////////////////////////////////////////////////////////////////////
    //  Define setup routines
    ////////////////////////////////////////////////////////////////////
    
    /* 
    domSetup()
    
    All JavaScript requiring initialisation on DOM LOAD should be called
    from this routine.
    -----------------------------------------------------------------------
    */

    function domSetup() {

        ////////////////////////////////////////////////////////////////////
        //  Navigation
        ////////////////////////////////////////////////////////////////////

            /*
            Setup external links (target attribute not allowed by XHTML 1.1)
            (see http://www.sitepoint.com/article/standards-compliant-world/)
            */
            $('a[rel="external"],.external a').attr('target','blank');

        ////////////////////////////////////////////////////////////////////
        //  /Navigation
        ////////////////////////////////////////////////////////////////////

        ////////////////////////////////////////////////////////////////////
        //  Enhancements
        ////////////////////////////////////////////////////////////////////

			// tell the site that jQ has loaded
			$('html').addClass('loaded');

		////////////////////////////////////////////////////////////////////
		//  /Enhancements
		////////////////////////////////////////////////////////////////////
		$('#wrapper').fadeIn(500);

		var $pagetitle = $('head title').text();
		var $pluspagetitle = $('.sigil').text();
		$('html head title').text($pagetitle + ' : ' + $pluspagetitle)
		
		$('.sigil').each(function(){
			var $titletext = $(this).text();
			$(this).attr('title',$titletext);
		});

	} // End domSetup()

	/* 
	pageSetup()

	All JavaScript requiring initialisation on PAGE LOAD should be called
	from this routine (all images and elements should be loaded and ready to
	manipulate by this point)
	-----------------------------------------------------------------------
	*/

	function reload(){
		location.reload();
	}
	function hideit(){
		$('#wrapper').css('display','none')
	}

	function pageSetup() {
		$('.sigil').click(function(){
			$('#stage li:first')
				.fadeOut('fast');
			$('#stage li:nth-child(2) ')
				.delay(500)
				.fadeOut('fast');
			$('#stage li:last ')
				.delay(1000)
				.fadeOut('fast');
			$('.sigil')
				.delay(1500)
				.fadeOut('fast');
			setTimeout('hideit()',2000);
			setTimeout('reload()',2500);
		});
	};
	
	// post-process the images if the classes match
	var pixastic_parseonload = true;
	$('.invert').pixastic('invert');
	$('.greyscale').pixastic('desaturate');
	$('.sepia').pixastic('sepia');
	$('.red').pixastic('coloradjust',{
		red: .25,
		green: 0,
		blue: 0
	});
	$('.green').pixastic('coloradjust',{
		red: 0,
		green: .25,
		blue: 0
	});
	$('.blue').pixastic('coloradjust',{
		red: 0,
		green: 0,
		blue: .25
	});
	$('.purple').pixastic('coloradjust',{
		red: .25,
		green: 0,
		blue: .25
	});

	// End pageSetup()

    /* 
    domUnload()

    Called when page/DOM is unloaded
    -----------------------------------------------------------------------
    */

    function domUnload() {

    } // End domUnload()