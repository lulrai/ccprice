$(document).ready(function(){
    $("#settingshowhide").hide();
    $("#adminshowhide").hide();
    $("#modshowhide").hide();
    $("#funshowhide").hide();
    $("#informshowhide").hide();
    
    //Change carat side
    $("#settingscmd").click(function() {
        $(this).find("i").toggleClass('fa fa-caret-right fa fa-caret-down');
    });
    
    $("#admincmd").click(function() {
        $(this).find("i").toggleClass('fa fa-caret-right fa fa-caret-down');
    });
    
    $("#modcmd").click(function() {
        $(this).find("i").toggleClass('fa fa-caret-right fa fa-caret-down');
    });
    
    $("#funcmd").click(function() {
        $(this).find("i").toggleClass('fa fa-caret-right fa fa-caret-down');
    });
    
    $("#informcmd").click(function() {
        $(this).find("i").toggleClass('fa fa-caret-right fa fa-caret-down');
    });
    
    
    //Show/hide div
    $("#settingscmd").click(function(){
        $("#settingshowhide").slideToggle("slow");
    });
    
    $("#admincmd").click(function(){
        $("#adminshowhide").slideToggle("slow");
    });
    
    $("#modcmd").click(function(){
        $("#modshowhide").slideToggle("slow");
    });
    
    $("#funcmd").click(function(){
        $("#funshowhide").slideToggle("slow");
    });
    
    $("#informcmd").click(function(){
        $("#informshowhide").slideToggle("slow");
    });
});