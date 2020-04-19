var cnt = 0;

function darkmode()
{
    cnt++;
    if(cnt%2 == 0)
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "white";
    }
    else
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "#1f1f1f";
    }
    if(cnt == 10)
    {
        cnt = 0;
    }

    //save color in a cookie
    document.cookie = "bgcolor="+ document.getElementsByTagName("body")[0].style.backgroundColor;
}