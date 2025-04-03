<?php
#region Unified error message translations
$status_messages = array(
    400 => array(
        'title' => array(
            'en' => "Bad Request",
            'hu' => "Hibás kérés",
        ),
        'desc' => array(
            'en' => "The server could not understand your request due to invalid syntax.",
            'hu' => "A szerver nem tudta feldolgozni a kérését a hibás szintaxis miatt.",
        ),
    ),
    401 => array(
        'title' => array(
            'en' => "Unauthorized",
            'hu' => "Hitelesítés szükséges",
        ),
        'desc' => array(
            'en' => "You must be logged in to access this content or resource.",
            'hu' => "A tartalom vagy erőforrás megtekintéséhez be kell jelentkeznie.",
        ),
    ),
    402 => array(
        'title' => array(
            'en' => "Payment Required",
            'hu' => "Előfizetés szükséges",
        ),
        'desc' => array(
            'en' => "This content is restricted to supporters only. Click below to support us: <a href=\"#dummylink\">PayPal</a>",
            'hu' => "Ez a tartalom csak támogatóink számára elérhető. Támogatáshoz kattintson ide: <a href=\"#dummylink\">PayPal</a>",
        ),
    ),
    403 => array(
        'title' => array(
            'en' => "Forbidden",
            'hu' => "Hozzáférés megtagadva",
        ),
        'desc' => array(
            'en' => "You do not have permission to access this resource. Contact the administrator if you believe this is an error.",
            'hu' => "Nincs jogosultsága a kért erőforrás eléréséhez. Ha úgy gondolja, hogy ez hiba, vegye fel a kapcsolatot az adminisztrátorral.",
        ),
    ),
    404 => array(
        'title' => array(
            'en' => "Not Found",
            'hu' => "Nem található",
        ),
        'desc' => array(
            'en' => "The requested page or resource could not be found. Please check the URL and try again.",
            'hu' => "A kért oldal vagy erőforrás nem található. Kérjük, ellenőrizze a címet, és próbálja újra.",
        ),
    ),
    405 => array(
        'title' => array(
            'en' => "Method Not Allowed",
            'hu' => "Nem támogatott metódus",
        ),
        'desc' => array(
            'en' => "The request method used is not supported for this resource.",
            'hu' => "A kért metódus nem engedélyezett ennél az erőforrásnál.",
        ),
    ),
    406 => array(
        'title' => array(
            'en' => "Not Acceptable",
            'hu' => "Nem elfogadható",
        ),
        'desc' => array(
            'en' => "The requested resource cannot generate a response acceptable by the client.",
            'hu' => "A szerver nem tud olyan választ adni, amit a kliens elfogadna.",
        ),
    ),
    407 => array(
        'title' => array(
            'en' => "Proxy Authentication Required",
            'hu' => "Proxy hitelesítés szükséges",
        ),
        'desc' => array(
            'en' => "You must authenticate with the proxy before accessing this resource.",
            'hu' => "A hozzáféréshez előbb a proxy-n keresztül kell hitelesítenie magát.",
        ),
    ),
    408 => array(
        'title' => array(
            'en' => "Request Timeout",
            'hu' => "Időtúllépés",
        ),
        'desc' => array(
            'en' => "The server timed out waiting for the request. Please try again.",
            'hu' => "A szerver túl sokáig várt a kérésre, így megszakította azt. Kérjük, próbálja újra.",
        ),
    ),
    409 => array(
        'title' => array(
            'en' => "Conflict",
            'hu' => "Ütközés",
        ),
        'desc' => array(
            'en' => "The request could not be completed due to a conflict with the current state of the target resource.",
            'hu' => "A kérés ütközik a cél-erőforrás aktuális állapotával.",
        ),
    ),
    410 => array(
        'title' => array(
            'en' => "Gone",
            'hu' => "Véglegesen eltávolítva",
        ),
        'desc' => array(
            'en' => "The requested resource is no longer available and will not be available again.",
            'hu' => "A keresett erőforrás véglegesen eltávolításra került és nem lesz újra elérhető.",
        ),
    ),

    411 => array(
        'title' => array(
            'en' => "Length Required",
            'hu' => "Hossz megadása szükséges",
        ),
        'desc' => array(
            'en' => "The server requires the Content-Length header to be defined.",
            'hu' => "A szerver megköveteli a Content-Length fejléc megadását.",
        ),
    ),
    412 => array(
        'title' => array(
            'en' => "Precondition Failed",
            'hu' => "Előfeltétel meghiúsult",
        ),
        'desc' => array(
            'en' => "One or more conditions in the request header fields evaluated to false.",
            'hu' => "Egy vagy több kérési feltétel nem teljesült.",
        ),
    ),
    413 => array(
        'title' => array(
            'en' => "Payload Too Large",
            'hu' => "Túl nagy kérés",
        ),
        'desc' => array(
            'en' => "The request entity is too large for the server to process.",
            'hu' => "A kérés túl nagy ahhoz, hogy a szerver feldolgozza.",
        ),
    ),
    414 => array(
        'title' => array(
            'en' => "URI Too Long",
            'hu' => "Túl hosszú URI",
        ),
        'desc' => array(
            'en' => "The requested URI is too long for the server to handle.",
            'hu' => "A megadott URI túl hosszú, a szerver nem tudja feldolgozni.",
        ),
    ),
    415 => array(
        'title' => array(
            'en' => "Unsupported Media Type",
            'hu' => "Nem támogatott médiaformátum",
        ),
        'desc' => array(
            'en' => "The server cannot process the request's media type.",
            'hu' => "A kérés médiaformátuma nem támogatott.",
        ),
    ),
    416 => array(
        'title' => array(
            'en' => "Range Not Satisfiable",
            'hu' => "Nem kielégíthető tartomány",
        ),
        'desc' => array(
            'en' => "The requested range is outside the bounds of the target resource.",
            'hu' => "A megadott tartomány kívül esik az erőforrás határain.",
        ),
    ),
    417 => array(
        'title' => array(
            'en' => "Expectation Failed",
            'hu' => "Várakozási hiba",
        ),
        'desc' => array(
            'en' => "The server cannot meet the expectations indicated by the request.",
            'hu' => "A szerver nem tudja teljesíteni a kérés elvárásait.",
        ),
    ),
    418 => array(
        'title' => array(
            'en' => "I'm a teapot",
            'hu' => "Teáskanna vagyok",
        ),
        'desc' => array(
            'en' => "I'm a teapot and cannot brew coffee. (RFC 2324)",
            'hu' => "Teáskanna vagyok, nem tudok kávét főzni. (RFC 2324)",
        ),
    ),
    421 => array(
        'title' => array(
            'en' => "Misdirected Request",
            'hu' => "Eltévedt kérés",
        ),
        'desc' => array(
            'en' => "The request was directed to a server that is not able to produce a response.",
            'hu' => "A kérés nem megfelelő szerverhez lett irányítva.",
        ),
    ),
    422 => array(
        'title' => array(
            'en' => "Unprocessable Entity",
            'hu' => "Nem feldolgozható entitás",
        ),
        'desc' => array(
            'en' => "The request was well-formed but couldn't be processed.",
            'hu' => "A kérés helyesen lett megfogalmazva, de nem volt feldolgozható.",
        ),
    ),
    423 => array(
        'title' => array(
            'en' => "Locked",
            'hu' => "Zárolva",
        ),
        'desc' => array(
            'en' => "The resource is currently locked and cannot be accessed.",
            'hu' => "Az erőforrás zárolva van, nem érhető el.",
        ),
    ),
    424 => array(
        'title' => array(
            'en' => "Failed Dependency",
            'hu' => "Függőségi hiba",
        ),
        'desc' => array(
            'en' => "The request failed due to a failure in a previous request.",
            'hu' => "A kérés egy korábbi kérés hibája miatt nem hajtható végre.",
        ),
    ),
    425 => array(
        'title' => array(
            'en' => "Too Early",
            'hu' => "Túl korai",
        ),
        'desc' => array(
            'en' => "The server is unwilling to risk processing a request that might be replayed.",
            'hu' => "A szerver nem vállalja a kérés feldolgozását, mert azt újra lehetne küldeni.",
        ),
    ),
    426 => array(
        'title' => array(
            'en' => "Upgrade Required",
            'hu' => "Frissítés szükséges",
        ),
        'desc' => array(
            'en' => "The client must switch to a different protocol to continue.",
            'hu' => "A kliensnek másik protokollra kell váltania a folytatáshoz.",
        ),
    ),
    428 => array(
        'title' => array(
            'en' => "Precondition Required",
            'hu' => "Előfeltétel szükséges",
        ),
        'desc' => array(
            'en' => "The server requires the request to be conditional.",
            'hu' => "A szerver megköveteli, hogy a kérés feltételekhez legyen kötve.",
        ),
    ),
    429 => array(
        'title' => array(
            'en' => "Too Many Requests",
            'hu' => "Túl sok kérés",
        ),
        'desc' => array(
            'en' => "You have sent too many requests in a given amount of time. Please try again later.",
            'hu' => "Túl sok kérés érkezett rövid időn belül. Kérjük, próbálja meg később.",
        ),
    ),

    431 => array(
        'title' => array(
            'en' => "Request Header Fields Too Large",
            'hu' => "Túl nagy fejlécmezők",
        ),
        'desc' => array(
            'en' => "The server is refusing to process the request because its header fields are too large.",
            'hu' => "A kérés fejlécmezői túl nagyok, ezért a szerver megtagadja a feldolgozást.",
        ),
    ),
    451 => array(
        'title' => array(
            'en' => "Unavailable For Legal Reasons",
            'hu' => "Jogi okokból nem elérhető",
        ),
        'desc' => array(
            'en' => "The requested content is not available due to legal restrictions imposed on the server.",
            'hu' => "A kért tartalom jogi okok miatt nem elérhető a szerveren.",
        ),
    ),
    500 => array(
        'title' => array(
            'en' => "Internal Server Error",
            'hu' => "Belső szerverhiba",
        ),
        'desc' => array(
            'en' => "The server encountered an unexpected error and couldn't complete your request.",
            'hu' => "A szerver váratlan hibába ütközött, és nem tudta teljesíteni a kérést.",
        ),
    ),
    501 => array(
        'title' => array(
            'en' => "Not Implemented",
            'hu' => "Nem implementált",
        ),
        'desc' => array(
            'en' => "The server does not support the requested functionality.",
            'hu' => "A szerver nem támogatja a kért funkciót.",
        ),
    ),
    502 => array(
        'title' => array(
            'en' => "Bad Gateway",
            'hu' => "Hibás átjáró",
        ),
        'desc' => array(
            'en' => "The server received an invalid response from the upstream server.",
            'hu' => "A szerver érvénytelen választ kapott egy másik kiszolgálótól.",
        ),
    ),
    503 => array(
        'title' => array(
            'en' => "Service Unavailable",
            'hu' => "Szolgáltatás nem elérhető",
        ),
        'desc' => array(
            'en' => "The server is currently unavailable due to maintenance or overload.",
            'hu' => "A szerver jelenleg nem elérhető karbantartás vagy túlterhelés miatt.",
        ),
    ),
    504 => array(
        'title' => array(
            'en' => "Gateway Timeout",
            'hu' => "Átjáró időtúllépés",
        ),
        'desc' => array(
            'en' => "The server did not receive a timely response from another server.",
            'hu' => "A szerver nem kapott időben választ egy másik kiszolgálótól.",
        ),
    ),
    505 => array(
        'title' => array(
            'en' => "HTTP Version Not Supported",
            'hu' => "Nem támogatott HTTP-verzió",
        ),
        'desc' => array(
            'en' => "The HTTP version used in the request is not supported by the server.",
            'hu' => "A kérésben megadott HTTP-verziót a szerver nem támogatja.",
        ),
    ),
    506 => array(
        'title' => array(
            'en' => "Variant Also Negotiates",
            'hu' => "A változat is tárgyal",
        ),
        'desc' => array(
            'en' => "Transparent content negotiation resulted in a circular reference.",
            'hu' => "Az átlátható tartalom-egyeztetés körkörös hivatkozást eredményezett.",
        ),
    ),
    507 => array(
        'title' => array(
            'en' => "Insufficient Storage",
            'hu' => "Nincs elegendő tárhely",
        ),
        'desc' => array(
            'en' => "The server is unable to store the representation needed to complete the request.",
            'hu' => "A szerver nem tudja eltárolni a kérés végrehajtásához szükséges adatot.",
        ),
    ),
    508 => array(
        'title' => array(
            'en' => "Loop Detected",
            'hu' => "Hurok észlelve",
        ),
        'desc' => array(
            'en' => "The server detected an infinite loop while processing the request.",
            'hu' => "A szerver végtelen ciklust észlelt a kérés feldolgozása közben.",
        ),
    ),
    510 => array(
        'title' => array(
            'en' => "Not Extended",
            'hu' => "Nincs kiterjesztve",
        ),
        'desc' => array(
            'en' => "Further extensions are required to fulfill the request.",
            'hu' => "A kérés teljesítéséhez további kiterjesztések szükségesek.",
        ),
    ),
    511 => array(
        'title' => array(
            'en' => "Network Authentication Required",
            'hu' => "Hálózati hitelesítés szükséges",
        ),
        'desc' => array(
            'en' => "Network authentication is required before accessing this resource.",
            'hu' => "Hálózati hitelesítés szükséges az erőforrás eléréséhez.",
        ),
    ),
    -1 => array(
        'title' => array(
            'en' => "An Unexpected Error Occurred",
            'hu' => "Váratlan hiba történt",
        ),
        'desc' => array(
            'en' => "Something went wrong on our end. Please try again or contact support if the issue persists.",
            'hu' => "Valami hiba történt a szerverünkön. Kérjük, próbálja újra, vagy lépjen kapcsolatba a támogatással.",
        ),
    ),
);
#endregion
