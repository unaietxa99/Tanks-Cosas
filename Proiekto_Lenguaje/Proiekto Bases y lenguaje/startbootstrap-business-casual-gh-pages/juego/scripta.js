var total =0;
var i =0;
$(document).ready(function(){
    animateImg('#a');
    animateImg('#b');
    animateImg('#c');
    animateImg('#d');
    $(document).click(function(){
        total++;
        document.getElementById("totala").innerHTML = total;            
     });
     $("#a").on("click", function() { $("#a").css({display: "none"}) });
     $("#a").show("slow");
     $("#b").on("click", function () { $("#b").css({display: "none"}) });
     $("#b").show("slow");
     $("#c").on("click", function () { $("#c").css({display: "none"}) });
     $("#c").show("slow");
     $("#d").on("click", function () { $("#d").css({display: "none"}) });
     $("#d").show("slow");
 
        
         if (i < 20 ) { 
             i++; 
             document.getElementById("contador").innerHTML = i;
             
                 
             } else if (i >= 20) {
                 alert("Kills: "+i +"Click Totalak: "+total);
                 location.href="../index.php";
 
                 
             }
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 50;
    var w = $(window).width() - 50;
    
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
    
    return [nh,nw];    
    
}

function animateImg(myclass){
    var newq = makeNewPosition();
    $(myclass).animate({ top: newq[0], left: newq[1] }, 1500,   function(){
      animateImg(myclass);        
    });
    
};



    

function redireccionar(){
    alert("Kills: "+i +"Click Totalak: "+total);
    location.href="../index.php";

}

    
