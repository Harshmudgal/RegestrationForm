var form=document.getElementById("fm");
function validate(){   
    if(document.getElementById("Name").value=="")
    {
        alert("Please Enter a Name");
    }
    else if(document.getElementById("fName").value=="")
    {
        alert("Please enter Fathers name");
    }
    else if(document.getElementById("mName").value=="")
    {
        alert("Please enter Mothers name");
    }
    else if(document.getElementById("Birth").value=="")
    {
        alert("Please enter your Date of Birth");
    }
    else if(document.getElementById("email").value=="")
    {
        alert("Please enter your email");
    }
    else if(document.getElementById("Age").value=="")
    {
        alert("Please enter your Age");
    }
    else if(document.getElementById("Adhar").value=="")
    {
        alert("Please enter your Adhar Card information");
    }
    else if(document.getElementById("gender").value=="")
    {
        alert("Please enter your appropriate gender");
    }
    else if(document.getElementById("Job").value=="")
    {
        alert("Please State your job sector");
    }
    else if(document.getElementById("address").value=="")
    {
        alert("Please enter your Home Address");
    }
    else if(document.getElementById("income").value==0)
    {
        alert("Please Enter your annual income range");
    }
    else if(document.getElementById("amount").value==0)
    {
        alert("Please State your annual income correctly");
    }
    else
    form.submit();
}