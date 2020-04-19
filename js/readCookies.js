var color = getColor();

function getColor()
{
    var cookie_string = document.cookie ;
    if (cookie_string.length != 0) 
    {
        var cookie_value = cookie_string.match(
                    '(^|;)[\s]*'+
                    "bgcolor"+
                    '=([^;]*)');
        return decodeURIComponent(cookie_value[2]) ;
    }
}

function setColor()
{
    document.getElementsByTagName("body")[0].style.backgroundColor = color;
}