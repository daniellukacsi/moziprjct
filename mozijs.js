window.addEventListener('load',init)

function init(){
    document.getElementById("elkuld").addEventListener("click",ellenorzes)
}

var hibak=[]

function ellenorzes(e){
    hibak=[]
    //email
    if(document.getElementById("email").value.length<6)
        hibak.push('az email cím nem elég hosszú!!')
    //felhasznalonev
    if(document.getElementById("fnev").value.length<6)
        hibak.push('az felhasználónév nem elég hosszú!!')
    //password:
    let hasNumber=/\d/
    let pw=document.getElementById("passw").value
    if(pw.length<8 || !hasNumber.test(pw)) 
      hibak.push("A jelszó nem megfelelő, kell legyen legalább egy számjegy benne!!!")   
    
    if(hibak.length>0){
         e.preventDefault()
         document.getElementById("hibalista").innerHTML=hibak.reduce((s,e)=>s+`<li>${e}</li>` ,'')
    }
       
}