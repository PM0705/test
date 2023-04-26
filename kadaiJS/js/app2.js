// 奇数問題番号

for (let  Q = 1;  Q <=3;  Q++) {
    document.write("◼︎");
}
document.write("問１");
for (let  Q = 1;  Q <=3;  Q++) {
    document.write("◼︎");
}

// 問題文

document.write("<br>");
document.write("半径 5cm の円、半径 7cm の円、半径 10cm の円の面積をそれぞれ求めてください。");
document.write("<br>");
document.write("円周率は、3.14 とします。");
for (let  Q = 1;  Q <=3;  Q++) {
    document.write("<br>");
}
document.write("問 1 の答え");
document.write("<br>");
for (let  satr = 1;  satr <= 5;  satr++) {
    document.write("↓");
}
document.write("<br>");
 
 
// 問1

function ennomenseki(hankei,pai=3.14) {
    return ( "半径"  +hankei + "cmの場合→" + (hankei*hankei*3.14)  + "㎠");
}
document.write(ennomenseki(5,3) +"<br>");
document.write(ennomenseki(7) +"<br>");
document.write(ennomenseki(10) +"<br>");


// 偶数問題番号

for (let  Q = 1;  Q <=3;  Q++) {
    document.write("<br>");
}
for (let  Q = 1;  Q <=3;  Q++) {
    document.write("◻︎");
}
document.write("問2");
for (let  Q = 1;  Q <=3;  Q++) {
    document.write("◻︎");
}

// 問題文

document.write("<br>");
document.write("大人料金が 500 円、子供料金が 200 円の遊園地があります。");
document.write("<br>");
document.write("A グループは、大人 2 人、子供 4 人");
document.write("<br>");
document.write("B グループは、大人 1 人、子供 5 人");
document.write("<br>");
document.write("C グループは、大人 3 人、子供 7 人");
document.write("<br>");
document.write("です。");
document.write("<br><br>");
document.write("関数を使用して");
document.write("<br>");
document.write("A グループの合計金額");
document.write("<br>");
document.write("B グループの合計金額");
document.write("<br>");
document.write("C グループの合計金額");
document.write("<br>");
document.write("をそれぞれ、○○円です。と表示しなさい。");
 
for (let  Q = 1;  Q <=3;  Q++) {
    document.write("<br>");
}
document.write("問 2 の答え");
document.write("<br>");
for (let  satr = 1;  satr <= 5;  satr++) {
    document.write("↓");
}
document.write("<br>");

// 問2

function totalprice(group, otona, kodomo) {
    return(otona*500 + kodomo*200 + "円です。<br>");
}
document.write(totalprice("A" ,2,4));
document.write(totalprice("B" ,1,5));
document.write(totalprice("C" ,3,7));