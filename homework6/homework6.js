'use strict';
//1
for (var i = 1, str = ''; i <= 9; i++) {
    str += i;
}
alert(str);


//2
for (var j = 9, str1 = ''; j > 0; j--) {
    str1 += j;
}
alert(str1);

//3
for (var i = 1, str = ''; i <= 9; i++) {
    str += '-' + i;
}
alert(str + '-');

//4

for (var i = 1, str = ''; i <= 20; i++) {
    str += "x";
    document.write(str + '<br>');
}

//5
for (var i = 1; i <= 9; i++) {
        var str='';
    for (var j = 1; j <= i; j++) {
        str += i;
    }
    document.write(str + '<br>');
}

//6

for (var i = 2; i <= 6; i++) {
    var str = '';
    for (var j = 1; j <= i; j++) {
        str += 'x';
    }
    document.write(str + '<br>');
}





