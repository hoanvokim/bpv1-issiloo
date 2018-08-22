/*!
 * flxMenu v1.0
 * https://github.com/LTS-Tools/flxMenu
 *
 * Copyright (c) 2018 Alfred Lorenz.  All rights reserved.
 * Released under the MIT license.
 *
 * Date: Thu Jul 12 2018
 */
(function ( $ ) {
	if ( $.fn.flxMenu )
	{
		// already 
		return;
	}

	$.fn.flxMenu = function($targetFrame, options )
	{
		var slide = {
				puTop: 0,
				puLeft: 1,
				puRight: 2
		};
		var
		defaults = {
			fnChanged: function (toButton, $newFrame, $oldFrame) {___flxMenuDebug(true, 'Moved bar from {1} to {0}', $newFrame[0].id, $oldFrame[0].id);},
			fnInit: function(menuFrame, buttonFrame){},
			fnSubmenuClosing: function($submenu){ ___flxMenuDebug(true, 'closing submenu of <{0} id="{1}">', $submenu[0].nodeName, $submenu.attr("id")); },
			fnPopupShowing: function(showup){ ___flxMenuDebug(true, 'Popup showing {0} ', showup);},
			duration: 300,				// time in ms to open submenu
			orientation: "horizontal",	// orientation of the navigation bar in desktop mode ("horizontal" or "vertical")
			smShowByClick: false,		// in desktop mode submenu will not show up on hover but on clicking the main item. 
			puSlideInFrom: "top",		// popup menu slides in from top, left or right hand side
			puCloseOnSelect: false,		// popup menu closes when item is selected.
			puShowActiveItem: false,	// when popup menu opens, any submenu which contains the active item will be opened. 
			puAligned: false,			// popup menu aligned to trigger DIV
			puFullRange: true,
			smFilterClass: false,		// class which identifies submenu tags (UL or DIV)
			framework: false,			// special handling for different frameworks
			debug: false
		};
		
		if (!$.fn.flxLog){
			if (options.debug)
				console.log('flxMenu: !!! load "debug.js" for logging outputs !!!');	

				$.fn.flxLog= function(){};
		}


		function DoNothing(evt, $item){
			___flxMenuDebug(true, 'DoNothing called on '+ $item.attr("id") );
			
		}
		function DoItemClick(evt, $item){
			$li= $(evt.target).closest("li");
			if ($li.is($item))
				__flxOpenSubmenu2($item, 1);
			evt.stopPropagation();
//				evt.preventDefault();	
				
		}
		function DoItemEnter(evt, $item){
			evt.preventDefault();	
			__flxOpenSubmenu2($item);

		}
		function DoItemLeave(evt, $item){
			evt.preventDefault();	
			__flxCloseSubmenu2($item);
			
		}

		
		if ( this.length == 0 )
		{
			___flxMenuDebug(true, 'No element found for "' + this.selector + '".' );
			return this;
		}

		if ( this.length > 1 )
		{
			___flxMenuDebug(true,  'Found more than one element for "' + this.selector + '".' );
			___flxMenuDebug(true,  'Only handle the first: "' + this[0].id + '".' );
			
			$(this[0]).flxMenu($targetFrame, options );
			return this;
		}
		
		if (this.data('flxMenu')) {
			// exit if flxMenu has already been applied.
			___flxMenuDebug(true, "flxMenu has already been applied");
			return;
		}
		
		var $this= this;
		
		this.data('flxMenu', true);
		
		var options = $.extend({}, defaults, options || {});
		$this.addClass('flxMenu');

		function ___flxMenuDebug(active, str, p0, p1, p2, p3, p4, p5, p6, p7 ){
			if (active)
				$.fn.flxLog(str, p0, p1, p2, p3, p4, p5, p6, p7);
		}
		
		function __flxOptions($anyPart){
			$root= $anyPart.closest(".flxMenu");
			return $root[0].flxOptions;
		}
		function ResetSubmenu($li){
			$frame= $li.children("ul, div").first().css({overflow: "hidden", height: 0});
			$li.removeClass('displaySubmenu');	
		}

		function __flxCloseSubmenu2($li, clicked){
			var opts= __flxOptions($li);
			
			// special handling for framework
			if (opts.framework == "lyraT4"){
				if (window.editPermissions){
					ltxCancelForm();
				}
			}

			opts.fnSubmenuClosing($li);
   			
   			// stop animation if open is in progress
   			$li.removeClass("inProgrOpen");
			var $subFrame= $li.children("ul, div").first();
   			$subFrame.stop(true, false);
   			
   			if (clicked){
   	   			$li.children("ul, div").first().css("overflow", "hidden").animate({height: 0}, opts.duration);
   	   			$li.removeClass('displaySubmenu');
   	   			$li.find('.displaySubmenu').each(function(){
   	   				var $sub= $(this);
   	   				$sub.children("ul, div").first().css("overflow", "hidden").animate({height: 0}, opts.duration);
   	   				$sub.removeClass('displaySubmenu');
   				});   				
   			}
   			else{
   				ResetSubmenu($li);
   	   			$li.find('.displaySubmenu').each(function(){
   	   				ResetSubmenu($(this))
   				});   					
   			}
   			$(document).off("click.flxMenu");    		
		}

		function __flxOpenSubmenu2($li, clicked){
			if ( !$li.hasClass('hasSubmenu') )
				return false;
			
			if ($li.hasClass('displaySubmenu') && (clicked == 1)){
				__flxCloseSubmenu2($li, true);
				return false;	
			}

			if (  $li.hasClass('inProgrOpen') || $li.hasClass('displaySubmenu'))
				return true;
			
			
			var opts= __flxOptions($li);
			
			// close any other submenu
        	$li.siblings('li.displaySubmenu').each(function(){
       			__flxCloseSubmenu2($(this), clicked);
        	});

        	if (opts.smShowByClick && !opts.popup){
        		// close submenu if user click anywhere on the document
				$(document).on("click.flxMenu", function(evt){
					var clickOnMenu= $(evt.target).closest('.flxInitFrame');
					if (clickOnMenu.length)
							console.log('clicked on item of mainMenu');	
					else
						__flxCloseSubmenu2($li, true);
					});
        		
        	}

			// show the submenu
        	var subFrame= $li.children("ul, div");
        	var $subFrame= $(subFrame[0]);

        	var currW= $subFrame.width();
			// calculate height off screen
			$subFrame.css("position", "fixed");
        	$subFrame.css("left", -9999);
       		$subFrame.css("width", currW);
        	
       		$subFrame.css("height", "auto");
       		subH= $subFrame.outerHeight() + 3;
   			___flxMenuDebug(opts.debug, '__flxOpenSubmenu - sub frame calculated h: {0}', subH);
    			
   			// prepare animation of height
        	$subFrame.css("position", "");
        	$subFrame.css("left", "");
        	$subFrame.css("height", 0);
       		$subFrame.css("width", "");
        	     	
        	// adjust height of parent submenu
        	var pSubFrame= $li.parent().closest(".displaySubmenu").children("ul, div");
        	if (pSubFrame.length > 0){
            	var $pSubFrame= $(pSubFrame[0]);
    			___flxMenuDebug(opts.debug, '__flxOpenSubmenu - parent sub frame: <{0}>', pSubFrame[0].nodeName);		

    			$pSubFrame.css("height", "auto");
    			$pSubFrame.css("overflow", "visible");            	
       		
        	}

        	// do animation of height
        	$li.addClass("inProgrOpen");
        	$subFrame.animate({height: subH+"px"}, opts.duration, function(){
        		$li.removeClass("inProgrOpen");
        	});
            
        	$li.addClass('displaySubmenu');

        	return $subFrame;
		}
					
		function flxMenuCheckPosition($elemToMove, $srcFrame, $destFrame, $trigger, initializing){
			var opts= __flxOptions($elemToMove);

			___flxMenuDebug(opts.debug, 'flxMenuCheckPosition({0}, {1}, {2})', $elemToMove[0].id, $srcFrame[0].id, $destFrame[0].id);		
			___flxMenuDebug(opts.debug, '- flxOptions.popup: {0}', opts.popup);		

			var insideDest= false;
			/************* 
			if (opts.fnCheckState){
				var cond= {};
				opts.fnCheckState(cond);
				insideDest= cond.popup;
				___flxMenuDebug(opts.debug, 'fnCheckState returns condition popup= {0}', cond.popup);

			}
			else 
			****************/

			if ($trigger.css('display') != 'none'){
				insideDest= true;
			}


			$Li= $elemToMove.find("li");
			$Li.each(function(){
				if ($(this).hasClass("displaySubmenu"))
					ResetSubmenu($(this));
			});
			
			if (insideDest){
				if ( (!opts.popup) || initializing ){
					$elemToMove[0].onItemEnter= DoNothing;
					$elemToMove[0].onItemLeave= DoNothing;
					$elemToMove[0].onItemClick= DoItemClick;
					$trigger.show();
					$destFrame.append($elemToMove);	
					opts.popup= true;

					// special handling for framework
					if (opts.framework == "lyraT4"){
						if (window.editPermissions){
							$trigger.find(".ltxContainer").addClass("ltx-locked");
							if (!initializing)
								ltxCancelForm();
						}
					}
					opts.fnChanged(true, $trigger, $srcFrame);
					
				}				
			}
			else{
				$trigger.removeClass('showUp');
				$trigger.children(".menuFrame").hide();

				if (opts.popup || initializing){
					if (opts.smShowByClick){
						$elemToMove[0].onItemEnter= DoNothing;
						$elemToMove[0].onItemLeave= DoNothing;
						$elemToMove[0].onItemClick= DoItemClick;
					}
					else{
						$elemToMove[0].onItemEnter= DoItemEnter;
						$elemToMove[0].onItemLeave= DoItemLeave;
						$elemToMove[0].onItemClick= DoNothing;

					}
					$srcFrame.prepend($elemToMove);		
					opts.popup= false;
					
					// special handling for framework
					if (opts.framework == "lyraT4"){
						if (window.editPermissions){
							$trigger.find(".ltxContainer").removeClass("ltx-locked");
						}
					}

//					$trigger.removeClass('showUp');
//					$trigger.css("display", "none");

					opts.fnChanged(false, $srcFrame, $trigger);
				}
				$srcFrame.show();
				$Li.first().find("a:first").focus();

			}
			

		}
		function __flxFindTargetInFrame($frame, liPos, opts, rightStep){	
			___flxMenuDebug(opts.debug, '__flxFindTargetInFrame(<{0}>, {1}, {2})', $frame[0].nodeName, liPos, rightStep);
			var $pFrame= $frame.parent();
			if ($pFrame.is("li")){
				if (rightStep)
					return [];
				return $pFrame;
			}
			
			var dirFkt= 1;
			if (rightStep)
				dirFkt= -1;

			$pFrameChildren= $pFrame.children().filter(function(){
				if (this == $frame[0]){
						___flxMenuDebug(opts.debug, 'remove element <{0}> from frame set', this.nodeName);
						return false;
				}
				var fLeft= $(this).offset().left;
				var fDiff= liPos.left - fLeft;
				if (fDiff * dirFkt < 5){
					___flxMenuDebug(opts.debug, 'remove element <{0}> from frame set; left: {1} ', this.nodeName, fLeft);
					return false;					
				}

				return true;
			});
			
				
			if ($pFrameChildren.length > 0){
				var bestDY= 9999;
				$target= [];

				$pFrameChildren.find("li").each(function(){
					var tPos= $(this).offset();
					___flxMenuDebug(opts.debug, 'compare <li> {0} with {1}', tPos, liPos);
					var diff= (liPos.left - tPos.left) * dirFkt;
					if (diff > 5){
						var dy= Math.abs(liPos.top - tPos.top);
						if (dy < bestDY){
							___flxMenuDebug(opts.debug, 'setting bestDY {0} to {1}', bestDY, dy);
							bestDY= dy;
							$target= $(this);
						}
					}
				});
					
				return $target;
			}
			else
				return __flxFindTargetInFrame($pFrame, liPos, opts, rightStep);
			
		}
				
		function __flxFindTargetInFrameV($frame, $li, opts, stepUp){	
			___flxMenuDebug(opts.debug, '__flxFindTargetInFrameV(<{0}>, {1})', $frame[0].nodeName, stepUp);
			var $pFrame= $frame.parent();
			if ($pFrame.is("li")){
				if (opts.popup){
				if (stepUp)
					return $pFrame;
				return $pFrame.next();
					
				}

				// not a popup menu
				if (stepUp){
					__flxCloseSubmenu2($li);
					return $pFrame;						
				}
					
				return [];
			}
			
			var dirFkt= 1;
			if (stepUp)
				dirFkt= -1;
			var liPos= $li.offset();

			$pFrameChildren= $pFrame.children().filter(function(){
				if (this == $frame[0]){
						___flxMenuDebug(opts.debug, 'remove element <{0}> from frame set', this.nodeName);
						return false;
				}
				var fTop= $(this).offset().top;
				var fDiff= fTop - liPos.top;
				if (fDiff * dirFkt < 20){
					___flxMenuDebug(opts.debug, 'remove element <{0}> from frame set; top: {1} ', this.nodeName, fTop);
					return false;					
				}
				return true;
			});
			
				
			if ($pFrameChildren.length > 0){
				var bestDY= 9999;
				$target= [];

				$pFrameChildren.find("li").each(function(){
					var tPos= $(this).offset();
					___flxMenuDebug(opts.debug, 'compare <li> {0} with {1}', tPos, liPos);
					var diff= (tPos.top - liPos.top) * dirFkt;
					if (diff > 5){
						var dy= Math.abs(liPos.top - tPos.top);
						if (dy < bestDY){
							___flxMenuDebug(opts.debug, 'setting bestDY {0} to {1}', bestDY, dy);
							bestDY= dy;
							$target= $(this);
						}
					}
				});
					
				return $target;

				////////////////////////////////////////////////////////////////
//
//				var $liSet= $pFrameChildren.find("li");
//				for(var i= 0; i < $liSet.length; i++){
//					var $li= $liSet.eq(i * dirFkt);
//					var tPos= $li.offset();
//					___flxMenuDebug('compare <li> {0} with {1}', tPos, liPos);
//					var diff= (tPos.top - liPos.top) * dirFkt;
//					if (diff > 5){
//						return $li;
//					}						
//					
//				}
			}

			return __flxFindTargetInFrameV($pFrame, $li, opts, stepUp);
			
		}
		
		function flxPopupSlideIn($puTrigger, dir){
			var $puFrame= $puTrigger.children(".menuFrame");
			var $puSlider= $puFrame.children(".menuSlider");
			var $flxMenu= $puSlider.children(".flxMenu");
			var opts= $flxMenu[0].flxOptions; 
			___flxMenuDebug(opts.debug, '"menuShow" triggered');

			var $anchorToFocuse;
			$Li= $flxMenu.find('li');
			$Li.each(function(){
				// show active item
				if ($(this).hasClass("active")){						
					$anchorToFocuse= $(this).children("a");
					if (!$anchorToFocuse.prop("href"))
						$anchorToFocuse.prop("href", "javascript:");
					
					$(this).parentsUntil(".flxMenu", "li").each(function(evt){
						$parentLi= $(this);
						$parentLi.addClass("displaySubmenu");
						$parentLi.children("ul, div").first().css("height", "auto");
					});
				}
				else
					ResetSubmenu($(this));
					
			});
			
			if (dir)
				flxPopupMoveInHoriz($puFrame, $puSlider, opts, dir);
			else
				flxPopupMoveInTop($puFrame, $puSlider, opts);
			
			$puFrame.parent().addClass("showUp");

						
			if (!$anchorToFocuse)
				$anchorToFocuse= $Li.first().find("a:first");
			
			___flxMenuDebug(opts.debug, 'try to set focus to {0}', $anchorToFocuse.text());
			$anchorToFocuse.focus();
			
			opts.fnPopupShowing(true, $puTrigger);

		}
		function flxPopupMoveInHoriz($puFrame, $puSlider, opts, dir){
			var cssDir= "left";
			var cssDirOp= "right";
			if (dir == slide.puRight){
				cssDir= "right";
				cssDirOp= "left";
			}
					
				
			$puFrame.css("display", "block");
			if (opts.puAligned)
	   			$puFrame.css(cssDir, "100%");
			else
				$puFrame.css(cssDir, 0);
   			$puFrame.css(cssDirOp, "auto");
       		$puFrame.css("width", 0);
   			$puFrame.css("overflow", "hidden");
   			
   			
			$puSlider.css("position", "fixed");
			$puSlider.css(cssDirOp, "auto");
			$puSlider.css(cssDir, -9999);
       		var calcW= $puSlider.outerWidth() + 3;

       		if (opts.puFullRange){
       			$puFrame.css("position", "fixed");
       			$puFrame.css("height", "100%");
       			$puSlider.css("height", "100%");
       		}
       		else
       			$puFrame.css("height", $puSlider.outerHeight());
   			___flxMenuDebug(opts.debug, 'flxPopupMoveInHoriz - menu w: {0}', calcW);
    			
   			// prepare animation
   			$puSlider.css("position", "");
   			$puSlider.css(cssDir, 0);
   			$puSlider.css(cssDirOp, "auto");
   			
   			
        	// do animation 
   			$puSlider.addClass("inProgrOpen");
   			$puFrame.animate({width: calcW}, opts.duration, function(){
   				$puSlider.removeClass("inProgrOpen");
   				$puFrame.parent().addClass('showUp');
   				$puFrame.css("overflow", "");
   	  		 
        	});
        	
   			
		}

		function flxPopupMoveInTop($puFrame, $puSlider, opts){

			$puFrame.css("display", "block");
			if (opts.puAligned){
	   			$puFrame.css("top", "100%");	
			}
			else
				$puFrame.css("top", 0);
       		$puFrame.css("height", 0);
   			$puFrame.css("overflow", "hidden");
   			
			// calculate height off screen
			$puSlider.css("position", "fixed");
			$puSlider.css("bottom", "auto");
			$puSlider.css("top", -9999);
       		var calcH= $puSlider.outerHeight();
   			___flxMenuDebug(opts.debug, 'flxPopupMoveInTop - menu calculated h: {0}', calcH);

       		//$puFrame.css("width", $puSlider.outerWidth());
    			
   			// prepare animation
   			$puSlider.css("position", "");
   			$puSlider.css("bottom", 0);
   			$puSlider.css("top", "auto");
   			
       		if (opts.puFullRange){
       			if (!opts.puAligned)
       				$puFrame.css("position", "fixed");
       			$puFrame.css("left", "0");
       			$puFrame.css("width", "100%");
       			$puSlider.css("width", "100%");
       		}
       		else
       			$puFrame.css("width", $puSlider.outerWidth());

        	// do animation 
   			$puSlider.addClass("inProgrOpen");
   			$puFrame.animate({height: calcH}, opts.duration, function(){
   				$puSlider.removeClass("inProgrOpen");
   				$puFrame.parent().addClass('showUp');
   				$puFrame.css("overflow", "");
   	   			$puSlider.css("bottom", "auto");
   	   			$puSlider.css("top", 0);
   	  		 
        	});
        	

   			
   			/********************************************
 			   			
			// calculate height off screen
//			$puTrigger.addClass('showUp');
			$puFrame.css("display", "block");
   			$puFrame.css("left", 0);
   			$puFrame.css("width", "100%");
			
			$puSlider.css("position", "fixed");
			$puSlider.css("left", -9999);
//   			$puSlider.css("width", "");
			$puSlider.css("width", "100%");
			$puSlider.css("height", "auto");
       		var calcH= $puSlider.outerHeight() + 3;
   			___flxMenuDebug(opts.debug, '__flxOpenSubmenu - menu calculated h: {0}', calcH);
    			
   			// prepare animation of height
   			$puSlider.css("position", "");
   			$puSlider.css("top", -calcH+"px");
   			$puSlider.css("left", 0);
   			
        	// do animation of height
   			$puSlider.addClass("inProgrOpen");
   			$puSlider.animate({top: 0}, opts.duration, function(){
   				$puSlider.removeClass("inProgrOpen");
   				$puFrame.parent().addClass('showUp');

        	});
        	*******************************************************/
			
		}
		
		function flxPopupSlideOut($puTrigger, dir){
			var $puFrame= $puTrigger.children(".menuFrame");
			var $puSlider= $puFrame.children(".menuSlider");
			var $flxMenu= $puSlider.children(".flxMenu");
			var opts= $flxMenu[0].flxOptions; 
			___flxMenuDebug(opts.debug, '"menuClose" triggered');
			
   			$puFrame.css("overflow", "hidden");
			if (dir)
				flxPopupMoveOutHoriz($puFrame, $puSlider, opts);
			else
				flxPopupMoveOutTop($puFrame, $puSlider, opts);
   			
			$puTrigger.removeClass("showUp");

			// set focus to toggle button
   			$puTrigger.children("a").first().focus();			
//   			$puTrigger.children(".btnToggle:first").focus();			

			opts.fnPopupShowing(false, $puTrigger);
			
		}
		function flxPopupMoveOutTop($puFrame, $puSlider, opts){
			
   			$puFrame.animate({height: 0}, opts.duration, function(){
   				$puFrame.parent().removeClass('showUp');
   				$puFrame.css("display", "none");
 
        	});	
			
			
		}
		function flxPopupMoveOutHoriz($puFrame, $puSlider, opts){
       		var calcW= $puSlider.outerWidth() + 3;
   			___flxMenuDebug(opts.debug, 'flxPopupMoveOutLeft - menu w: {0}', calcW);
   			$puFrame.css("height", $puSlider.outerHeight());
   			$puFrame.animate({width: 0}, opts.duration, function(){
   				$puFrame.parent().removeClass('showUp');
   				$puFrame.css("display", "none");
 
        	});	
		}


		/////////// event handlers for "menuOpen" ////////////////////////////////////
		function flxPopupSlideInFromTop(evt){
			flxPopupSlideIn($(this));	
		}
		function flxPopupSlideInFromLeft(evt){
			flxPopupSlideIn($(this), slide.puLeft);	
		}
		function flxPopupSlideInFromRight(evt){
			flxPopupSlideIn($(this), slide.puRight);	
		}

		////////// event handlers for "menuClose" ///////////////////////////////////////
		function flxPopupSlideOutLeft(evt){
			flxPopupSlideOut($(this), slide.puLeft);	
		}
		function flxPopupSlideOutRight(evt){
			flxPopupSlideOut($(this), slide.puRight);	
		}
		function flxPopupSlideOutTop(evt){
			flxPopupSlideOut($(this));	
		}

		
		function flxMenuInit(elemToMove, $destFrame){
			___flxMenuDebug(options.debug, 'init with options: {0}', options);	
			
			elemToMove.target= $destFrame[0];
			
			//////////////// prepare popup menu ////////////////////////////////////////////7
			if (options.puSlideInFrom != "top")
				options.puAligned= false;	// we dont want horizontal slide in and toggle buttons at the same time!
			
			var $TB= $destFrame.children("a").first();			
			if ($TB.length > 0){
				if ($TB.hasClass("flxMenuToggle")){
					$TB.click(function(){ $(this).trigger("menuToggle")});
					options.puAligned= true;
				}
				else{
					$TB.addClass("flxMenuOpen");
					$TB.click(function(){ $(this).trigger("menuShow")});
				}
			}
			else{
				// we need to create an Open button
				var htmlBtnSymbol= "";
				if (options.img)
					htmlBtnSymbol= '<img class="menuSymbol" src="'+options.img+'" />';
				else
					htmlBtnSymbol= '<ul class="menuSymbol"><li></li><li></li><li></li></ul>';
				
				if (options.puAligned){
					var htmlBtnToggle= '<a href="javascript:" class="flxMenuToggle">'+htmlBtnSymbol+'</a>';
					$TB= $(htmlBtnToggle);
					$TB.click(function(){ $(this).trigger("menuToggle")});	
				}
				else{
					var htmlBtnToggle= '<a href="javascript:" class="flxMenuOpen">'+htmlBtnSymbol+'</a>';
					$TB= $(htmlBtnToggle);
					$TB.click(function(){ $(this).trigger("menuShow")});	
				}
				
				$destFrame.prepend($TB);
			}
			
			// frame and slider
			var $menuFrame= $destFrame.children(".menuFrame");
			if ($menuFrame.length == 0){
				var htmlCloseBtn= "";
				// close button only if not opened by toggle button or horizontal slide in
				if (!$TB.hasClass("flxMenuToggle") )
					htmlCloseBtn= '<a href="javascript:" title="close" class="menuClose" onclick="$(this).trigger(\'menuClose\')"> </a>';
				// create frame and slider
				var htmlDivMenuFrame= '<div class="menuFrame"><div class="menuSlider">'+htmlCloseBtn+'</div></div>';
				
				$destFrame.append($(htmlDivMenuFrame));
			}

			if (!elemToMove.id)
				elemToMove.id= 'flxMenu';
			var $elemToMove= $(elemToMove);
			
			// handler for keyboard navigation (both desktop and mobile mode)
			$menuButtons= $elemToMove.find("a");
			$menuButtons.on("keydown", function(evt){
				var opts= __flxOptions($(this));
				___flxMenuDebug(opts.debug, 'keydown code {1} on {0}', $(this).text(), evt.which);
				switch(evt.which){
				case 27:
					// ESC
					evt.preventDefault();
					$(this).trigger('menuClose');
					break;
				case 13:
					$Li= $(this).closest("li");
					if ($Li.hasClass("hasSubmenu")){
						evt.preventDefault();
						__flxOpenSubmenu2($Li);
					}
					break;
				case 40:
					// down
					evt.preventDefault();
					$Li= $(this).closest("li");
					
					// check horizontal
					var $jumpLi= [];
					var cssFloat= $Li.css("float");
					if ( (cssFloat == "left") || (cssFloat == "right") ){
						if ($Li.hasClass("hasSubmenu")){
							__flxOpenSubmenu2($Li);
							$jumpLi= $Li.find("li:first");						
						}
					}
					else{
						$jumpLi= $Li.next();
						if ($jumpLi.length == 0){
							$jumpLi= __flxFindTargetInFrameV($Li.parent(), $Li, opts);
							if ($jumpLi.length == 0)
								break;
						
							cssFloat= $jumpLi.css("float");
							if ( (cssFloat == "left") || (cssFloat == "right") )
								break;
						}
						else if (!opts.popup)
							__flxCloseSubmenu2($Li);
 
					}
					
					if ($jumpLi.length > 0){
						$jumpLi.find("a:first").focus();

					}

					break;
				case 38:
					// up
					evt.preventDefault();						
					$Li= $(this).closest("li");
					
					// check horizontal
					var cssFloat= $Li.css("float");
					if ( (cssFloat == "left") || (cssFloat == "right") ){
						if ($Li.hasClass("displaySubmenu")){
							__flxCloseSubmenu2($Li);
						}
						break;					
					}
					
					var $jumpLi= $Li.prev();
					if ($jumpLi.length == 0)
						$jumpLi= __flxFindTargetInFrameV($Li.parent(), $Li, opts, true);
					else if (!opts.popup)
						__flxCloseSubmenu2($Li);

//					$jumpLi= $Li.parent().closest("li");

			
					if ($jumpLi.length > 0){		
						$jumpLi.find("a:first").focus();
					
					}
					
					break;
				
				case 37:
					// left
					evt.preventDefault();
					$Li= $(this).closest("li");
					if ($Li.hasClass("displaySubmenu")){
						__flxCloseSubmenu2($Li);						
						break;
					}
					var $jumpLi= [];
					var cssFloat= $Li.css("float");
					if (cssFloat == "left")
						$jumpLi= $Li.prev();
					else if (cssFloat == "right")
						$jumpLi= $Li.next();
					else{
						
						var $liParent= $Li.parent();
						$jumpLi= __flxFindTargetInFrame($liParent, $Li.offset(), opts);
						if ($jumpLi.length == 0)
							$jumpLi= $liParent.closest("li");
						
					}
							
					if ($jumpLi.length > 0)
						$jumpLi.find("a:first").focus();
					
					break;
					
				case 39:
					// right
					evt.preventDefault();
					$Li= $(this).closest("li");
					
					// check horizontal
					var $jumpLi= [];
					var cssFloat= $Li.css("float");
					if (cssFloat == "left"){
						if (!opts.popup)
							__flxCloseSubmenu2($Li);
						$jumpLi= $Li.next();
					}
					else if (cssFloat == "right"){
						if (!opts.popup)
							__flxCloseSubmenu2($Li);
						
						$jumpLi= $Li.prev();
					}
					else{
						// vertical nav-bar
						if ($Li.hasClass("hasSubmenu")){
							__flxOpenSubmenu2($Li, 39);
//							__flxOpenSubmenu2($Li);
							$jumpLi= $Li.find("li:first");						
						}
						else{
							// in case we have a 2 column panel
							$jumpLi= __flxFindTargetInFrame($Li.parent(), $Li.offset(), opts, true);
							
						}
					}
							
					if ($jumpLi.length > 0)
						$jumpLi.find("a:first").focus();
					
					break;
				}
				
			});
			
			// special handling for framework
			if (options.framework == "lyraT4"){
				if (window.editPermissions){
					___flxMenuDebug(options.debug, 'setting "smShowByClick" in lyraT4 edit mode');

					options.smShowByClick= true;
				}
			}

			// option close menu when menu item is clicked
			if (options.puCloseOnSelect)
				$menuButtons.on("click", function(){
					if ( !$(this).closest("li").hasClass("hasSubmenu") )
						$(this).trigger("menuClose");
				});
			
			// be sure to have a frame to come back in desktop mode
			var $elemFrame= options.initialFrame;
			if (!$elemFrame || $elemFrame.length == 0){
				___flxMenuDebug(options.debug, 'build elemFrame around "{0}"', elemToMove.id);
				$elemToMove.wrap('<div id="flxFrame'+elemToMove.id+'"></div>');	
				$elemFrame= $(elemToMove).parent();
			}
			elemToMove.initialFrame= $elemFrame[0];
			$elemFrame.addClass('flxInitFrame');
			if (options.orientation == "vertical")
				$elemFrame.addClass('flx-vertical');
			
			
			// mark and connect submenus
			$elemToMove.find('li').each(function(){
				// In dynamic systems we could have a situation where <ul> list is empty.
				// Empty lists are no treated as submenus. So we search for nested <li> elements! 
				var $li= $(this);
				if ($li.find('li').length > 0){
					$li.addClass('hasSubmenu');
					$li.on('click', function(evt){
						$elemToMove[0].onItemClick(evt, $li);
					});
					$li.on('mouseenter', function(evt){
						$elemToMove[0].onItemEnter(evt, $li);
					});
					$li.on('mouseleave',  function(evt){
						$elemToMove[0].onItemLeave(evt, $li);
					});
			     }
			 });
							
			$destFrame.addClass('menuTrigger');
			
			// handler for CLOSE button click
			if (options.puSlideInFrom == "left"){
				$destFrame.on('menuClose', flxPopupSlideOutLeft).on("menuShow", flxPopupSlideInFromLeft);
				$destFrame.addClass('flx-left');
				
			}
			else if (options.puSlideInFrom == "right"){
				$destFrame.on('menuClose', flxPopupSlideOutRight).on("menuShow", flxPopupSlideInFromRight);
				$destFrame.addClass('flx-right');
				
			}
			else
				$destFrame.on('menuClose', flxPopupSlideOutTop).on("menuShow", flxPopupSlideInFromTop);
			
			$destFrame.on('menuToggle', function(){
				if ($(this).hasClass("showUp"))
					$(this).triggerHandler("menuClose");
				else
					$(this).triggerHandler("menuShow");
			});
			
			$elemToMove.on('flxMenuCheck', function(){
				var $target= $(this.target);
				flxMenuCheckPosition($elemToMove, $(this.initialFrame), $target.children(".menuFrame").children(".menuSlider"), $target);				
			}).on('flxMenuNewItem', function(evt, domNewItem){
				$(domNewItem).parentsUtil(".flxMenu").filter("li").addClass("hasSubmenu");
			}).on('flxMenuOptions', function(evt, optsIn){
				this.flxOptions= $.extend({}, this.flxOptions, optsIn);
				var newOpts= __flxOptions($(this));
				___flxMenuDebug(true, 'flxMenuOptions changed options: "{0}"', newOpts);

			});
			$(window).on("resize", function(){
				$(elemToMove).trigger('flxMenuCheck');
			});

			elemToMove.flxOptions= options;

			flxMenuCheckPosition($elemToMove, $elemFrame, $destFrame.children(".menuFrame").children(".menuSlider"), $destFrame, true);
			options.fnInit($elemToMove, $elemFrame, $destFrame);
			
		}	//- END flxMenuInit _________________________________________

		flxMenuInit(this[0], $targetFrame);

		return this;
		
	};	//- END $.fn.flxMenu ___________________________________________________
}( jQuery ));

