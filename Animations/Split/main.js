


document.addEventListener('DOMContentLoaded',function () {
	let wrapper=document.getElementById('wrapper');
	let topLayer=wrapper.querySelector('.top');
	let handel=wrapper.querySelector('.handel');
	let skew=0;
	let delta=0;
	if (wrapper.className.indexOf('skewed')!=-1) {
		skew=1000;
	}
	wrapper.addEventListener('mousemove',function(e){
		delta=(e.clientX-window.innerWidth/2)*.5;
		handel.style.left=e.clientX +delta +'px';
		topLayer.style.width=e.clientX + skew + delta + 'px';
	});
});