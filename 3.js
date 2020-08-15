let arr=[`D`,`U`,`M`,`B`,`W`,`A`,`Y`,`S`,`I`,`D`]

function lp(arr)
{
    let res=` `
    for (let i=0;i<arr.length;i++)
    {
        if (i <=4)
        {
            for(let j=0 ; j <arr.length ;j++)
            {
                if(j == i || j == arr.length-1-i)
                {
                    res += arr[i]
                }
                else
                {
                    res +=` = `
                }
            }
        }
        else
        {
            for(let k=0 ; k <arr.length ;k++)
            {
                if(k == i ||k == arr.length-i-1)
                {
                    res += arr[i]
                }
                else
                {
                    res +=` = `
                }
            }
        }
        res+=`\n`
    }
    console.log(res)
}

lp(arr)