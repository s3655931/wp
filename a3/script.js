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

function showsynopsis(id) {
	var item = document.getElementById(id);

	item.style.display="block"

}
