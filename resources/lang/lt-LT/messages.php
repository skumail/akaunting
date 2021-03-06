<?php

return [

    'success' => [
        'added'             => ':type pridėtas!',
        'updated'           => ':type atnaujintas!',
        'deleted'           => ':type ištrintas!',
        'duplicated'        => ':type duplikuotas!',
        'imported'          => ':type importuotas!',
        'enabled'           => ':type įjungtas!',
        'disabled'          => ':type išjungtas!',
    ],
    'error' => [
        'over_payment'      => 'Klaida: Apmokėjimas nepridėtas! Užsakymo kiekis viršija turimą kiekį.',
        'not_user_company'  => 'Klaida: Jūs neturite teisės valdyti šios kompanijos!',
        'customer'          => 'Klaida: Vartotojas nebuvo sukurtas! :name jau naudoja šį el. pašto adresą.',
        'no_file'           => 'Klaida: Nepasirinktas failas!',
        'last_category'     => 'Klaida: Negalite ištrinti paskutinės :type kategorijos!',
        'invalid_token'     => 'Klaida: Neteisingas raktas!',
        'import_column'     => 'Klaida: :message :sheet lape. Eilutė: :line.',
        'import_sheet'      => 'Klaida: Lapo pavadinimas neteisingas Peržiūrėkite pavyzdį.',
    ],
    'warning' => [
        'deleted'           => 'Negalima ištrinti <b>:name</b>, nes jis yra susijęs su :text.',
        'disabled'          => 'Negalima išjungti <b>:name</b>, nes jis yra susijęs su :text.',
    ],

];
