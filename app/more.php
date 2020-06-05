<?php

$more = [

  [
    "img1"        => "ressources/madarin.png",
    "img2"        => "ressources/poisson-mandarin-slider-2-800x400.jpg",
    "max"        => "ressources/mandarin-rotate.png",
    "name"        => "LE POISSON MANDARIN",
    "description" => "Avec des couleurs aussi éclatantes que les siennes, le poisson mandarin, Synchiropus splendidus, fait concurrence aux autres espèces des récifs du pacifique.",
    "fiche1_1"    => "EMBRANCHEMENT",
    "fiche1_2"    => "Chordés",
    "fiche2_1"    => "RÉPARTITION GÉOGRAPHIQUE",
    "fiche2_2"    => "Pacifique Ouest (du Japon à l’Australie), Nouvelle-Calédonie",
    "fiche3_1"    => "TAILLE",
    "fiche3_2"    => "Jusqu’à 6 cm",
    "fiche4_1"    => "PROTECTION",
    "fiche4_2"    => "Espèce non listée par la CITES (Convention sur le commerce international des espèces en danger)",
    "title"       => "DE MULTIPLES NUANCES DE COULEURS",
    "text"        => "Aussi appelé « poisson-cachemire », le poisson mandarin est bien reconnaissable grâce à ses éclatantes couleurs. Il tient son nom des tenues traditionnelles très colorées des mandarins chinois. Les formes colorées changent d’un poisson-mandarin à l’autre. C’est une espèce très prolifique, capable de pondre presque tous les jours :  elle s’accouple en pleine eau le soir. Il vit dans les eaux chaudes du Pacifique : récifs coralliens, éboulis rocheux jusqu’à 18 mètres de profondeur. Il se nourrit de vers et de crustacés. Le poisson mandarin n’a pas d’écailles, sa peau est recouverte d’un épais mucus qui lui permet de se protéger des bactéries mais aussi des prédateurs. Ce mucus contiendrait des toxines capables de repousser les prédateurs qui s’approcheraient d’un peu trop près !"

  ],

  [
    "img1"        => "ressources/aurelie.png",
    "img2"        => "ressources/aurelia-aurita-pp-2.jpg",
    "max"        => "ressources/aurelie-rotate.png",
    "name"        => "LA MÉDUSE AURÉLIE",
    "description" => "Fascinante mais urticante, Aurelia aurita, la méduse Aurélie déambule gracieusement dans toutes les mers du globe excepté dans les eaux froides des zones polaires.",
    "fiche1_1"    => "EMBRANCHEMENT",
    "fiche1_2"    => "Cnidaire",
    "fiche2_1"    => "TAILLE",
    "fiche2_2"    => "De 5 à 40 cm",
    "fiche3_1"    => "ALIMENTATION",
    "fiche3_2"    => "Zooplancton",
    "fiche4_1"    => "PROTECTION",
    "fiche4_2"    => "Espèce non listée par la CITES (Convention sur le commerce international des espèces en danger)",
    "title"       => "LA MÉDUSE, URTICANTE ET TRANSLUCIDE",
    "text"        => "La méduse aurélie aussi surnommée, méduse bleue ou méduse lune doit ses surnoms à sa couleur blanche-bleutée translucide. Elle fait partie du macro plancton (le gros plancton) et nage en surface, près des côtes ou en pleine mer mais toujours à faible profondeur. Elle se laisse porter par les courants et nage en contractant son ombrelle par ondulations régulières, comme une pulsation. Elle apprécie tout particulièrement les eaux polluées qui ont une température plus élevée que la moyenne. On peut la trouver dans les ports, et les zones de rejet des eaux de refroidissement des centrales nucléaires. Pour garantir sa croissance et sa reproduction, la jeune méduse doit absorber chaque jour, une quantité de nourriture supérieure à son poids."

  ],

  [
    "img1"        => "ressources/papou.png",
    "img2"        => "ressources/manchot-papou-pygoscelis-papua-pp1oceanopolis.jpg",
    "max"        => "ressources/papou-rotate.png",
    "name"        => "LE MANCHOT PAPOU",
    "description" => "Le manchot papou, Pygoscelis papua, affectionne les pentes herbues et les plateaux rocailleux reliés à la mer par de petits sentiers.",
    "fiche1_1"    => "EMBRANCHEMENT",
    "fiche1_2"    => "Chordés",
    "fiche2_1"    => "TAILLE & POIDS",
    "fiche2_2"    => "75 cm pour 6 à 7 kg",
    "fiche3_1"    => "ALIMENTATION",
    "fiche3_2"    => "Krill, poissons, céphalopodes",
    "fiche4_1"    => "PROTECTION",
    "fiche4_2"    => "Espèce non listée par la CITES (Convention sur le commerce international des espèces en danger)",
    "title"       => "COMMENT RECONNAÎTRE LE MANCHOT PAPOU ?",
    "text"        => "Son ventre est blanc et son dos gris bleuté. Il a une tête noire avec une tache blanche formant un bandeau au-dessus de la tête. Son œil est brun ou rouge terne. Son bec est noir et orange. Ses pattes sont jaunes, oranges. Le poussin est couvert de duvet blanc sur le ventre et gris clair sur le dos. Le manchot papou niche par petites colonies principalement sur les côtes, terrains rocailleux, pentes herbues. Elles sont situées dans les latitudes subantarctiques à antarctiques (Falkland, Géorgie du Sud, Péninsule antarctique et îles adjacentes, Marion, Crozet, Kerguelen, Heard, Macquarie). La zone de chasse est souvent très côtière car les voyages alimentaires sont courts. Il plonge généralement à des profondeurs inférieures à 50 m mais peut atteindre 150 à 200 m. La population mondiale est stable à 250 000 à 300 000 couples. Ils ne sont pas menacés mais localement, c’est une espèce sensible au dérangement à proximité des bases scientifiques. Le manchot est une espèce très sensible à la pollution marine."

  ]

];

$number_class = 3;
$number_id = 3;

for ($i=0; $i < 3; $i++) {

  echo '<article class="content-article article'.$number_class.'">';
  echo '  <img class="min" src="'.$more[$i]['img1'].'" alt="Décourvrez la raie pastenague à points bleus">';
  echo '  <img class="max" src="'.$more[$i]['max'].'" alt="Décourvrez la raie pastenague à points bleus">';
  echo '  <div class="content-article-over">';
  echo '    <h3>'.$more[$i]['name'].'</h3>';
  echo '    <div class="focus-button"><a href="index.php?p=article&id='.$number_id.'"><i class="fas fa-chevron-right"></i></a></div>';
  echo '  </div>';
  echo '</article>';

  $number_class++;
  $number_id++;
}

$garbage = "";

$number_class = 3;
$number_id = 3;

 ?>
