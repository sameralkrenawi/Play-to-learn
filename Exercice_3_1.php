<?php session_start(); ?>
<html>
<head>
<script type="text/javascript">
function qcm(num,sol)
{
var f=document.forms[num];
var choix=0;
choix=f.elements.length-4;
var bin=new Array();
for(var i=0;i<choix;i++)
{
if (f.elements[i].checked)
{bin[i]=1;}
else {bin[i]=0;}
}

var binaire="";
binaire=bin.join("");

var erreurs=0;
for(var k=0;k<choix;k++)
{
if(sol.charAt(k)!=bin[k])
{ erreurs++;
}
}

if(erreurs==0)
{
f.t.value="All Good !";
}
else
{

f.t.value=" You do "+erreurs+" error";
}
}
function solution(num,sol)
{
var fo=document.forms[num];
var choix=0;
choix=fo.elements.length-4;
for (var j=0;j<choix;j++)
{
if (sol.charAt(j)=="1")
{
fo.elements[j].checked=true;
}
else
{
fo.elements[j].checked=false;
} }

}
</script>
 <link rel="stylesheet" href="css/Exercice_1_1.css">
</head>
<body>

    <style type="text/css">
        body {
        background-image:url(image/QCM-SPiderman.jpg);
        background-position-x:200px;
        background-size:10;
        background-repeat:no repeat;
        }
        </style>
<p>
<b><FONT face="cursive">GOOD LUCK! </FONT></b>
</p>
<form >

<font size="+1"><FONT face="cursive"><FONT color=#CF0A1D>
    <b><i> Delic____: </i></b><br>
<input type="checkbox" /> ou <br>
<input type="checkbox" /> ious <br>
<input type="checkbox" />sous <br>
<i> <b> Beau____ful:</b> </i> <br>
<input type="checkbox" />ti <br>
<input type="checkbox" /> thi <br>
<input type="checkbox"/>py <br>
<i><b>plea____: </b> </i> <br>
<input type="checkbox" />sures <br>
<input type="checkbox"/>sur<br>
<input type="checkbox" />ur<br>
<i> <b>Ch____: </b> </i><br>
<input type="checkbox" />eap <br>
<input type="checkbox" />yt <br>
<input type="checkbox" />eyt<br>
<i> <b>Diff__cul__: </b> </i><br>
<input type="checkbox" />i,ty <br>
<input type="checkbox" />e,te <br>
<input type="checkbox" />0,t<br>
<i> <b>In__de: </b> </i><br>
<input type="checkbox" />sa <br>
<input type="checkbox" />se<br>
<input type="checkbox" />si<br>
<i> <b>PL____: </b> </i><br>
<input type="checkbox" />ay <br>
<input type="checkbox" />ai<br>
<input type="checkbox" />éye<br>
<i> <b>FI____ON: </b> </i><br>
<input type="checkbox" />kt <br>
<input type="checkbox" />ct<br>
<input type="checkbox" />q<br>
<i> <b>Spi____man: </b> </i><br>
<input type="checkbox" /> ter<br>
<input type="checkbox" />cher<br>
<input type="checkbox" />der<br>
<i> <b>Fir____: </b> </i><br>
<input type="checkbox" />st <br>
<input type="checkbox" />t<br>
<input type="checkbox" />sset<br>

</font></FONT>


<input type=button value="Vérifier" onclick="qcm(0,'010100010100100001100010001100')"/>
<input type="text" name="t" size="20" ></input>
<input type="reset" value="Annuler" />
<input type="button" onclick="solution(0,'010100010100100001100010001100')" value="Solution" />
<a href="Exercice_3_2.php" class="button">Next</a></input>
<a href="Menu_Exercice.php" class="button">Menu</a>
</form>
</body>
</html>
