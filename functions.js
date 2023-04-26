function crossfunc() {
    let hidden = document.getElementById("hidden-call-whatsapp");
    hidden.style.display = "none";
}

// whatsapp link 
function whatsapplink() {
    window.open("https://wa.me/message/BUHZBSROQLXLC1", "_blank");
}
function facebooklink() {
    window.open("https://www.facebook.com/shaikh.pigeonshouse", "_blank");
}
function youtubelink() {
    window.open("https://www.youtube.com/@shaikhpigeonshouse", "_blank");
}
function instagramlink() {
    window.open("https://www.instagram.com/shaikh_pigeons_house/?igshid=ZDdkNTZiNTM%3D", "_blank");
}
function callmelink() {
    window.location.href("tel:+923004310261");
}

// read  more and read less 
function showPara() {
    document.getElementById('hidden-intro').style.display = "block";
    document.getElementById('read-more-btn-1').style.display = "none";

}
function hidePara() {
    document.getElementById('hidden-intro').style.display = "none";
    document.getElementById('read-more-btn-1').style.display = "block";
}
