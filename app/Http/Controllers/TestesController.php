<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestesController extends Controller
{
    public function index()
    {
        $smilesAndPeoples = '😀😃😄😁😆😅😂🤣😊😇🙂🙃😉😌😍🥰😘😗😙😚😋😛😜🤪😝🤑🤗🤭🤫🤔🤐🤨😐😑😶😏😒🙄😬😮‍💨🤥😌😔😪🤤😴😷🤒🤕🤢🤮🤧🥵🥶🥴😵😵‍💫🤯🤠🥳😎🤓🧐😕😟🙁☹️😮😯😲😳🥺😦😧😨😰😥😢😭😱😖😣😞😓😩😫🥱😤😡😠🤬😈👿💀☠️💩🤡👹👺👻👽👾🤖👋🤚🖐✋🖖👌🤏✌️🤞🤟🤘🤙👈👉👆🖕👇☝️👍👎✊👊🤛🤜👏🙌👐🤲🤝🙏✍️💅🤳💪🦾🦿🦵🦶👂🦻👃🧠🦷🦴👀👁️👅👄👶🧒👦👧🧑👱👨🧔👩👱👨👩👨👩👨👩👨👩🧔🧔🧓👴👵';
        $animals = '🐶🐱🐭🐹🐰🦊🦁🐯🐼🐨🐻🐸🐵🐷🐮🐔🐧🐦🐤🦉🐺🐗🐴🐝🐛🦋🐌🐞🐜🦗🦂🐢🐍🦎🦖🦕🐙🦑🦐🦀🐡🐠🐟🐳🐋🐬🐊🌵🎄🌲🌳🌴🌱🌿🍀🎋🍂🍁🍄🌾💐🌷🌹🥀🌸🌼🌻🌞🌝🌛🌜🌚🌕🌖🌗🌘🌑🌒🌓🌔🌍🌎🌏⭐🌟✨⚡🔥💧🌊❄️☃️⛄💨🌪️🌈☀️🌤️🌦️🌧️🌩️🌨️';
        $food = '🍏🍎🍐🍊🍋🍌🍉🍇🍓🍒🍑🍍🥭🥥🥝🍅🍆🥑🥦🥒🥬🌶️🌽🥕🧄🧅🥔🍠🥐🥯🍞🥖🥨🧀🧈🍳🥚🍔🍟🍕🌭🥪🌮🌯🥙🍖🍗🥩🍤🍣🍱🥟🍜🍲🍝🥫🥘🍛🍙🍚🍤🍥🥮🍡🍢🍧🍨🍦🥧🍰🎂🍮🍭🍬🍫🍿🍩🍪🥛🍼☕🍵🥤🍺🍻🥂🍷🍸🍹🥃🍶🍾';
        $activities = '⚽🏀🏈⚾🎾🏐🏉🎱🏓🏸🥅🎣🥊🥋🎽⛸️🥌🛷🎿⛷️🏂🏋️🤼🤸⛹️🤺🤾🏌️🏇🧘🛹🛶🏆🥇🥈🥉🎗️🎟️🎫🎖️🏅🎲🎯🎳🎮🕹️🎰🎼🎹🥁🎻🎺🎷🎸🎧🎤🎬🎨🎭🖼️🎪🤹';
        $journey = '🚗🚕🚙🚌🚎🏎️🚓🚑🚒🚐🚚🚛🚜🦯🦽🦼🛴🚲🛵🏍️🛺🚨🚔🚍🚘🚖🚡🚠🚟🚃🚋🚞🚝🚄🚅🚈🚂🚆🚇🚊🚉✈️🛫🛬🛩️💺🚁🚟🚤⛵🛥️🚢🛳️🛶🧭🗺️🧳🏖️🏝️🏜️🌋🗻🏔️🏕️🏟️🏛️🏗️🏘️🏚️🏠🏡🏢🏣🏤🏥🏦🏨🏩🏪🏫🏬🏭🏯🏰💒⛪🕌🛕🕍🕋⛲🌁🌃🏙️🌆🌉🏞️🎠🎡🎢';
        $objects = '⌚📱📲💻🖥️🖨️⌨️🖱️🖲️📷📸📹🎥☎️📺📻📟📠📞🔋🔌💡🔦🕯️🪔🧯🛢️💸💵💴💶💷💰💳🧾💎⚖️🔧🔨⚒️🛠️⛏️⚙️🧱🔪🧴🚪🛏️🛋️🚽🚿🛁🛀🧽🧹🧺🧻🧼🧯🛒🎁🎈🎀🎉🎊🧧🎋🎗️🖼️🔑🗝️🔐🔒🔓';
        $symbols = '❤️💔❣️💕💞💓💗💖💘💝💟☮️✝️☪️🕉️☸️✡️🔯☯️⚛️🈴🈹☢️☣️🈲🔱⭕✅☑️✔️❌❎➕➖➗💯🔰🆘❗❕❓❔‼️⁉️⚠️♻️💠♾️💢🛑';
    
        // Defina as categorias e use o método splitAndCleanEmojis para processar cada string de emojis
        $categoriesEmojis = [
            [
                'icone' => '😀',
                'titulo' => 'Sorrisos e Pessoas',
                'icones' => $this->splitAndCleanEmojis($smilesAndPeoples),
            ],
            [
                'icone' => '🐼',
                'titulo' => 'Animais e Natureza',
                'icones' => $this->splitAndCleanEmojis($animals),
            ],
            [
                'icone' => '🍕',
                'titulo' => 'Comidas e Bebidas',
                'icones' => $this->splitAndCleanEmojis($food),
            ],
            [
                'icone' => '🏀',
                'titulo' => 'Atividades',
                'icones' => $this->splitAndCleanEmojis($activities),
            ],
            [
                'icone' => '🚘',
                'titulo' => 'Viagens e Lugares',
                'icones' => $this->splitAndCleanEmojis($journey),
            ],
            [
                'icone' => '💡',
                'titulo' => 'Objetos',
                'icones' => $this->splitAndCleanEmojis($objects),
            ],
            [
                'icone' => '❤️  ',
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
        $emojisArray = preg_split('//u', $emojis, -1, PREG_SPLIT_NO_EMPTY);
        return $emojisArray;
    }
}
