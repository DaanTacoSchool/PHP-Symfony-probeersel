/*
 * Made by Daan van Essen
 * Thursday 17th of December 2015 
 * based on the example on http://www.w3schools.com/js/js_cookies.asp
 */
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    
    document.cookie = cname + "=" + cvalue + "; " + expires + "; ";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function editCookie(cname4,cVal){
    setCookie(cname4,cVal,365);
   
}
function incrementValueCookie(cname5){
    var cVal=getCookie(cname5);
   
    cVal++;
    
    editCookie(cname5,cVal);
}
function decrementValueCookie(cname6){
    var cVal=getCookie(cname6);
   
    cVal = cVal-1;
   
    editCookie(cname6,cVal);
}

function checkOrSetCookie(cname2, cdata) {
   var cookie = getCookie(cname2);
   var rVal;
    if (cookie != "") {
       rVal=true;
       
    } else {
         
        if (cdata != "" && cdata != null) {
            setCookie(cname2, cdata, 365);
            
        }else{
            rVal=false;
            
        }
    }
}

function deleteCookie(cname3){
    document.cookie = cname3+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
function deleteAllCookies() {
    alert(document.cookie);
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
    	var cookie = cookies[i];
    	var eqPos = cookie.indexOf("=");
    	var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    	document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}