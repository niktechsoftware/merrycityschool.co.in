function tabbing(obj, disable1, disable2, disable3, disable4) {
	var tabOn = document.getElementById(obj);
	var contentOnId = obj + 'Content';
	var contentOn = document.getElementById(contentOnId);
	tabOn.className += ' selected';
	contentOn.style.display = 'block';

	var tabOff1 = document.getElementById(disable1);
	var contentOffId1 = disable1 + 'Content';
	var contentOff1 = document.getElementById(contentOffId1);
	tabOff1.className='';
	contentOff1.style.display = 'none';

	if(disable2) {
		var tabOff2 = document.getElementById(disable2);
		var contentOffId2 = disable2 + 'Content';
		var contentOff2 = document.getElementById(contentOffId2);
		tabOff2.className='';
		contentOff2.style.display = 'none';
	}
	if(disable3) {
		var tabOff3 = document.getElementById(disable3);
		var contentOffId3 = disable3 + 'Content';
		var contentOff3 = document.getElementById(contentOffId3);
		tabOff3.className='';
		contentOff3.style.display = 'none';
	}
	if(disable4) {
		var tabOff4 = document.getElementById(disable4);
		var contentOffId4 = disable4 + 'Content';
		var contentOff4 = document.getElementById(contentOffId4);
		tabOff4.className='';
		contentOff4.style.display = 'none';
	}
}