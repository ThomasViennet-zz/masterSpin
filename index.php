<?php
//Exemple type
$contenu = array(
  array(
    '<h1>Pourquoi faire un masterspin ?</h1>',
    '<h1>Quel est l\'intérêt du masterspin ?</h1>',
    '<h1>À quoi sert le masterspin ?</h1>'
  ),
  array(
    '<p>Lorsqu\'on cherche à améliorer le référencement d\'un site internet',
  ),
  array(
    'il y a plusieurs leviers que nous pouvons actionner.</p>',
  ),
  array(
    '<p>De façon générale l\'idée est de',
  ),
  array(
    'séduire les moteurs de recherches',
  ),
  array(
    'en inspirant davantage confiance que vos concurrents et',
  ),
  array(
    'd\'avoir du contenu qui répond aux recherches faites pas votre cible.</p>',
  ),
  array(
    '<p>Le masterspin est une solution pour',
  ),
  array(
    'obtenir le contenu qui garnira votre site afin d\'augmenter vos chances d\'être visible',
  ),
  array(
    'sur un moteur de recherche.</p>',
  ),
  array(
    '<p>Il ne sagit pas ici d\'une solution miracle qui fait tout le travail de référencement.</p>',
  ),
  array(
    '<h2>C\'est quoi un masterspin ?</h2>',
    '<h2>Qu\'est-ce qu\'un masterspin ?</h2>',
    '<h2>En quoi conciste un masterspin ?</h2>'
  ),
  array(
    '<p>C\'est une technique combinant l\'informatique avec la rédaction de contenu.</p>',
  ),
  array(
    '<p>Au lieu d\'écrire un contenu d\'un seul trait,',
  ),
  array(
    'l\'objectif est décrire la même chose de façon différente',
  ),
  //et
  array(
    'cela de façon suffisemment aléatoire et donc unique pour créer beaucoup de contenu sur un sujet.</p>',
  ),
  array(
      '<h2>Quand utiliser le masterspin ?</h2>',
      '<h2>À quel moment choisir de faire un masterspin ?</h2>',
      '<h2>Le masterspin est utile à partir de quel moment ?</h2>'
  ),
  array(
    '<p>Dès que vous metterez moins de temps à écrire un script que d\'écrire les contenus.</p>',
  ),
  array(
    '<p>Vous pouvez améliorer au fil du temps le script pour diversifier les contenus et améliorer leur pertinence.</p>',
  )
);

//affichage exemple
foreach ($contenu as $phrases) {
  $phrase = array_rand($phrases);
  echo $phrases[$phrase];
}


//Affichage par form
foreach ($_POST['phrase'] as $phrases) {
  //$phrase = array_rand($phrases);
  echo $phrases;
}

//nbr phrases
echo count($_POST['phrase']);
?>
<script type="text/javascript">
//Ajout de nouvelles phrases
function addPhrase() {
  try {
    //elements de la phrase
    var divPhrase = document.createElement('div');
    var inputPhrase = document.createElement('input');
    //elements des variantes
    var divVar = document.createElement('div');
    var inputVar = document.createElement('input');
    //elements bloc variantes
    var divVarId = document.createElement('div');

    //attribus input de la phrase
    inputPhrase.setAttribute('type','text');
    inputPhrase.setAttribute('name','phrase[]');
    inputPhrase.setAttribute('value','');
    inputPhrase.appendChild(document.createTextNode(''));

    //edit div de la phrase
    divPhrase.appendChild(document.createTextNode('Phrase: '));
    divPhrase.appendChild(inputPhrase);

    //attribus input des variantes
    inputVar.setAttribute('type','button');
    inputVar.setAttribute('name','variantes[]');
    inputVar.setAttribute('onclick','addVar()');
    inputVar.setAttribute('value','Ajouter une variante');
    inputVar.appendChild(document.createTextNode(''));

    //edit div des variantes
    divVar.appendChild(inputVar);

    //attribu bloc variantes (stocker id du tableau)
    divVar.setAttribute('name','bloc[]');

    //ordre affichage
    document.getElementById('contenu').appendChild(divPhrase);
    document.getElementById('contenu').appendChild(divVarId);
    document.getElementById('contenu').appendChild(divVar);
  } catch(e) {
    alert(e);
  }
}

function addVar() {
  try {
    var div = document.createElement('div');
    var input = document.createElement('input');

    input.setAttribute('type','text');
    input.setAttribute('name','variante');
    input.setAttribute('value','');
    input.appendChild(document.createTextNode(''));

    div.appendChild(document.createTextNode('Variante: '));
    div.appendChild(input);

    //affichage
    document.getElementById('variantes').appendChild(div);
  } catch(e) {
    alert(e);
  }
}
</script>

<form action="index.php" method="post">
  <fieldset>
    <legend>Contenu</legend>
    <div id="contenu">
      <div>Phrase: <input type="text" name="phrase[]" value="" />
        <div id="variantes">
        <input type="button" onclick="addVar()" value="Ajouter une variante" />
        </div>
      </div>
    </div>

    <input type="button" onclick="addPhrase()" value="Ajouter une phrase" />
    <input type="submit" value="Submit">
  </fieldset>
</form>
