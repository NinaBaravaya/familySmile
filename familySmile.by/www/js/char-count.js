//Edit the counter/limiter value as your wish
var count = "2000"; 
var count1 = "80";  
function limiter(){
var tex = document.form_feedback.What_like.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.form_feedback.What_like.value =tex;
        return false;
}
document.form_feedback.limit.value = count-len;
}
function limiter1(){
var tex = document.form_feedback.What_get_better.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.form_feedback.What_get_better.value =tex;
        return false;
}

document.form_feedback.limit1.value = count-len;
}


function limiter3(){
var tex = document.form_feedback.One_word.value;
var len = tex.length;
if(len > count1){
        tex = tex.substring(0,count1);
        document.form_feedback.One_word.value =tex;
        return false;
}

document.form_feedback.limit3.value = count1-len;
}