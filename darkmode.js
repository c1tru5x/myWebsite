var cnt = 0;

function darkmode()
{
    cnt++;
    if(cnt%2 == 0)
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "whitesmoke";
        document.getElementById("header").style.color = "black";
        document.getElementById("formular").style.color = "black";
    }
    else
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "#1f1f1f";
        document.getElementById("header").style.color = "white";
        document.getElementById("formular").style.color = "white";
    }
    if(cnt == 10)
    {
        cnt = 0;
    }
}