</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	$phones	=[
		["Iphone 15", 25000],
		["Samsung Galaxy S23", 23000],
		["Google Pixel 6", 16000],
		["OnePlus 9", 13000],
		["Sony Xperia 1 III", 8000],

	];

	echo "Lista original de teléfonos y precios:\n";
foreach ($phones as $phone) {
    echo "{$phone[0]}: \${$phone[1]}\n";
}

array_push($phones, ["Xiaomi Mi 11", 699], ["Huawei P40", 649]);

usort($phones, function($a, $b) {
    return strcmp($a[0], $b[0]);
});

echo "\nLista actualizada y ordenada de teléfonos y precios:\n";
foreach ($phones as $phone) {
    echo "{$phone[0]}: \${$phone[1]}\n";
}

?>

</body>
</html>