document.getElementById('myDate').innerHTML = new Date(). toDateString();


function loadData(data){
    if(data == btn1){
        document.getElementById("pic").src="images/iphoneXS.jpg";
        document.getElementById("parag").innerHTML = "iPhone Xs is packed with next-generation technologies and is a huge step forward for the future of the smartphone. Everything is state of the art including the industry-first 7-nanometer A12 Bionic chip with 8-core Neural Engine, faster Face ID and an advanced dual camera system that shoots Portrait mode photos with Smart HDR and dynamic depth of field,” said Philip Schiller, Apple’s senior vice president of Worldwide Marketing. “iPhone Xs is not one, but two new iPhone models, and iPhone Xs Max offers the biggest display ever in an iPhone with the biggest battery ever in an iPhone, delivering up to an hour and a half more battery life in your day."
    }
    else if(data == btn2){
        document.getElementById("pic").src="images/iphoneXSMax.jpg";
        document.getElementById("parag").innerHTML ="Apple iPhone XS Max smartphone was launched in September 2018. The phone comes with a 6.50-inch touchscreen display with a resolution of 1242x2688 pixels at a pixel density of 458 pixels per inch (ppi). ... The Apple iPhone XS Max is a dual-SIM (GSM and GSM) smartphone that accepts Nano-SIM and eSIM cards."
    }
    else if(data == btn3){
        document.getElementById("pic").src = "images/iphone8sPlus.jpg";
        document.getElementById("parag").innerHTML="The iPhone 8 Plus is a larger version of the iPhone 8, with a larger screen and battery, more RAM, and a secondary telephoto camera on the rear. ... The iPhone 8 models also feature new glass backs to support wireless charging, while maintaining the IP67 rating for water and dust resistance."
    }
    else if(data == btn5){
        document.getElementById("pic").src = "images/iphoneSE.jpg";
        document.getElementById("parag").innerHTML="At A Glance. The original iPhone SE was a budget 4-inch iPhone before being discontinued in 2018, but Apple revived the name in April 2020 with a new 4.7-inch model that looks like an iPhone 8 with internals similar to those of the iPhone 11. It features an A13 Bionic chip, 3GB RAM."
    }
}

function priceForLoop(){
    var array1=["iPhone XS - $1,300","iPhone XS Max - $1,400","iPhone 8s Plus - $999", "iphone SE - $399"];
        var len=array1.length;
        var txt="";
        for(var i = 0; i<len; i++){
            txt = txt + array1[i] + "<br/>";
    }
    document.getElementById("pic").src ="images/all.jpg";
    document.getElementById("parag").innerHTML= txt;
}

//function priceForInLoop(){
    //var phone=["iPhone XS - $1,300","iPhone XS Max - $1,400","iPhone 8s Plus - $999", "iphone SE - $399"];
    //var txt2="";
    //var y;

    //for(y in phone){
        //txt2 += phone[y] + "<br/>";
    //}
    //document.getElementById("parag").innerHTML=txt2;

//}

function priceHigher(){
    var array2 = [];
    array2["iPhoneXS"] = 1000;
    array2["iPhone XS Max"] = 2000;
    array2["iPhone 8S Plus"] = 3000;
    array2["iPhone SE"] = 800;
    array2["iPhone 6"] = 500;

    var txt3="";
    var x;
    len = array2.length;

    for(x in array2){
        if(array2[x] > 1000){
            txt3 += x + "--" + array2[x] + "<br/>";
        }
    }
    document.getElementById("pic").src ="images/dollar.jpg";
    document.getElementById("parag").innerHTML = txt3;
}

function priceLower(){
    var array2 = [];
    array2["iPhoneXS"] = 1000;
    array2["iPhone XS Max"] = 2000;
    array2["iPhone 8S Plus"] = 3000;
    array2["iPhone SE"] = 800;
    array2["iPhone 6"] = 500;
    var txt3="";
    var x;
    

    for(x in array2){
        if(array2[x] < 1000){
            txt3 += x + "--" + array2[x] + "<br/>";
        }
    }
    document.getElementById("pic").src ="images/dollar.jpg";
    document.getElementById("parag").innerHTML = txt3;
}

function checkPassword(){
    if(document.getElementById('pwd').value != document.getElementById('confpwd').value){
        alert("Password Missmatch");
        return false;
    }
    else{
        alert("Successful");
        return true;
    }
}

function enableButton(){
    if(document.getElementById('checkbox').checked){
        document.getElementById("submitBtn").disabled = false;
    }
    else{
        document.getElementById("submitBtn").disabled = true;

    }
}