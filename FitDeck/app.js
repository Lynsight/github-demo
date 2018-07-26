const ol = document.querySelector('#workoutList');
let ilArray = ol.children;
let randomItem;
const shuffleBtn = document.querySelector('#shuffle');

//turn the HTML collection into an array
ilArray = []
  .slice
  .call(ilArray);

val = ilArray;
console.log(val, val.length, val[0]);



let randomizeList = function () {
  console.log('kevin');
  let randomArray = [];
  //iterate through the enitre ilArray until there are no items left
  console.log(ilArray.length);
  for (let i = ilArray.length; i > 0; i--) {
    console.log('fab');
    //pull out a random item
    let randoNumber = Math.floor(Math.random() * ilArray.length);
    console.log(randoNumber);
    //removes the item and returns it as an array of 1
    randomItem = ilArray.splice(randoNumber, 1);
    console.log(randomItem[0]);
    console.log(ilArray);

    //add the removed element (which comes as an array) to the randomArray
    randomArray = randomArray.concat(randomItem);
    console.log(randomArray);
  }
  ilArray = randomArray;
  return randomArray;
}

let refreshList = function () {
  console.log('waldo');
  //remove all the child li elements from the original ol
  let randomArray = randomizeList();
  
  // while (ol.firstChild) {
  //   ol
  //     .firstChild
  //     .remove();
  // }

  //add the randomized list
  for (let i = 0; i < randomArray.length; i++) {
    ol.appendChild(randomArray[i]);
  }
}

shuffleBtn.addEventListener('click', refreshList);
