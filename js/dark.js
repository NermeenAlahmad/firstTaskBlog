const chk = document.getElementById('chk');
let dark1 = document.getElementById('dark1');
let dark2 = document.getElementById('dark2');
let dark3 = document.getElementById('dark3');


chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
    dark1.style.color = "white";
    dark2.style.color = "white";
    dark3.style.color = "white";

});
