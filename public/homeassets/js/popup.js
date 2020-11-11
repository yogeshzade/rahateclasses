function subscriptionPopup(){
    // get the mPopup
    var mpopup = $('#mpopupBox');
    
    // open the mPopup
    mpopup.show();
    
    // close the mPopup once close element is clicked
    $(".close").on('click',function(){
        mpopup.hide();
    });
    
    // close the mPopup when user clicks outside of the box
    $(window).on('click', function(e) {
        if(e.target == mpopup[0]){
            mpopup.hide();
        }
    });
}