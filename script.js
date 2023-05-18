function contactsubmitclick(){
    console.log('worked')
    var name,email,number,message;
    name=document.getElementById('f1name').value;
    email=document.getElementById('f1email').value;
    number=document.getElementById('f1number').value;
    message=document.getElementById('f1message').value;
    if(name!=""){
        if(email!=""){
            if(number!=""){
                if(message!=""){
                    alert('Form Submitted Successfully')
                    location.replace("https://boatel.epizy.com/index.php");
                }
                else{
                    alert('PLX ENTER MESSAGE')
                }
            }
            else{
                alert("PLZ ENTER NUMBER")
            }
        }
        else{
            alert("PLZ ENTER EMAIL")
        }

    }
    else{
        alert('PLZ ENTER NAME')
    }
}



