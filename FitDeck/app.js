const ol = document.querySelector('#workoutList');
const lis = document.querySelectorAll('#workoutList li');
const btn = document.querySelector('#shuffle');

//event Listener
document.getElementById("shuffle").addEventListener("click",
function(e){

for (var i = ol.children.length; i >= 0; i--) {
    ol.appendChild(ol.children[Math.random() * i | 0]);
  }

  for(var i=12; li=lis[i]; i--) {
    li.style.opacity = '0.3';
  }
      // li.parentNode.removeChild(li);


btn.value = 'Reset';
});
