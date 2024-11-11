<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestesController extends Controller
{
    public function index()
    {
        $smilesAndPeoples = '😀😃😄😁😆😅😂🤣😊😇🙂🙃😉😌😍🥰😘😗😙😚😋😛😜🤪😝🤑🤗🤭🤫🤔🤐🤨😐😑😶😏😒🙄😬😮🤥😌😔😪🤤😴😷🤒🤕🤢🤮🤧🥵🥶🥴😵😵🤯🤠🥳😎🤓🧐😕😟🙁😯😲😳🥺😦😧😨😰😥😢😭😱😖😣😞😓😩😫🥱😤😡😠🤬😈👿💀🤡👹👺👻👽👾🤖👋🤚🖐✋✌🖖👌🤏🤞🤟🤘🤙👈👉👆🖕👇👍👎✊👊🤛🤜👏🙌👐🤲🤝🙏💅🤳💪🦾🦿🦵🦶👂🦻👃🧠🦷🦴👀👅👄👶🧒👦👧🧑👱👨🧔👩👱👨👩👨👩👨👩👨👩🧔🧔🧓👴👵';
        $animals = '🐶🐱🐭🐹🐰🦊🦁🐯🐼🐨🐻🐸🐵🐷🐮🐔🐧🐦🐤🦉🐺🐗🐴🐝🐛🦋🐌🐞🐜🦗🦂🐢🐍🦎🦖🦕🐙🦑🦐🦀🐡🐠🐟🐳🐋🐬🐊🌵🎄🌲🌳🌴🌱🌿🍀🎋🍂🍁🍄🌾💐🌷🌹🥀🌸🌼🌻🌞🌝🌛🌜🌚🌕🌖🌗🌘🌑🌒🌓🌔🌍🌎🌏⭐🌟✨⚡🔥💧🌊❄️☃️⛄💨🌪️🌈☀️🌤️🌦️🌧️🌩️🌨️';
        $food = '🍏🍎🍐🍊🍋🍌🍉🍇🍓🍒🍑🍍🥭🥥🥝🍅🍆🥑🥦🥒🥬🌶️🌽🥕🧄🧅🥔🍠🥐🥯🍞🥖🥨🧀🧈🍳🥚🍔🍟🍕🌭🥪🌮🌯🥙🍖🍗🥩🍤🍣🍱🥟🍜🍲🍝🥫🥘🍛🍙🍚🍤🍥🥮🍡🍢🍧🍨🍦🥧🍰🎂🍮🍭🍬🍫🍿🍩🍪🥛🍼☕🍵🥤🍺🍻🥂🍷🍸🍹🥃🍶🍾';
        $activities = '⚽🏀🏈⚾🎾🏐🏉🎱🏓🏸🥅🎣🥊🥋🎽⛸️🥌🛷🎿⛷️🏂🏋️🤼🤸⛹️🤺🤾🏌️🏇🧘🛹🛶🏆🥇🥈🥉🎗️🎟️🎫🎖️🏅🎲🎯🎳🎮🕹️🎰🎼🎹🥁🎻🎺🎷🎸🎧🎤🎬🎨🎭🖼️🎪🤹';
        $journey = '🚗🚕🚙🚌🚎🏎️🚓🚑🚒🚐🚚🚛🚜🦯🦽🦼🛴🚲🛵🏍️🛺🚨🚔🚍🚘🚖🚡🚠🚟🚃🚋🚞🚝🚄🚅🚈🚂🚆🚇🚊🚉✈️🛫🛬🛩️💺🚁🚟🚤⛵🛥️🚢🛳️🛶🧭🗺️🧳🏖️🏝️🏜️🌋🗻🏔️🏕️🏟️🏛️🏗️🏘️🏚️🏠🏡🏢🏣🏤🏥🏦🏨🏩🏪🏫🏬🏭🏯🏰💒⛪🕌🛕🕍🕋⛲🌁🌃🏙️🌆🌉🏞️🎠🎡🎢';
        $objects = '⌚📱📲💻🖥️🖨️⌨️🖱️🖲️📷📸📹🎥☎️📺📻📟📠📞🔋🔌💡🔦🕯️🪔🧯🛢️💸💵💴💶💷💰💳🧾💎⚖️🔧🔨⚒️🛠️⛏️⚙️🧱🔪🧴🚪🛏️🛋️🚽🚿🛁🛀🧽🧹🧺🧻🧼🧯🛒🎁🎈🎀🎉🎊🧧🎋🎗️🖼️🔑🗝️🔐🔒🔓';
        $symbols = '❤️💔❣️💕💞💓💗💖💘💝💟☮️✝️☪️🕉️☸️✡️🔯☯️⚛️🈴🈹☢️☣️🈲🔱⭕✅☑️✔️❌❎➕➖➗💯🔰🆘❗❕❓❔‼️⁉️⚠️♻️💠♾️💢🛑';

        // Defina as categorias e use o método splitAndCleanEmojis para processar cada string de emojis
        $categoriesEmojis = [
            [
                'icone' => '<i class="fa-solid fa-face-smile fs-1"></i>',
                'titulo' => 'Sorrisos e Pessoas',
                'icones' => $this->splitAndCleanEmojis($smilesAndPeoples),
            ],
            [
                'icone' => '<i class="fa-solid fa-paw fs-1"></i>',
                'titulo' => 'Animais e Natureza',
                'icones' => $this->splitAndCleanEmojis($animals),
            ],
            [
                'icone' => '<i class="fa-solid fa-pizza-slice fs-1"></i>',
                'titulo' => 'Comidas e Bebidas',
                'icones' => $this->splitAndCleanEmojis($food),
            ],
            [
                'icone' => '<i class="fa-solid fa-basketball fs-1"></i>',
                'titulo' => 'Atividades',
                'icones' => $this->splitAndCleanEmojis($activities),
            ],
            [
                'icone' => '<i class="fa-solid fa-car fs-1"></i>',
                'titulo' => 'Viagens e Lugares',
                'icones' => $this->splitAndCleanEmojis($journey),
            ],
            [
                'icone' => '<i class="fa-solid fa-lightbulb fs-1"></i>',
                'titulo' => 'Objetos',
                'icones' => $this->splitAndCleanEmojis($objects),
            ],
            [
                'icone' => '<i class="fa-solid fa-heart fs-1"></i>',
                'titulo' => 'Símbolos',
                'icones' => $this->splitAndCleanEmojis($symbols),
            ],
        ];

        // Passe os dados para a visualização
        return view('atlanta_index', compact('categoriesEmojis'));
    }

    private function splitAndCleanEmojis($emojis)
    {
        // Divide a string em um array de emojis
        $emojisArray = preg_split('/(?<!^)(?!$)/u', $emojis);

        // Remove qualquer elemento vazio ou caractere de controle
        $emojisArray = array_filter($emojisArray, function($emoji) {
            return trim($emoji) !== '';
        });

        return $emojisArray;
    }
}
