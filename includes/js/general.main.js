/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var data = new Date();
//var timeStampInMs = window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();
var hora = data.getHours();
var saudaP = document.getElementById('sauda');
if (hora <= 11) {
    var saida = 'Bom dia';
    saudaP.innerText = saida;
    saudaP.style.color = 'blue';
} else if (hora <= 18) {
    var saida = 'Boa tarde';
    saudaP.innerText = saida;
    saudaP.style.color = 'orange';
} else if (hora <= 23) {
    var saida = 'Boa noite';
    saudaP.innerText = saida;
    saudaP.style.color = 'darkblue';
}
// console.log(timeStampInMs, Date.now());