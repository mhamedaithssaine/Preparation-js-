

//exercice 2

t1 = [1,0,2,3,4];
t2 = [3,5,6,7,8,13];


function somme(t1,t2){
  var Somme=[];
  for (var i = 0; i < t2.length; i++) {
      Somme[i]=t1[i]+t2[i]
    
  }
  return Somme;
}


console.log(somme(t1,t2));


//exercice 1


t1 = ['aa','aaaa','aaaaaaa','aaaaaaaaa'];

function lengthS(t1){
    let t2 = t1[0];
  for (let i = 1; i < t1.length; i++) {
    if (t1[i].length > t2.length) {
      t2 = t1[i];
    }
  }
  return t2;
}

console.log(lengthS(t1));
console.log("".length)