'use strict';

//1

// for (var i = 1,arr=[],str='x'; i < 10; i++) {
//     arr.push(str);
//     str+='x';
// }
// alert(arr);
//2
// for (var i = 1,arr = []; i <=9; i++) {
//     var str = '';
//     for (var j = 0; j < i; j++) {
//         str += i;
//     }
//     arr.push(str);
// }
// alert(arr);

//2.1
// stpov = function (no,nn) {
//     for (var i = no,arr = []; i <=nn; i++) {
//      var str = '';
//      for (var j = 0; j < i; j++) {
//          str += i;
//      }
//      arr.push(str);
//  }
//  return arr;
// }
// document.write(stpov(2,10));
//3
// arrayFill = function (value, length) {
//     for (var i = 0,arr=[]; i < length; i++) {
//         arr.push(value);
//     }
//     return arr;
// };
//
// document.write(arrayFill('x',5));

//4

// function func(arr) {
//     var sum = 0;
//     for (var i = 0 ; i < arr.length; i++) {
//         sum += arr[i];
//         if (sum > 10) {
//             return i + 1;
//         }
//     }
// }
//
// document.write(func([5, 2, 6, 4, 4, 7, 7, 8, 9]));

//5
// var arr = [1, 3, 5, 6, 7, 9];
// var result = [];
// for (var i = arr.length - 1; i >= 0; i--) {
//     result.push(arr[i]);
// }
// document.write(result);

//6
// var arr = [[1, 2, 3], [4, 5], [6]];
// var sum = 0;
// for (var i = 0; i < arr.length; i++) {
//     for (var j = 0; j < arr[i].length; j++) {
//         sum += arr[i][j];
//     }
// }
// alert(sum);

//7
var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        for (var k = 0; k < arr[i][j].length; k++) {
            sum += arr[i][j][k];
        }
    }
}
alert(sum);

