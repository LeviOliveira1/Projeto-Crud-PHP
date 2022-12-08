<?php header ("Content-type: text/css"); ?>
@import url('https://fonts.googleapis.com/css2?family=Kenia&display=swap');

*{
    padding:0;
    box-sizing:0;
    margin:0;
}
body{
    background:#000;
}
form,table{
    margin-top:1rem;
    border-radius:3rem;
    padding:20px 30px;
    background-color:#fff;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:1rem;
}
form,table:hover{
    background-color:#0000;
    color:#fff;
    box-shadow: rgba(250, 100, 40, 0.3) 0px 19px 38px, rgba(230, 100, 40, 0.3) 0px 15px 12px;
    
}
h1{
    font-family: 'Kenia', cursive;
    text-align:center;
    color:#fff;
}
#cpf{
    margin-left:12px;
}
.buttonSub{
    border-radius:0.5rem;
    border:none;
    background-color:red;
    color:#fff;
    margin-left:3rem;
    padding:0.5rem;    
}
.buttonSub:hover{
    background-color:#0000;
    color:red;
    box-shadow: 3px 3px red;
}
#cadastro{
    margin-left:2rem;
    border-radius:0.5rem;
    padding:10px;
    background-color:red;
    color:#fff;
    text-decoration:none;
}
#cadastro:hover{
    background-color:#0000;
    color:red;
    box-shadow: 3px 3px red;


}
a{
    text-decoration:none;
}
#delete{
    background:#000;
    color:#8B2323;
}
#edit{
    background:#000;
    color:#00FF00;
}

th{
    border: 3px solid rgb(255, 0, 0);
}
td{
    width: 40px;
    border: 2px solid #8B8B00;
    text-align: center;   
    
}










.wavy{
    display: flex;
    align-items:center;
    justify-content:center;
    position: relative;
    -webkit-box-reflect: below -12px linear-gradient(transparent, rgba(0,0,0,0.2));
}
.wavy span{
    font-family:cursive;
    margin-top:2rem;
    color: #8B3626;
    font-size: 2em;
    animation: animate 1s ease-in-out infinite;
    animation-delay: calc(0.1s* var(--i));
}
@keyframes animate{
    0%{
        transform: translateY(0px);
    }
    20%{
        transform: translateY(-20px);
    }
    40%,100%{
        transform: translateY(0px);
    }
}