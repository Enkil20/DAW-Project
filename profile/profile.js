var nav = document.getElementsByClassName("nav-item");
nav[1].style.visibility = "hidden";
var logout = document.createElement("LI");
logout.classList.add("nav-item");
var anchor = document.createElement("a");
anchor.classList.add("nav-link");
anchor.href = "../session/logout.php";
anchor.innerHTML = "Logout";
logout.appendChild(anchor);
document.getElementsByClassName("navbar-nav")[0].replaceChild(logout,document.getElementsByClassName("navbar-nav")[0].childNodes[1]);
var btnName = document.getElementById("nameChng");
var btnPass = document.getElementById("passChng");
var btnImg = document.getElementById("imgChng");
var hideName=false;
var hidePass=false;
var hideImg=false;
btnName.onclick = function(){
	if(hideName==false){
		var form = document.getElementById("changeNameForm");
		form.style.display = "block";
		form =  document.getElementById("changePassForm");
		form.style.display="none";
		form =  document.getElementById("changeImgForm");
		form.style.display="none";
		hideName=true;
	}else{
		document.getElementById("changeNameForm").style.display = "none";
		hideName=false;
	}
}
btnPass.onclick = function(){
	if(hidePass==false){
		var form = document.getElementById("changePassForm");
		form.style.display = "block";
		form =  document.getElementById("changeNameForm");
		form.style.display="none";
		form =  document.getElementById("changeImgForm");
		form.style.display="none";
		hidePass=true;
	}else{
		document.getElementById("changePassForm").style.display = "none";
		hidePass=false;
	}
}
btnImg.onclick = function(){
	if(hideImg==false){
		var form = document.getElementById("changeImgForm");
		form.style.display = "block";
		form =  document.getElementById("changePassForm");
		form.style.display="none";
		form =  document.getElementById("changeNameForm");
		form.style.display="none";
		hideImg=true;
	}else{
		document.getElementById("changeImgForm").style.display = "none";
		hideImg=false;
	}
}

