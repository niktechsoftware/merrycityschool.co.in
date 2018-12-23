function toggle(obj, img) {
	var el = document.getElementById(obj);
	var imgEl=document.getElementById(img);
	if ( el.style.display != 'none' ) {
		el.style.display = 'none';
		imgEl.src='images/show_icon.gif';
	}
	else {
		el.style.display = '';
		imgEl.src='images/hide_icon.gif';
	}
	
}

function toggleMore(mobj, lobj) {
	var mel = document.getElementById(mobj);
	var lel =document.getElementById(lobj);
	
	if ( mel.style.display = 'none' ) {
		mel.style.display = 'block';
		lel.style.display = 'none';
	}
	else {
		mel.style.display = 'none';
		lel.style.display = 'block';
	}
	
}