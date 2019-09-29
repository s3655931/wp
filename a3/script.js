window.onscroll = function ()
{
  var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  var n = -1;
  while(n<articles.length - 1 && articles[n+1].offsetTop <= window.scrollY + 10)
  {
    n++;
  }
  for(var a=0; a<navlinks.length; a++)
  {
    navlinks[a].classList.remove('active');
  }
  navlinks[n].classList.add('active');
}

function showsynopsis(tempid) {
	var ids = ['Avengers_Synopsis', 'Wedding_Synopsis', 'Dumbo_Synopsis', 'Prince_Synopsis'];

	for (var i = 0; i < 4; i++) {

		var item = document.getElementById(ids[i]);
		if (tempid == ids[i]) {
			item.style.display="block";
		}
		else {
			item.style.display="none";
		}
	}

}
