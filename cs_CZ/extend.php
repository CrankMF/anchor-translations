<?php

return array(

	'extend' => 'Rozšíření',

	'fields' => 'Vlastní položky',
	'fields_desc' => 'Vytvorit vlastní položku',

	'variables' => 'Proměnné',
	'variables_desc' => 'Přídavná metadata',

	'create_field' => 'Vytvořit novou položku',
	'editing_custom_field' => 'Úprava položky &ldquo;%s&rdquo;',
	'nofields_desc' => 'Zatím žádné položky.',

	'create_variable' => 'Vytvořit novou proměnnou',
	'editing_variable' => 'Úprava proměnné &ldquo;%s&rdquo;',
	'novars_desc' => 'Zatím žádné proměnné.',

	// form fields
	'type' => 'Typ',
	'type_explain' => 'Typ obsahu který chcete přidat.',

	'field' => 'Položka',
	'field_explain' => 'HTML Input',

	'key' => 'Unikátní klíč',
	'key_explain' => 'Unikátní klíč Vaší položky.',
	'key_missing' => 'Prosím zadejte unikátní klíč.',
	'key_exists' => 'Klíč je již používán.',

	'label' => 'Popis',
	'label_explain' => 'Pro člověka srozumitelný popis',
	'label_missing' => 'Prosím zadejte popis.',

	'attribute_type' => 'Typy souborů',
	'attribute_type_explain' => 'Čárkou separovaný seznam akceptovatelných typů souborů, prázdný pro akceptování všech.',

	// images
	'attributes_size_width' => 'Maximální šířka obrázku',
	'attributes_size_width_explain' => 'Obrázky budou převedeny na maximální šířku pokud ji přesáhnou.',

	'attributes_size_height' => 'Maximální výška obrázku',
	'attributes_size_height_explain' => 'Obrázky budou převedeny na maximální výšku pokud ji přesáhnou.',

	// custom vars
	'name' => 'Název',
	'name_explain' => 'Unikátní název',
	'name_missing' => 'Prosím zadejte unikátní název.',
	'name_exists' => 'Název je již používán.',

	'value' => 'Hodnota',
	'value_explain' => 'Data která chcete uložit (up to 64kb)',
	'value_code_snipet' => 'Ústřižek pro vložení do předlohy:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Proměnná byla vytvořena.',
	'variable_updated' => 'Proměnná byla aktualizována.',
	'variable_deleted' => 'Proměnná byla smazána.',

	'field_created' => 'Položka byla vytvořena',
	'field_updated' => 'Položka byla aktualizována',
	'field_deleted' => 'Položka byla smazána'

);