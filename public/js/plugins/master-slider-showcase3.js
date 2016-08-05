// var MasterSliderShowcase3 = function () {

    // return {

        // //Master Slider
        // initMasterSliderShowcase3: function () {
			// var slider3 = new MasterSlider();
		     
		    // slider3.control('arrows');  
		    // slider3.control('circletimer' , {color:"#fff" , stroke:9});
		    // slider3.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:285,height:135, align:'bottom', space:0 , margin:-12, hideUnder:992});
		 
		    // slider3.setup('mslider3' , {
		        // width:1140,
		        // height:500,
		        // space:0,
		        // speed: 50,
		        // preload:'all',
		        // view:'basic'
		    // });
        // }
        
    // };
    
// }();
var MSShowCase3 = function () {

  return {
    //Master Slider - Full Width
    initMSShowCase3: function () {
      var slider = new MasterSlider();
        slider.setup('mslider3' , {
        width:1140,
        height:500,
        // fullwidth:true,
		space:0,
        centerControls:false,
        speed:50,
		// preload:'all',
        view:'basic',
        // loop:true,
      });
      slider.control('arrows');
      // slider.control('bullets' ,{autohide:false});
	  slider.control('circletimer' , {color:"#fff" , stroke:9});
	  slider.control('thumblist' , {autohide:false ,dir:'h', type:'tabs',width:285,height:135, align:'bottom', space:0 , margin:-12, hideUnder:992});
    } // end initMSfullWidth
  }; // end return

}();