function changeLabel()
{
    var a = document.getElementById("a");
    var b = document.getElementById("b");
    var c = document.getElementById("c");

    a.textContent = Math.floor(Math.random()*(10 - 1 + 1) + 1);
    b.textContent = Math.floor(Math.random()*(10 - 1 + 1) + 1);
    c.textContent = Math.floor(Math.random()*(10 - 1 + 1) + 1);
}


function check()
{
    let res = document.getElementById("res");

    res.onchange = function()
    {
        res.value = Number(res.innerHTML);
    }

    if(Number(a.textContent)-Number(b.textContent)+Number(c.textContent) == res.value)
    {
        //sendmail
        return true;
    }
    else 
    {
        //spam?
        location.reload();
        return false;
    }
}