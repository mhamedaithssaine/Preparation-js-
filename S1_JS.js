

//exercice 2

// t1 = [1,0,2,3,4];
// t2 = [3,5,6,7,8,13];


// function somme(t1,t2){
//   var Somme=[];
//   for (var i = 0; i < t2.length; i++) {
//       Somme[i]=t1[i]+t2[i]
    
//   }
//   return Somme;
// }


// console.log(somme(t1,t2));


//exercice 1


// let t1 = ['aa','aaaa','aaaaaaa','aaaaaaaaa'];

// function lengthS(t1){
//     let t2 = t1[0];
//   for (let i = 1; i < t1.length; i++) {
//     if (t1[i].length > t2[i].length) {
//       t2 = t1[i];
//     }
//   }
//   return t2;
// }

// console.log(lengthS(t1));
// console.log("".length)




//exercice 3 

// function removeEle(tab,value){
//   let result=[];
//   let found = false;

//   for (let i = 0; i < tab.length-1; i++) {
//            if(tab[i]===value){
//             found = true ;
//            }
//           if(found){
//             result[result.length]=tab[i+1];
//           }
//         }
//         return result;
// }
// let tab = [1,2,3,8,77,6,9,4,5,2]
// let result = removeEle(tab,3);
// console.log(result);




// let tab = [1,5,6,6,2,5];

// function somImpair (tab){
//     const tab1 = [];
//     let some = 0;

//     for (let i = 0; i < tab.length; i++) {
//         if (tab[i] %2 !== 0){
//             tab1.push(tab[i]);
//           some += tab[i];
//         }

       
        
//     }
//     return tab1 , some
// }

// console.log(somImpair(tab))




//  let tab = [1,5,6,6,2,5];

//  function index(tab,index){
    
//     for (let i = 0; i < tab.length; i++) {
       
//         if(tab[i]==index){
            
//             return i;
           
//         }
        
//     }
//     return -1
//  }

//  console.log(index(tab,7));
 

// let tab = "radar";


// function reverseValid(tab){

// //    const rev = tab.split("").reverse().join("")
   
// let stri ="";
// for(let i = tab.length-1 ; i>=0; i--){
//     stri+=tab[i]
// }     


// if (stri==tab){
//             return true;
//         }
//         return false 
    
// }
// console.log(reverseValid(tab))





// let compte = "123456789456789";



// function cacheCo(compte){
//     let cashe =""
//     for(let i =0; i<compte.length-4;i++){
//         cashe+="*"
       
//     }

//     for(let j = compte.length-4; j<compte.length;j++){
//         cashe +=compte[j];
//     }


//     return cashe
// }
// console.log(cacheCo(compte));


// let date ="2/05/2025"

// function valideDate(date){
//    const JMA =  date.split("/");
// if(31 >= JMA[0] >0 && JMA[0].length ==2 && JMA[1].length ==2 && 12>=JMA[1]>0 &&  JMA[2]>=1999 && JMA[2].length == 4){
//     return true
// }  return false ;

// }

// console.log(valideDate(date));

// let tab = [1,2,2,3,6,6];


// function reverse(tab){
//    let  tab2=[];
//     for (let index = tab.length -1 ; index >= 0; index--) {
//       tab2.push(tab[index]);
        
//     }
//     return tab2
// }

// console.log(reverse(tab));


// let stru ="j'ai deja fais ça "

// function touppercase(stri){
//     let stri2 = "";
//     stri2 += stri[0].toUpperCase();

//     for(let i = 1 ; i<stri.length -1 ; i++){
//         stri2+=stri[i]
//         if(stri[i]==" "){
//             i++
//         stri2+= stri[i].toUpperCase();
//         }
//     }

//     return stri2;
// }

// console.log(touppercase(stru));