function oblicz( form )
{
    let where = document.getElementById( "wynik" );

    let first = form.first.value;
    let second = form.second.value;
    let third = form.third.value;
    let fourth = form.fourth.value;
    let fifth = form.fifth.value;

    let sum = 0;

    if( first != "" )
    {
        first = parseInt( first );

        if( form.first_c.checked )
        {
            if( isNaN( first ) )
            {
                where.innerHTML = "Podana wartość nie jest liczbą";
                return;
            }
            else
            {
                if( form.first_c.checked )
                {
                    sum += first;
                }
                else
                {
                    sum = sum;
                }
            }
        }

    }
    
    if( second != "" )
    {
        second = parseInt( second );

        if( form.second_c.checked )
        {
            if( isNaN( second ) )
            {
                where.innerHTML = "Podana wartość nie jest liczbą";
                return;
            }
            else
            {
                if( form.second_c.checked )
                {
                    sum += second;
                }
                else
                {
                    sum = sum;
                }
            }
        }
    }
    
    if( third != "" )
    {
        third = parseInt( third );

        if( form.third_c.checked )
        {
            if( isNaN( third ) )
            {
                where.innerHTML = "Podana wartość nie jest liczbą";
                return;
            }
            else
            {
                if( form.third_c.checked )
                {
                    sum += third;
                }
                else
                {
                    sum = sum;
                }
            }
        }
    }
    
    if( fourth != "" )
    {
        fourth = parseInt( fourth );

        if( form.fourth_c.checked )
        {
            if( isNaN( fourth ) )
            {
                where.innerHTML = "Podana wartość nie jest liczbą";
                return;
            }
            else
            {
                if( form.fourth_c.checked )
                {
                    sum += fourth;
                }
                else
                {
                    sum = sum;
                }
            }
        }
    }
    
    if( fifth != "" )
    {
        fifth = parseInt( fifth );

        if( form.fifth_c.checked )
        {
            if( isNaN( fifth ) )
            {
                where.innerHTML = "Podana wartość nie jest liczbą";
                return;
            }
            else
            {
                if( form.fifth_c.checked )
                {
                    sum += fifth;
                }
                else
                {
                    sum = sum;
                }
            }
        }
    }

    if( first != "" || second != "" || third != "" || fourth != "" || fifth != "" )
    {
        if( isNaN( parseInt( first ) ) == 0 || isNaN( parseInt( second ) ) == 0 || isNaN( parseInt( third ) ) == 0 || isNaN( parseInt( fourth ) ) == 0 || isNaN( parseInt( fifth ) ) == 0 )
        {
            where.innerHTML = "Suma liczb wynosi: " + sum;
        }
    }
}