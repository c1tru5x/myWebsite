function darkmode()
{
    if(document.getElementsByTagName("body")[0].style.backgroundColor == "white")
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "#1f1f1f";
    }
    else
    {
        document.getElementsByTagName("body")[0].style.backgroundColor = "white";
    }

    //save color in a cookie
    document.cookie = "bgcolor="+ document.getElementsByTagName("body")[0].style.backgroundColor;
}